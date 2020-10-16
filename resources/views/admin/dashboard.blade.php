@extends('admin.dashboard-layout')

@section('content')
    <div class="col-lg-3 col-md-12 col-sm-12">
        <div class="job-posts">
            <span class="count">{!! $job_count !!}</span>
            <span class="heading">Job Posts</span>
        </div>
    </div>

    <div class="col-lg-3 col-md-12 col-sm-12">
        <div class="job-posts">
            <span class="count">{!! $application_count !!}</span>
            <span class="heading">Applications</span>
        </div>
    </div>
    <div class="col-lg-3 col-md-12 col-sm-12">
        <div class="job-posts">
            <span class="count">{!! $project_count !!}</span>
            <span class="heading">Projects</span>
        </div>
    </div>
    <div class="col-lg-3 col-md-12 col-sm-12">
        <div class="job-posts shadow-sm">
            <span class="count">{!! $blog_count !!}</span>
            <span class="heading">Blogs</span>
        </div>
    </div>

    @endsection