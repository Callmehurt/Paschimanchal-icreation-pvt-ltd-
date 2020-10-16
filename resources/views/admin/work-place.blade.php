@extends('admin.dashboard-layout')

@section('content')
    <div class="col-lg-4">
        <h4 class="p-2">Add Work Place</h4>
        <div class="form-wrapper shadow-sm">
            <form action="{{route('add.work-place')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <input type="hidden" name="_token" value="{{csrf_token()}}">


                <div class="form-group row">
                    <label for="location" class="col-md-3 col-form-label text-md-left">{{ __('Location:') }}</label>

                    <div class="col-md-12">
                        <input id="location" type="text" class="form-control @error('location') is-invalid @enderror" name="location" value="{{old('location')}}" required>

                        @error('location')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="staffcount" class="col-md-3 col-form-label text-md-left">{{ __('Staff Count:') }}</label>

                    <div class="col-md-12">
                        <input id="staffcount" type="text" class="form-control @error('staffcount') is-invalid @enderror" name="staffcount"  value="{{old('staffcount')}}" required>

                        @error('staffcount')
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

    <div class="col-lg-8">
        <h4 class="p-2">Manage Work Place</h4>
        <div class="table-wrapper table-responsive">
            <table class="table table-hover text-center">
                <thead>
                <tr>
                    <th scope="col">Location</th>
                    <th scope="col">Staff Count</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($places as $place)
                    <tr>
                        <td>{{$place->location}}</td>
                        <td>{{$place->staffcount}}</td>
                        <td>
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#wpModal-{{$place->id}}">Edit</a>
                            <form action="{{route('delete.work-place', [$place->id])}}" method="post">
                                @method('post')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @include('admin.wp-edit-modal')
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

    @endsection