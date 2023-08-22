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
   </main>
@endsection