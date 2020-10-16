@extends('admin.dashboard-layout')

@section('content')
    <div class="col-lg-8">
        <h4 class="p-2">Add Project</h4>
        <div class="form-wrapper shadow-sm">
            <form action="{{route('add.project')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <input type="hidden" name="_token" value="{{csrf_token()}}">


                <div class="row">
                <div class="form-group col-lg-6">
                    <label for="project_name" class="col-md-12 col-form-label text-md-left">{{ __('Project Name:') }}</label>

                    <div class="col-md-12">
                        <input id="project_name" type="text" class="form-control @error('project_name') is-invalid @enderror" name="project_name" value="{{old('project_name')}}" required>

                        @error('project_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group col-lg-6">
                    <label for="client" class="col-md-12 col-form-label text-md-left">{{ __('Client:') }}</label>

                    <div class="col-md-12">
                        <input id="client" type="text" class="form-control @error('client') is-invalid @enderror" name="client" value="{{old('client')}}" required>

                        @error('client')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group col-lg-6">
                    <label for="area" class="col-md-3 col-form-label text-md-left">{{ __('Area:') }}</label>

                    <div class="col-md-12">
                        <input id="area" type="text" class="form-control @error('area') is-invalid @enderror" name="area" value="{{old('area')}}" required>

                        @error('area')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group col-lg-6">
                    <label for="year" class="col-md-3 col-form-label text-md-left">{{ __('Year:') }}</label>

                    <div class="col-md-12">
                        <input id="year" type="date" class="form-control @error('year') is-invalid @enderror" name="year" value="{{old('year')}}" required>

                        @error('year')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>


                <div class="form-group col-lg-6">
                    <label for="contract_name" class="col-md-12 col-form-label text-md-left">{{ __('Contract Name:') }}</label>

                    <div class="col-md-12">
                        <input id="contract_name" type="text" class="form-control @error('contract_name') is-invalid @enderror" name="contract_name" value="{{old('contract_name')}}">

                        @error('contract_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group col-lg-6">
                    <label for="customer" class="col-md-3 col-form-label text-md-left">{{ __('Customer:') }}</label>

                    <div class="col-md-12">
                        <input id="customer" type="text" class="form-control @error('customer') is-invalid @enderror" name="customer" value="{{old('customer')}}" required>

                        @error('customer')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group col-lg-6">
                    <label for="description" class="col-md-3 col-form-label text-md-left">{{ __('Description:') }}</label>

                    <div class="col-md-12">
                        <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{old('description')}}"></textarea>

                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group col-lg-6">
                    <label for="quantity" class="col-md-3 col-form-label text-md-left">{{ __('Quantity:') }}</label>

                    <div class="col-md-12">
                        <input id="quantity" type="text" class="form-control @error('quantity') is-invalid @enderror" name="quantity" value="{{old('quantity')}}">

                        @error('quantity')
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