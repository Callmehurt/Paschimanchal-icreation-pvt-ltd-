@extends('admin.dashboard-layout')

@section('content')

    <div class="col-lg-4">
        <h4 class="p-2">Add Client</h4>
        <div class="form-wrapper shadow-sm">
            <form action="{{route('add.client')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <input type="hidden" name="_token" value="{{csrf_token()}}">


                <div class="form-group row">
                    <label for="name" class="col-md-3 col-form-label text-md-left">{{ __('Name:') }}</label>

                    <div class="col-md-12">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}" required>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="image" class="col-md-3 col-form-label text-md-left">{{ __('Image:') }}</label>

                    <div class="col-md-12">
                        <input id="image" type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" required>

                        @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>



                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Add') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12">
        <div style="margin-top: 20px">
        <h4 class="p-2">Manage Client</h4>
        <div class="table-wrapper table-responsive">
            <table class="table table-hover text-center">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($clients as $client)
                    <tr>
                        <th scope="row">{{$client->id}}</th>
                        <td>{{$client->name}}</td>
                        <td>
                            <img class="post-img" src="{{ asset('clients/'.$client->image) }}">
                        </td>
                        <td>
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#clientModal-{{$client->id}}">Edit</a>
                            <form action="{{route('delete.client', [$client->id])}}" method="post">
                                @method('post')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @include('admin.client-edit-modal')
                @endforeach

                </tbody>
            </table>
        </div>
        </div>

    </div>

    @endsection