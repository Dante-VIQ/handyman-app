<?php

namespace App;

trait HasPhotos
{
    /**
     * Get photos as an array, handling both JSON strings and arrays
     */
    public function getPhotosArrayAttribute()
    {
        if (is_array($this->photos)) {
            return $this->photos;
        }
        
        if (is_string($this->photos)) {
            $decoded = json_decode($this->photos, true);
            return is_array($decoded) ? $decoded : [];
        }
        
        return [];
    }
    
    /**
     * Check if has photos
     */
    public function getHasPhotosAttribute(): bool
    {
        return !empty($this->photos_array);
    }
    
    /**
     * Get first photo URL
     */
    public function getFirstPhotoAttribute()
    {
        $photos = $this->photos_array;
        if (empty($photos)) {
            return null;
        }
        
        $first = reset($photos);
        return is_array($first) ? ($first['url'] ?? null) : $first;
    }
}