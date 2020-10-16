@extends('admin.dashboard-layout')

@section('content')
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div style="margin-top: 40px">
            <h4 class="p-2">Manage Project</h4>
            <div class="table-wrapper table-responsive">
                <table class="table table-hover text-center">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Project Name</th>
                        <th scope="col">Client</th>
                        <th scope="col">Area</th>
                        <th scope="col">Year</th>
                        <th scope="col">Contract Name</th>
                        <th scope="col">Customer</th>
                        <th scope="col">description</th>
                        <th scope="col">quantity</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($projects as $project)
                        <tr>
                            <th scope="row">{{$project->id}}</th>
                            <td>
                                @if(strlen($project->project_name) > 30)
                                    {{ substr($project->project_name, 0, 30) }}
                                    ....
                                @else
                                    {{$project->project_name}}
                                @endif
                            </td>
                            <td>{{$project->client}}</td>
                            <td>
                                @if(strlen($project->area) > 30)
                                    {{ substr($project->area, 0, 30) }}
                                    ....
                                @else
                                    {{$project->area}}
                                @endif
                            </td>
                            <td>{{$project->year}}</td>
                            <td>{{$project->contract_name}}</td>
                            <td>{{$project->customer}}</td>
                            <td>
                                @if(strlen($project->description) > 50)
                                    {{ substr($project->description, 0, 50) }}
                                    ....
                                @else
                                    {{$project->description}}
                                @endif
                            </td>
                            <td>{{$project->quantity}}</td>
                            <td>
                                <img class="post-img" src="{{ asset('projects/'.$project->image) }}">
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#projectModal-{{$project->id}}">Edit</a>
                                <form action="{{route('delete.project', [$project->id])}}" method="post">
                                    @method('post')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                                                @include('admin.project-edit-modal')
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>

    @endsection