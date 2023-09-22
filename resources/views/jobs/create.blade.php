@extends('components/layout')

@section('title', 'Create Job Application')

@section('main')
   <main class="container-sm">
      <h1>Add new job</h1>

      <form method="POST" action="/jobs/store">
         @csrf
         
         <div class="mb-2">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
         </div>
         <div class="mb-2">
            <label for="exampleInputPassword1" class="form-label">Company</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
         </div>
         <div class="mb-2">
            <label for="exampleInputPassword1" class="form-label">Location</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
         </div>
         <div class="mb-2">
            <label for="exampleInputPassword1" class="form-label">Salary (IDR)</label>
            <input type="number" class="form-control" id="exampleInputPassword1" value="0" step="100000" min="0">
         </div>

         @php
            $job_type_values = ['full time', 'part time', 'intern', 'study'];
         @endphp
         <div class="mb-2">
            <label for="" class="form-label">Job Type</label>
            <select class="form-select" aria-label="Default select example">
               @foreach ($job_type_values as $value)
                  @if ($loop->first)
                     <option selected value="{{ $value }}">{{ ucwords($value) }}</option>
                     @continue
                  @endif

                  <option value="{{ $value }}">{{ ucwords($value) }}</option>
               @endforeach
            </select>
         </div>

         @php
            $status_values = ["upcoming", "on process", "accepted", "rejected", "aborted", "ghosted"];
         @endphp
         <div class="mb-2">
            <label for="" class="form-label">Status</label>
            <select class="form-select" aria-label="Default select example">
               @foreach ($status_values as $value)
                  @if ($loop->first)
                     <option selected value="{{ $value }}">{{ ucwords($value) }}</option>
                     @continue
                  @endif

                  <option value="{{ $value }}">{{ ucwords($value) }}</option>
               @endforeach
            </select>
         </div>

         <div class="mb-3">
            <label for="" class="form-label">Priority</label>
            <div class="form-check">
               <input class="form-check-input" type="radio" name="jobPriority" id="priority1" value="low" checked>
               <label class="form-check-label" for="priority1">Low</label>
            </div>
            <div class="form-check">
               <input class="form-check-input" type="radio" name="jobPriority" id="priority2" value="mid">
               <label class="form-check-label" for="priority2">Medium</label>
            </div>
            <div class="form-check">
               <input class="form-check-input" type="radio" name="jobPriority" id="priority3" value="high">
               <label class="form-check-label" for="priority3">High</label>
            </div>
         </div>

         <button type="submit" class="btn btn-primary">Submit</button>
         
      </form>
   </main>
@endsection