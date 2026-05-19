<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class CourseSession extends Model
{
        protected $table = 'course_sessions';
    protected $fillable = [
        'course_id', 'batch_number', 'start_date', 'end_date',
        'slots', 'meeting_link', 'location',
        'schedule_days', 'start_time', 'end_time', // add these if not already
    ];

    public function calculateProgress(): int
    {
        $today     = Carbon::today();
        $startDate = Carbon::parse($this->start_date);
        $endDate   = Carbon::parse($this->end_date);

        if ($today->lt($startDate)) {
            return 0;
        }

        // No schedule defined — linear date-based fallback
        if (!$this->schedule_days) {
            if ($today->gte($endDate)) return 100;
            $total  = $startDate->diffInDays($endDate);
            $passed = $startDate->diffInDays($today);
            return $total > 0 ? (int) round(($passed / $total) * 100) : 0;
        }

        // e.g. "Mon,Tue,Wed" → ['Mon', 'Tue', 'Wed']
        // Carbon::format('D') returns 'Mon', 'Tue', etc. — exact match
        $scheduledDays = array_map('trim', explode(',', $this->schedule_days));

        $totalDays  = 0;
        $passedDays = 0;
        $cursor     = $startDate->copy();

        while ($cursor->lte($endDate)) {
            if (in_array($cursor->format('D'), $scheduledDays)) {
                $totalDays++;
                // Only count as passed if the day is today or earlier
                if ($cursor->lte($today)) {
                    $passedDays++;
                }
            }
            $cursor->addDay();
        }

        if ($totalDays === 0) return 0;

        return (int) round(($passedDays / $totalDays) * 100);
    }

    public function course()
    {
        return $this->belongsTo(\App\Models\Course::class);
    }

    public function enrollments()
    {
        return $this->hasMany(\App\Models\Enrollment::class, 'session_id');
    }

    public function getNextClassDate(): ?Carbon
    {
        if (!$this->schedule_days) {
            // No schedule — use start_date if it's upcoming
            $start = Carbon::parse($this->start_date);
            return $start->gte(Carbon::today()) ? $start : null;
        }

        $scheduledDays = array_map('trim', explode(',', $this->schedule_days));
        $cursor        = Carbon::today();
        $endDate       = Carbon::parse($this->end_date);

        while ($cursor->lte($endDate)) {
            if (in_array($cursor->format('D'), $scheduledDays)) {
                return $cursor;
            }
            $cursor->addDay();
        }

        return null; // batch is over
    }
}
