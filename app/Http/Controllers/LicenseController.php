<?php
// app/Http/Controllers/Admin/LicenseController.php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\License;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class LicenseController extends Controller
{
    public function index()
    {
        $licenses = License::orderBy('sort_order')->latest()->paginate(10);
        return view('admin.license.index', compact('licenses'));
    }

    public function create()
    {
        $iconOptions = [
            'fas fa-medal' => 'Medal',
            'fas fa-star' => 'Star',
            'fas fa-heart' => 'Heart',
            'fas fa-award' => 'Award',
            'fas fa-certificate' => 'Certificate',
            'fas fa-file-certificate' => 'File Certificate',
            'fas fa-badge' => 'Badge',
            'fas fa-shield-alt' => 'Shield',
            'fas fa-ribbon' => 'Ribbon',
        ];

        $colorOptions = [
            'bg-gold' => 'Gold',
            'bg-navy' => 'Navy',
            'bg-blue-500' => 'Blue',
            'bg-green-500' => 'Green',
            'bg-red-500' => 'Red',
            'bg-purple-500' => 'Purple',
        ];

        return view('admin.license.create', compact('iconOptions', 'colorOptions'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:500',
            'document' => 'required|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:5120',
            'issuing_authority' => 'nullable|string|max:255',
            'issue_date' => 'nullable|date',
            'expiry_date' => 'nullable|date|after:issue_date',
            'icon' => 'required|string',
            'icon_bg_color' => 'required|string',
            'sort_order' => 'nullable|integer',
            'is_active' => 'boolean',
        ]);

        // Handle file upload
        if ($request->hasFile('document')) {
            $file = $request->file('document');
            $fileName = time() . '_' . Str::slug($file->getClientOriginalName());
            $filePath = $file->storeAs('licenses', $fileName, 'public');
            
            $validated['document_path'] = $filePath;
            $validated['document_original_name'] = $file->getClientOriginalName();
            $validated['document_type'] = $file->getClientMimeType();
        }

        $validated['slug'] = Str::slug($request->title);
        $validated['user_id'] = auth()->id();
        $validated['is_active'] = $request->has('is_active');

        License::create($validated);

        return redirect()->route('licenses.index')
            ->with('success', 'License/Accreditation added successfully.');
    }

    public function edit(License $license)
    {
        $iconOptions = [
            'fas fa-medal' => 'Medal',
            'fas fa-star' => 'Star',
            'fas fa-heart' => 'Heart',
            'fas fa-award' => 'Award',
            'fas fa-certificate' => 'Certificate',
            'fas fa-file-certificate' => 'File Certificate',
            'fas fa-badge' => 'Badge',
            'fas fa-shield-alt' => 'Shield',
            'fas fa-ribbon' => 'Ribbon',
        ];

        $colorOptions = [
            'bg-gold' => 'Gold',
            'bg-navy' => 'Navy',
            'bg-blue-500' => 'Blue',
            'bg-green-500' => 'Green',
            'bg-red-500' => 'Red',
            'bg-purple-500' => 'Purple',
        ];

        return view('admin.license.edit', compact('license', 'iconOptions', 'colorOptions'));
    }

    public function update(Request $request, License $license)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:500',
            'document' => 'nullable|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:5120',
            'issuing_authority' => 'nullable|string|max:255',
            'issue_date' => 'nullable|date',
            'expiry_date' => 'nullable|date|after:issue_date',
            'icon' => 'required|string',
            'icon_bg_color' => 'required|string',
            'sort_order' => 'nullable|integer',
            'is_active' => 'boolean',
        ]);

        // Handle file upload if new document is provided
        if ($request->hasFile('document')) {
            // Delete old file
            if ($license->document_path) {
                Storage::disk('public')->delete($license->document_path);
            }

            $file = $request->file('document');
            $fileName = time() . '_' . Str::slug($file->getClientOriginalName());
            $filePath = $file->storeAs('licenses', $fileName, 'public');
            
            $validated['document_path'] = $filePath;
            $validated['document_original_name'] = $file->getClientOriginalName();
            $validated['document_type'] = $file->getClientMimeType();
        }

        $validated['slug'] = Str::slug($request->title);
        $validated['is_active'] = $request->has('is_active');

        $license->update($validated);

        return redirect()->route('licenses.index')
            ->with('success', 'License/Accreditation updated successfully.');
    }

    public function destroy(License $license)
    {
        // Delete associated file
        if ($license->document_path) {
            Storage::disk('public')->delete($license->document_path);
        }

        $license->delete();

        return redirect()->route('licenses.index')
            ->with('success', 'License/Accreditation deleted successfully.');
    }

    public function download(License $license)
    {
        if (!Storage::disk('public_direct')->exists($license->document_path)) {
            return redirect()->back()->with('error', 'File not found.');
        }

        return Storage::disk('public_direct')->download($license->document_path, $license->document_original_name);
    }

    public function updateOrder(Request $request)
    {
        foreach ($request->order as $order) {
            License::where('id', $order['id'])->update(['sort_order' => $order['position']]);
        }

        return response()->json(['success' => true]);
    }
}