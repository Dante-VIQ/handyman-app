<?php

namespace App\Livewire;

use App\Models\License;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class LicensesDisplay extends Component
{
    public $filter = 'all'; // all, active, expiring, expired
    public $search = '';
    public $sortBy = 'sort_order';
    public $sortDirection = 'asc';
    public $perPage = 12;

    protected $queryString = [
        'filter' => ['except' => 'all'],
        'search' => ['except' => ''],
        'sortBy' => ['except' => 'sort_order'],
        'sortDirection' => ['except' => 'asc'],
    ];

    public function mount()
    {
        // Initialize any data
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function updatedFilter()
    {
        $this->resetPage();
    }

    public function sortBy($field)
    {
        if ($this->sortBy === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'asc';
        }

        $this->sortBy = $field;
    }

    public function resetFilters()
    {
        $this->reset(['filter', 'search', 'sortBy', 'sortDirection']);
        $this->resetPage();
    }

    public function download($licenseId)
    {
        $license = License::where('is_active', true)->findOrFail($licenseId);
        
        if (!Storage::disk('public')->exists($license->document_path)) {
            $this->dispatch('alert', [
                'type' => 'error',
                'message' => 'Document not found.'
            ]);
            return;
        }

        return Storage::disk('public')->download(
            $license->document_path, 
            $license->document_original_name
        );
    }

    public function viewDocument($licenseId)
    {
        $license = License::where('is_active', true)->findOrFail($licenseId);
        
        if (!Storage::disk('public')->exists($license->document_path)) {
            $this->dispatch('alert', [
                'type' => 'error',
                'message' => 'Document not found.'
            ]);
            return;
        }

        // For PDF files, we can open in new tab
        if (str_contains($license->document_type, 'pdf')) {
            $url = asset('storage/' . $license->document_path);
            $this->dispatch('openPdf', url: $url);
        } else {
            // For other files, force download
            return $this->download($licenseId);
        }
    }

    public function render()
    {
        $query = License::where('is_active', true)->latest()->take(2);

        // Apply search
        if ($this->search) {
            $query->where(function ($q) {
                $q->where('title', 'like', '%' . $this->search . '%')
                  ->orWhere('description', 'like', '%' . $this->search . '%')
                  ->orWhere('issuing_authority', 'like', '%' . $this->search . '%');
            });
        }

        // Apply filters
        if ($this->filter === 'expiring') {
            $query->whereNotNull('expiry_date')
                  ->where('expiry_date', '>', now())
                  ->where('expiry_date', '<=', now()->addDays(30));
        } elseif ($this->filter === 'expired') {
            $query->whereNotNull('expiry_date')
                  ->where('expiry_date', '<', now());
        } elseif ($this->filter === 'active') {
            $query->where(function ($q) {
                $q->whereNull('expiry_date')
                  ->orWhere('expiry_date', '>', now());
            });
        }

        // Apply sorting
        $query->orderBy($this->sortBy, $this->sortDirection);

        $licenses = $query->paginate($this->perPage);

        return view('livewire.licenses-display', [
            'licenses' => $licenses,
            'totalCount' => License::where('is_active', true)->count(),
            'expiringCount' => License::where('is_active', true)
                ->whereNotNull('expiry_date')
                ->where('expiry_date', '>', now())
                ->where('expiry_date', '<=', now()->addDays(30))
                ->count(),
            'expiredCount' => License::where('is_active', true)
                ->whereNotNull('expiry_date')
                ->where('expiry_date', '<', now())
                ->count(),
        ]);
    }
}