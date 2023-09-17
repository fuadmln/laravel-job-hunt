@extends('components/layout')

@section('title', 'Find Jobs')



@section('main')

@php
   $job_platforms = [
      [
         "name" => "Jobstreet",
         "url" => "https://www.jobstreet.co.id/id/jobs",
         "img_url" => ""
      ],
      [
         "name" => "Glints",
         "url" => "https://glints.com/id/en/lowongan-kerja",
         "img_url" => ""
      ],
      [
         "name" => "Tech in Asia",
         "url" => "https://www.techinasia.com/jobs/search",
         "img_url" => ""
      ],

      [
         "name" => "LinkedIn",
         "url" => "https://www.linkedin.com/jobs/",
         "img_url" => ""
      ],
      [
         "name" => "Kalibrr",
         "url" => "https://www.kalibrr.com/id-ID/job-board/1",
         "img_url" => ""
      ],
      [
         "name" => "Kita Lulus",
         "url" => "https://kerja.kitalulus.com/id/lowongan",
         "img_url" => ""
      ],
      [
         "name" => "Dealls",
         "url" => "https://dealls.com/",
         "img_url" => ""
      ],
      [
         "name" => "Indeed",
         "url" => "https://id.indeed.com/",
         "img_url" => ""
      ],
      [
         "name" => "GlassDoor",
         "url" => "https://www.glassdoor.com/Job/index.htm",
         "img_url" => ""
      ],
      [
         "name" => "Talent Growth",
         "url" => "https://www.talentgrowth.id/job-categories",
         "img_url" => ""
      ],
      [
         "name" => "Karir",
         "url" => "https://www.karir.com/search",
         "img_url" => ""
      ],
      [
         "name" => "Jora",
         "url" => "https://id.jora.com/lowongankerja",
         "img_url" => ""
      ],
   ];
@endphp

   <main class="container">
      <h1>Find your job on theese platforms below</h1>

      <ul>
      @foreach($job_platforms as $platform)
         <li><a href="{{ $platform["url"] }}" target="_blank"> {{ $platform["name"] }} </a></li>
      @endforeach
      </ul>
   </main>

@endsection