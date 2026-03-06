<?php
// app/Models/License.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    use HasFactory; // Remove SoftDeletes trait

    protected $fillable = [
        'title',
        'slug',
        'description',
        'document_path',
        'document_original_name',
        'document_type',
        'issuing_authority',
        'issue_date',
        'expiry_date',
        'icon',
        'icon_bg_color',
        'sort_order',
        'is_active',
        'user_id'
    ];

    protected $casts = [
        'issue_date' => 'date',
        'expiry_date' => 'date',
        'is_active' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getDocumentUrlAttribute()
    {
        return asset('storage/' . $this->document_path);
    }

    public function getIsExpiredAttribute()
    {
        if (!$this->expiry_date) return false;
        return $this->expiry_date->isPast();
    }

    public function getDaysUntilExpiryAttribute()
    {
        if (!$this->expiry_date) return null;
        return now()->diffInDays($this->expiry_date, false);
    }
}