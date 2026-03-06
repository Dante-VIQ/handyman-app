<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalendarEvent extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'title',
        'description',
        'start_time',
        'end_time',
        'event_type',
        'status',
        'external_id',
        'external_provider',
        'metadata'
    ];

    protected $casts = [
        'start_time' => 'datetime',
        'end_time' => 'datetime',
        'metadata' => 'array'
    ];

    // Relationships
    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }

    // Scopes
    public function scopeScheduled($query)
    {
        return $query->where('status', 'scheduled');
    }

    public function scopeCancelled($query)
    {
        return $query->where('status', 'cancelled');
    }

    public function scopeCompleted($query)
    {
        return $query->where('status', 'completed');
    }

    public function scopeUpcoming($query)
    {
        return $query->where('start_time', '>', now())
                     ->where('status', 'scheduled');
    }

    public function scopeToday($query)
    {
        return $query->whereDate('start_time', today())
                     ->where('status', 'scheduled');
    }

    public function scopeType($query, $type)
    {
        return $query->where('event_type', $type);
    }

    // Accessors
    public function getDurationAttribute()
    {
        if ($this->start_time && $this->end_time) {
            return $this->start_time->diffInMinutes($this->end_time);
        }
        return 0;
    }

    public function getFormattedStartTimeAttribute()
    {
        return $this->start_time ? $this->start_time->format('g:i A') : null;
    }

    public function getFormattedEndTimeAttribute()
    {
        return $this->end_time ? $this->end_time->format('g:i A') : null;
    }

    public function getDateAttribute()
    {
        return $this->start_time ? $this->start_time->toDateString() : null;
    }

    // Methods
    public function markAsCompleted()
    {
        $this->update(['status' => 'completed']);
    }

    public function markAsCancelled()
    {
        $this->update(['status' => 'cancelled']);
    }

    public function isUpcoming()
    {
        return $this->status === 'scheduled' &&
               $this->start_time > now();
    }

    public function isInProgress()
    {
        return $this->status === 'scheduled' &&
               $this->start_time <= now() &&
               $this->end_time >= now();
    }

    public function isPast()
    {
        return $this->end_time < now();
    }
}
