<?php

namespace App\Models;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'booking_number',
        'type',
        'appointment_date',
        'appointment_time',
        'first_name',
        'last_name',
        'email',
        'phone',
        'relationship',
        'resident_name',
        'attendees',
        'special_requests',
        'status',
        'confirmed_at',
        'cancelled_at',
        'reminder_sent_at',
        'notes'
    ];

    protected $casts = [
        'appointment_date' => 'date',
        'confirmed_at' => 'datetime',
        'cancelled_at' => 'datetime',
        'reminder_sent_at' => 'datetime',
        'attendees' => 'integer',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($booking) {
            $booking->booking_number = 'AP-' . strtoupper(uniqid());
            $booking->status = 'pending';
        });
    }

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function followUps()
    {
        return $this->hasMany(BookingFollowUp::class);
    }

    // Scopes
    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    public function scopeConfirmed($query)
    {
        return $query->where('status', 'confirmed');
    }

    public function scopeCancelled($query)
    {
        return $query->where('status', 'cancelled');
    }

    public function scopeUpcoming($query)
    {
        return $query->where('appointment_date', '>=', now()->toDateString())
                     ->where('status', 'confirmed');
    }

    public function scopeToday($query)
    {
        return $query->where('appointment_date', today())
                     ->where('status', 'confirmed');
    }

    // Accessors
    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getFormattedDateAttribute()
    {
        return $this->appointment_date->format('l, F j, Y');
    }

    public function getFormattedTimeAttribute()
    {
        return date('g:i A', strtotime($this->appointment_time));
    }

    public function getDurationAttribute()
    {
        $durations = [
            'tour' => 60,
            'assessment' => 90,
            'virtual' => 45
        ];

        return $durations[$this->type] ?? 60;
    }

    public function getTypeLabelAttribute()
    {
        $labels = [
            'tour' => 'Facility Tour',
            'assessment' => 'Care Assessment',
            'virtual' => 'Virtual Tour'
        ];

        return $labels[$this->type] ?? 'Tour';
    }

    // Methods
    public function confirm()
    {
        $this->update([
            'status' => 'confirmed',
            'confirmed_at' => now()
        ]);
    }

    public function cancel($reason = null)
    {
        $this->update([
            'status' => 'cancelled',
            'cancelled_at' => now(),
            'notes' => $this->notes . "\nCancellation reason: " . $reason
        ]);
    }

    public function isUpcoming()
    {
        return $this->status === 'confirmed' &&
               $this->appointment_date >= now()->toDateString();
    }

    public function shouldSendReminder()
    {
        $reminderDate = $this->appointment_date->subDay();
        return $this->status === 'confirmed' &&
               now()->toDateString() === $reminderDate->toDateString() &&
               !$this->reminder_sent_at;
    }

    public function services()
    {
        return $this->belongsToMany(Service::class, 'booking_service', 'booking_id', 'service_id')
                    ->withTimestamps();
    }
}
