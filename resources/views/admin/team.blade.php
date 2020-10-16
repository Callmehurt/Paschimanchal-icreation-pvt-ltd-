@extends('admin.dashboard-layout')

@section('content')
    <div class="col-lg-8">
        <h4 class="p-2">Add Team Member</h4>
        <div class="form-wrapper shadow-sm">
            <form action="{{route('add.team')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <input type="hidden" name="_token" value="{{csrf_token()}}">

                <div class="row">
                <div class="form-group col-lg-6">
                    <label for="fullname" class="col-md-3 col-form-label text-md-left">{{ __('Fullname:') }}</label>

                    <div class="col-md-12">
                        <input id="fullname" type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{old('fullname')}}" required>

                        @error('fullname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group col-lg-6">
                    <label for="designation" class="col-md-3 col-form-label text-md-left">{{ __('Designation:') }}</label>

                    <div class="col-md-12">
                        <input id="designation" type="text" class="form-control @error('designation') is-invalid @enderror" name="designation" value="{{old('designation')}}" required>

                        @error('designation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group col-lg-6">
                    <label for="intro" class="col-md-3 col-form-label text-md-left">{{ __('Introduction:') }}</label>

                    <div class="col-md-12">
                        <input id="intro" type="text" class="form-control @error('intro') is-invalid @enderror" name="intro" value="{{old('intro')}}" required>

                        @error('intro')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group col-lg-6">
                    <label for="contact" class="col-md-3 col-form-label text-md-left">{{ __('Contact:') }}</label>

                    <div class="col-md-12">
                        <input id="contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{old('contact')}}" required>

                        @error('contact')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group col-lg-6">
                    <label for="link" class="col-md-12 col-form-label text-md-left">{{ __('Facebook Profile(Link):') }}</label>

                    <div class="col-md-12">
                        <input id="link" type="text" class="form-control @error('link') is-invalid @enderror" name="link" value="{{old('link')}}" required>

                    </div>
                </div>


                <div class="form-group col-lg-6">
                    <label for="image" class="col-md-3 col-form-label text-md-left">{{ __('Image:') }}</label>

                    <div class="col-md-12">
                        <input id="image" type="file" class="@error('image') is-invalid @enderror" name="image" required>

                        @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                </div>

                <div class="row justify-content-center">
                <div class="form-group">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Add') }}
                        </button>
                    </div>
                </div>
                </div>
            </form>
        </div>
    </div>

    <div class="col-lg-12">
        <h4 class="p-2" style="margin-top: 20px">Manage Team</h4>
        <div class="table-wrapper table-responsive">
            <table class="table table-hover text-center">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Fullname</th>
                    <th scope="col">Designation</th>
                    <th scope="col">contact</th>
                    <th scope="col">Intro</th>
                    <th scope="col">Profile Link</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($team as $member)
                    <tr>
                        <th scope="row">{{$member->id}}</th>
                        <td>{{$member->fullname}}</td>
                        <td>{{$member->designation}}</td>
                        <td>{{$member->contact}}</td>
                        <td>{{$member->link}}</td>
                        <td>
                            @if(strlen($member->intro) > 50)
                                {{ substr($member->intro, 0, 50) }}
                                ....
                            @else
                                {{$member->intro}}
                            @endif
                        </td>
                        <td>
                            <img class="post-img" src="{{ asset('team/'.$member->image) }}">
                        </td>
                        <td>
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#teamModal-{{$member->id}}">Edit</a>
                            <form action="{{route('delete.team', [$member->id])}}" method="post">
                                @method('post')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @include('admin.team-edit-modal')
                @endforeach

                </tbody>
            </table>
        </div>
    </div>


@endsection