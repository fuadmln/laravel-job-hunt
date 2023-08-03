<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'company', 'description', 'location', 'salary_min', 'salary_max', 'job_type', 'status', 'priority', 'note', 'reference'
    ];
}
