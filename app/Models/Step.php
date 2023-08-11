<?php

namespace App\Models;

use App\Models\Job;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Step extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_id', 'name', 'description', 'start_date', 'due_date', 'schedule_date', 'status', 'note', 'review'
    ];

    public const STATUS_ENUM = ['upcoming', 'done', 'passed', 'failed', 'aborted'];

    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}
