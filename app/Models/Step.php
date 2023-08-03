<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_id', 'name', 'description', 'start_date', 'due_date', 'schedule_date', 'status', 'note', 'review'
    ];
}
