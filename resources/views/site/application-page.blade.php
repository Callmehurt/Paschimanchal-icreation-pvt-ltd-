@extends('layouts.site-layout')

@section('content')
    <div class="row justify-content-center">
        @if(session()->has('success'))
            <button type="button" style="margin-top: 40px" class="btn btn-success btn-icon-text btn-rounded">
                <i class="ti-face-smile btn-icon-prepend"></i>
                {!! session()->get('success') !!}
            </button>
        @endif
        <div class="col-lg-4">
            <div class="form-wrapper">
                <form action="{{route('apply')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="job_id" value="{{$job_post->id}}">

                    <div class="form-group row">
                        <label for="fullname" class="col-md-3 col-form-label text-md-left">{{ __('Fullname:') }}</label>

                        <div class="col-md-12">
                            <input id="fullname" type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" required>

                            @error('fullname')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-3 col-form-label text-md-left">{{ __('Email:') }}</label>

                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required></input>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="contact" class="col-md-12 col-form-label text-md-left">{{ __('Contact Number:') }}</label>

                        <div class="col-md-12">
                            <input id="contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" required></input>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>



                    <div class="form-group row">
                        <label for="cv" class="col-md-3 col-form-label text-md-left">{{ __('CV:') }}</label>

                        <div class="col-md-12">
                            <input id="cv" type="file" class="@error('cv') is-invalid @enderror" name="cv" required>

                            @error('cv')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group row mb-0 justify-content-center">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Apply') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

    @endsection