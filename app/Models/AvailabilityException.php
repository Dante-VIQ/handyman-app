<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvailabilityException extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'type',
        'reason',
        'time_slots',
        'notes',
        'created_by'
    ];

    protected $casts = [
        'date' => 'date',
        'time_slots' => 'array'
    ];

    // Scopes
    public function scopeDate($query, $date)
    {
        return $query->where('date', $date);
    }

    public function scopeType($query, $type)
    {
        return $query->where('type', $type);
    }

    public function scopeActive($query)
    {
        return $query->where('date', '>=', now()->toDateString());
    }

    // Accessors
    public function getTypeLabelAttribute()
    {
        $labels = [
            'closed' => 'Facility Closed',
            'limited' => 'Limited Availability',
            'holiday' => 'Holiday Schedule',
            'maintenance' => 'Maintenance',
            'training' => 'Staff Training',
            'event' => 'Special Event'
        ];

        return $labels[$this->type] ?? ucfirst($this->type);
    }

    public function getFormattedTimeSlotsAttribute()
    {
        if (!$this->time_slots || empty($this->time_slots)) {
            return 'All day';
        }

        return implode(', ', array_map(function($time) {
            return date('g:i A', strtotime($time));
        }, $this->time_slots));
    }

    // Methods
    public function affectsTimeSlot($time)
    {
        if ($this->type === 'closed') {
            return true;
        }

        if (empty($this->time_slots)) {
            return true;
        }

        return in_array($time, $this->time_slots);
    }

    public static function getExceptionsForDate($date)
    {
        return self::where('date', $date)->get();
    }
}
