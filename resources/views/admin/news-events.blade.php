@extends('admin.dashboard-layout')

@section('content')
    <div class="col-lg-4">
        <h4 class="p-2">Add Event/News</h4>
        <div class="form-wrapper shadow-sm">
            <form action="{{route('add.news.events')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <input type="hidden" name="_token" value="{{csrf_token()}}">


                <div class="form-group row">
                    <label for="title" class="col-md-3 col-form-label text-md-left">{{ __('Title:') }}</label>

                    <div class="col-md-12">
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" required>

                        @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="location" class="col-md-3 col-form-label text-md-left">{{ __('Location:') }}</label>

                    <div class="col-md-12">
                        <input id="location" type="text" class="form-control @error('location') is-invalid @enderror" name="location" required>

                        @error('location')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="date" class="col-md-3 col-form-label text-md-left">{{ __('Date:') }}</label>

                    <div class="col-md-12">
                        <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" required>

                        @error('date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>


                <div class="form-group row">
                    <label for="content" class="col-md-3 col-form-label text-md-left">{{ __('Content:') }}</label>

                    <div class="col-md-12">
                        <textarea id="content" type="text" class="form-control @error('content') is-invalid @enderror" name="content" required></textarea>

                        @error('content')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>



                <div class="form-group row">
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



                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Publish') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    @endsection