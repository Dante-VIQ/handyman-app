<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'specialty',
        'details',
        'image',
        'icon_class',
        'order'
    ];

    protected $casts = [
        'order' => 'integer',
    ];

    /**
     * Get the image URL.
     */
    public function getImageUrlAttribute()
    {
        return $this->image ? Storage::url($this->image) : null;
    }

    /**
     * Get the icon class with fallback.
     */
    public function getIconClassAttribute($value)
    {
        return $value ?? $this->getDefaultIcon();
    }

    /**
     * Get default icon based on specialty.
     */
    protected function getDefaultIcon()
    {
        $specialty = strtolower($this->specialty);

        if (str_contains($specialty, 'director') || str_contains($specialty, 'doctor')) {
            return 'fas fa-user-md';
        } elseif (str_contains($specialty, 'nurse') || str_contains($specialty, 'care')) {
            return 'fas fa-user-nurse';
        } elseif (str_contains($specialty, 'therapy') || str_contains($specialty, 'wellness')) {
            return 'fas fa-heartbeat';
        } elseif (str_contains($specialty, 'nutrition')) {
            return 'fas fa-apple-alt';
        } else {
            return 'fas fa-user-tie';
        }
    }
}
