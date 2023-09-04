@extends('components/layout')

@section('title', 'Job Applications')

@section('main')
   <main class="container-sm">
      <h1>Jobs list</h1>
      <table class="table table-hover">
         <thead>
            <tr class="table-dark">
               <th scope="col">No</th>
               <th scope="col">Position</th>
               <th scope="col">Company</th>
               <th scope="col">Status</th>
               <th scope="col">Priority</th>
            </tr>
         </thead>
         <tbody id="table-rows">
            @foreach ($jobs as $job)
            <tr data-job-id="{{ $job["id"] }}" style="cursor: pointer;">
               <th scope="row">{{ $loop->iteration }}</th>
               <td>{{ ucwords($job["title"]) }}</td>
               <td>{{ ucwords($job["company"]) }}</td>
               <td>
                  @php
                     // status badge color
                     $status = $job["status"];

                     $status_bg = [
                        "upcoming" => "bg-primary",
                        "on process" => "bg-primary",
                        "accepted" => "bg-success",
                        "rejected" => "bg-danger",
                        "aborted" => "bg-danger",
                        "ghosted" => "bg-danger"
                     ];

                     $bg_col = array_key_exists($status, $status_bg) 
                        ? $status_bg[$status] 
                        : "bg-secondary";
                  @endphp

                  <span class="badge {{ $bg_col }}">
                     {{ ucfirst($job["status"]) }}
                  </span>
               </td>
               <td>
                  @php
                     // priority badge color
                     $bg_col = "bg-secondary";
                     switch ($job["priority"]) {
                        case "low": $bg_col = "bg-secondary"; break;
                        case "med": $bg_col = "bg-primary"; break;
                        case "high": $bg_col = "bg-success"; break;
                        default: $bg_col = "bg-secondary"; break;
                     }
                  @endphp
                     
                  <span class="badge {{ $bg_col }}">
                     {{ ucfirst($job["priority"]) }}
                  </span>
               </td>
            </tr>
            @endforeach
            
         </tbody>
      </table>
   </main>
@endsection

@section('script')
<script>
   let tableRowElements = document.querySelector('#table-rows').children;
   
   Array.from(tableRowElements).forEach(e => {
      let jobId = e.dataset.jobId;
      e.addEventListener('click', (event) => {
         window.location = `http://127.0.0.1:8000/jobs/${jobId}`;
      });
   })
</script>
@endsection