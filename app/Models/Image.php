<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    
    protected $fillable = [
        'title',
        'image',  // before image
        'photo', // after image (single)
        'user_id',
    ];
    
    protected $casts = [
        // 'photos' => 'array', // Automatically converts JSON to array
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    
    // Accessor for after images
    public function getImageUrlAttribute()
    {
        return $this->image ? asset('storage/' . $this->image) : null;
    }
    
    // Accessor for before image URL
    public function getPhotoUrlAttribute()
    {
        return $this->photo ? asset('storage/' . $this->photo) : null;
    }
    
    // Relationship with user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}