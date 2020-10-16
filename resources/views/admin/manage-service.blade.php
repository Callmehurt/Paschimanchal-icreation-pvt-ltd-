@extends('admin.dashboard-layout')

@section('content')
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div style="margin-top: 40px">
            <h4 class="p-2">Manage Service</h4>
            <div class="table-wrapper table-responsive">
                <table class="table table-hover text-center">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">description</th>
                        <th scope="col">designing</th>
                        <th scope="col">deployment</th>
                        <th scope="col">testing</th>
                        <th scope="col">support</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($services as $service)
                        <tr>
                            <th scope="row">{{$service->id}}</th>
                            <td>{{$service->title}}</td>
                            <td>
                                @if(strlen($service->description) > 50)
                                    {{ substr($service->description, 0, 50) }}
                                    ....
                                @else
                                    {{$service->description}}
                                @endif
                            </td>
                            <td>
                                @if(strlen($service->designing) > 50)
                                    {{ substr($service->designing, 0, 50) }}
                                    ....
                                @else
                                    {{$service->designing}}
                                @endif
                            </td>
                            <td>
                                @if(strlen($service->deployment) > 50)
                                    {{ substr($service->deployment, 0, 50) }}
                                    ....
                                @else
                                    {{$service->deployment}}
                                @endif
                            </td>
                            <td>
                                @if(strlen($service->testing) > 50)
                                    {{ substr($service->testing, 0, 50) }}
                                    ....
                                @else
                                    {{$service->testing}}
                                @endif
                             </td>
                            <td>
                                @if(strlen($service->support) > 50)
                                    {{ substr($service->support, 0, 50) }}
                                    ....
                                @else
                                    {{$service->support}}
                                @endif
                            </td>
                            <td>
                                <img class="post-img" src="{{ asset('services/'.$service->image) }}">
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#serviceModal-{{$service->id}}">Edit</a>
                                <form action="{{route('delete.service', [$service->id])}}" method="post">
                                    @method('post')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @include('admin.service-edit-modal')
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>

    @endsection