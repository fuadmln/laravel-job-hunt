<?php

namespace App\Models;

use App\Models\Step;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'company', 'description', 'location', 'salary_min', 'salary_max', 'job_type', 'status', 'priority', 'note', 'reference'
    ];

    public const JOB_TYPE_ENUM = ['full time', 'part time', 'intern', 'study'];
    public const STATUS_ENUM = ['upcoming', 'on process', 'accepted', 'rejected', 'aborted', 'ghosted'];
    public const PRIORITY_ENUM = ['low', 'med', 'high'];

    public function steps()
    {
        return $this->hasMany(Step::class);
    }
}
