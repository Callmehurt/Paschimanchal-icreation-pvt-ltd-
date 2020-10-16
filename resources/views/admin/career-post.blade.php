@extends('admin.dashboard-layout')


@section('content')
    <div class="col-lg-8">
        <h4 class="p-2">Add Blog</h4>
        <div class="form-wrapper shadow-sm">
            <form action="{{route('add.job')}}" method="post" enctype="multipart/form-data">
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
                    <label for="job_description" class="col-md-3 col-form-label text-md-left">{{ __('Job Description:') }}</label>

                    <div class="col-md-12">
                        <textarea class="form-control" id="job_description" name="job_description"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="job_requirement" class="col-md-3 col-form-label text-md-left">{{ __('Job Requirement:') }}</label>

                    <div class="col-md-12">
                        <textarea id="job_requirement" type="text" class="form-control" name="job_requirement" required></textarea>
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

    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'job_requirement' );
        CKEDITOR.replace( 'job_description' );
    </script>

    @endsection