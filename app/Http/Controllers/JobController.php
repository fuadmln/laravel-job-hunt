<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\View\View;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(): View
    {
        $jobs = Job::all()->toArray();
        return view('jobs.index', compact('jobs'));
    }

    public function show(Job $job)
    {
        $job = $job->load('steps')->toArray();
        return view('jobs.show', compact('job'));
    }

    public function create()
    {
        return view('jobs.create');
    }
}