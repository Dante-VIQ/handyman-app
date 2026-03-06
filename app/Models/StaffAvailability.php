<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffAvailability extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'date',
        'time_slots',
        'status',
        'notes'
    ];

    protected $casts = [
        'date' => 'date',
        'time_slots' => 'array'
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Scopes
    public function scopeDate($query, $date)
    {
        return $query->where('date', $date);
    }

    public function scopeAvailable($query)
    {
        return $query->where('status', 'available');
    }

    public function scopeUnavailable($query)
    {
        return $query->where('status', 'unavailable');
    }

    public function scopeUser($query, $userId)
    {
        return $query->where('user_id', $userId);
    }

    // Methods
    public function isAvailableForSlot($time)
    {
        if ($this->status !== 'available') {
            return false;
        }

        if (empty($this->time_slots)) {
            return true;
        }

        return in_array($time, $this->time_slots);
    }

    public function getAvailableSlots()
    {
        if ($this->status !== 'available') {
            return [];
        }

        return $this->time_slots ?? [];
    }
}
