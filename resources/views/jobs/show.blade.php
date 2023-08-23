@extends('components/layout')

@section('title', 'Job Details')

@section('main')
   <main class="container-sm">
      <div class="row">
         <div class="col-8">
            <h1>Job Details</h1>
            <table class="table table-sm table-hover">
               <tbody>
                  <tr>
                     <th class="table-dark text-end" scope="row">Position</th>
                     <td class="text-capitalize fw-bold">{{ $job["title"] }}</td>
                  </tr>
                  <tr>
                     <th class="table-dark text-end" scope="row">Company</th>
                     <td class="fw-bold">{{ $job["company"] }}</td>
                  </tr>
                  <tr>
                     <th class="table-dark text-end" scope="row">Job Description</th>
                     <td>{{ $job["description"] }}</td>
                  </tr>
                  <tr>
                     <th class="table-dark text-end" scope="row">Location</th>
                     <td>{{ $job["location"] }}</td>
                  </tr>
                  <tr>
                     <th class="table-dark text-end" scope="row">Salary Min.</th>
                     <td>{{ number_format( $job["salary_min"], 0, ',', '.') }}</td>
                  </tr>
                  <tr>
                     <th class="table-dark text-end" scope="row">Salary Max.</th>
                     <td>{{ number_format( $job["salary_max"], 0, ',', '.') }}</td>
                  </tr>
                  <tr>
                     <th class="table-dark text-end" scope="row">Job Type</th>
                     <td>{{ $job["job_type"] }}</td>
                  </tr>
                  <tr>
                     <th class="table-dark text-end" scope="row">Status</th>
                     <td>{{ $job["status"] }}</td>
                  </tr>
                  <tr>
                     <th class="table-dark text-end" scope="row">Priority</th>
                     <td>{{ $job["priority"] }}</td>
                  </tr>
                  <tr>
                     <th class="table-dark text-end" scope="row">Notes</th>
                     <td>{{ $job["note"] }}</td>
                  </tr>
                  <tr>
                     <th class="table-dark text-end" scope="row">Refrence</th>
                     <td>{{ $job["reference"] }}</td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>

      <div class="row">
         <div class="col">
            <div class="table-responsive">
               <table class="table caption-top">
                  <caption>Steps</caption>
                  <thead>
                  <tr class="table-dark">
                     <th scope="col">#</th>
                     <th scope="col">Name</th>
                     <th scope="col">Date</th>
                     <th scope="col">Description</th>
                     <th scope="col">Status</th>
                     <th scope="col">Note</th>
                     <th scope="col">Review</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($job["steps"] as $step)
                     <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $step["name"] }}</td>
                        <td>{{ $step["schedule_date"] }}</td>
                        <td class="w-20">
                           <span class="line-truncate-4">
                              {{ $step["description"] }}
                           </span>
                        </td>
                        <td>{{ $step["status"] }}</td>
                        <td class="w-20">
                           <span class="line-truncate-4">
                              {{ $step["note"] }}
                           </span>
                        </td>
                        <td class="w-20">
                           <span class="line-truncate-4">
                           {{ $step["review"] }}
                        </span>
                        </td>
                     </tr>
                  @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </main>
@endsection