@extends('admin.dashboard-layout')

@section('content')
    <div class="col-lg-8">
        <h4 class="p-2">Add Service</h4>
        <div class="form-wrapper shadow-sm">
            <form action="{{route('add.service')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <input type="hidden" name="_token" value="{{csrf_token()}}">


                <div class="row">
                    <div class="form-group col-lg-6">
                        <label for="title" class="col-md-12 col-form-label text-md-left">{{ __('Service Title:') }}</label>

                        <div class="col-md-12">
                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{old('title')}}" required>

                            @error('title')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group col-lg-6">
                        <label for="description" class="col-md-12 col-form-label text-md-left">{{ __('Description:') }}</label>

                        <div class="col-md-12">
                            <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{old('description')}}" required></textarea>

                            @error('description')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
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

                    <div class="col-lg-12 text-center">
                        <span class="font-weight-medium">Service Timeline</span>
                    </div>

                    <div class="form-group col-lg-6">
                        <label for="designing" class="col-md-3 col-form-label text-md-left">{{ __('Designing:') }}</label>

                        <div class="col-md-12">
                            <textarea id="designing" type="text" class="form-control @error('designing') is-invalid @enderror" name="designing" value="{{old('designing')}}" required></textarea>

                            @error('designing')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group col-lg-6">
                        <label for="deployment" class="col-md-3 col-form-label text-md-left">{{ __('Deployment:') }}</label>

                        <div class="col-md-12">
                            <textarea id="deployment" type="text" class="form-control @error('deployment') is-invalid @enderror" name="deployment" value="{{old('deployment')}}" required></textarea>

                            @error('deployment')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group col-lg-6">
                        <label for="testing" class="col-md-12 col-form-label text-md-left">{{ __('Testing:') }}</label>

                        <div class="col-md-12">
                            <textarea id="testing" type="text" class="form-control @error('testing') is-invalid @enderror" name="testing" value="{{old('testing')}}"></textarea>

                            @error('testing')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group col-lg-6">
                        <label for="support" class="col-md-3 col-form-label text-md-left">{{ __('Support:') }}</label>

                        <div class="col-md-12">
                            <textarea id="support" type="text" class="form-control @error('support') is-invalid @enderror" name="support" value="{{old('support')}}" required></textarea>

                            @error('support')
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

    @endsection