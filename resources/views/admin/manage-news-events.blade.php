@extends('admin.dashboard-layout')

@section('content')
    <div class="col-lg-12">
        <h4 class="p-2">Manage News/Events</h4>
        <div class="table-wrapper table-responsive">
            <table class="table table-hover text-center">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Location</th>
                    <th scope="col">Date</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                    <th scope="col">Gallery</th>
                </tr>
                </thead>
                <tbody>

                @foreach($events as $event)
                    <tr>
                        <th scope="row">{{$event->id}}</th>
                        <td>{{$event->title}}</td>
                        <td>
                            @if(strlen($event->content) > 50)
                                {{ substr($event->content, 0, 50) }}
                                ....
                            @else
                                {{$event->content}}
                            @endif
                        </td>
                        <td>{{$event->location}}</td>
                        <td>{{$event->date}}</td>
                        <td>
                            <img class="post-img" src="{{ asset('events/'.$event->image) }}">
                        </td>
                        <td>
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#eventModal-{{$event->id}}">Edit</a>
                            <form action="{{route('delete.news.events', [$event->id])}}" method="post">
                                @method('post')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        <td>
                            <a href="{{route('show.photo',[$event->id])}}" class="btn btn-primary">Manage Gallery</a>
                        </td>

                    </tr>
                    @include('admin.update-news-event-modal')
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
    @endsection