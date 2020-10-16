@extends('admin.dashboard-layout')

@section('content')
    <div class="col-lg-8">
        <h4 class="p-2">Manage Job Post</h4>
        <div class="table-wrapper table-responsive">
            <table class="table table-hover text-center">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Job Description</th>
                    <th scope="col">Job Requirement</th>
                    <th scope="col">Action</th>

                </tr>
                </thead>
                <tbody>

                @foreach($jobs as $job)
                    <tr>
                        <th scope="row">{{$job->id}}</th>
                        <td>{{$job->title}}</td>
                        <td>
                            @if(strlen($job->job_description) > 30)
                                {{ substr($job->job_description, 0, 30) }}
                                ....
                            @else
                                {{$job->job_description}}
                            @endif
                        </td>
                        <td>
                            @if(strlen($job->job_requirement) > 30)
                                {{ substr($job->job_requirement, 0, 30) }}
                                ....
                            @else
                                {{$job->job_requirement}}
                            @endif
                        </td>
                        <td>
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#jobModal-{{$job->id}}">Edit</a>
                            <form action="{{route('delete.job', [$job->id])}}" method="post">
                                @method('post')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        <td>
                            <a href="{{route('view.application', [$job->id])}}" class="btn btn-primary">View Applications</a>
                        </td>
                    </tr>
                    @include('admin.job-edit-modal')
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

    @endsection