<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingFollowUp extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'type',
        'scheduled_date',
        'completed_date',
        'notes',
        'outcome',
        'assigned_to',
        'status'
    ];

    protected $casts = [
        'scheduled_date' => 'date',
        'completed_date' => 'datetime'
    ];

    // Relationships
    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }

    public function assignedUser()
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }

    // Scopes
    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    public function scopeCompleted($query)
    {
        return $query->where('status', 'completed');
    }

    public function scopeOverdue($query)
    {
        return $query->where('scheduled_date', '<', now()->toDateString())
                     ->where('status', 'pending');
    }

    // Accessors
    public function getTypeLabelAttribute()
    {
        $labels = [
            'phone_call' => 'Phone Call',
            'email' => 'Email Follow-up',
            'meeting' => 'In-person Meeting',
            'assessment' => 'Care Assessment',
            'paperwork' => 'Paperwork Review'
        ];

        return $labels[$this->type] ?? ucfirst(str_replace('_', ' ', $this->type));
    }

    public function getStatusLabelAttribute()
    {
        $labels = [
            'pending' => 'Pending',
            'completed' => 'Completed',
            'cancelled' => 'Cancelled',
            'rescheduled' => 'Rescheduled'
        ];

        return $labels[$this->status] ?? ucfirst($this->status);
    }

    // Methods
    public function markAsCompleted($notes = null, $outcome = null)
    {
        $this->update([
            'status' => 'completed',
            'completed_date' => now(),
            'notes' => $notes ? $this->notes . "\nCompleted: " . $notes : $this->notes,
            'outcome' => $outcome
        ]);
    }

    public function isOverdue()
    {
        return $this->status === 'pending' &&
               $this->scheduled_date < now()->toDateString();
    }
}
