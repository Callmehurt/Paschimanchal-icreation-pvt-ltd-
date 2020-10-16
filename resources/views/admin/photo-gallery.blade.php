@extends('admin.dashboard-layout')

@section('content')
    <div class="col-lg-12">
        <h4>Add Photos</h4>
        <form action="{{route('upload.photo')}}" enctype="multipart/form-data" method="post" class="dropzone" id="dropzone">
            @csrf
            <input type="hidden" name="event_id" value="{{$id}}">
        </form>
    </div>
    <div class="col-lg-12">
        <h4 class="p-2" style="margin-top: 20px">Manage Gallery</h4>
        <div class="table-wrapper table-responsive">
            <table class="table table-hover text-center">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($images as $img)
                    <tr>
                        <th scope="row">{{$img->id}}</th>
                        <td>
                            <img class="post-img" src="{{ asset('gallery/'.$img->image) }}">
                        </td>
                        <td>
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#photoUpdateModal-{{$img->id}}">Edit</a>
                            <form action="{{route('remove.photo', [$img->id])}}" method="post">
                                @method('post')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @include('admin.image-edit-modal')
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <script type="text/javascript">
        Dropzone.options.dropzone = {
            acceptedFiles: ".jpeg, .jpg, .png, .gif",
            addRemoveLinks: true,
            timeout: 50000,
        };
    </script>

    @endsection