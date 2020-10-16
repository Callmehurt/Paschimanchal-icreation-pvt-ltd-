<div class="modal fade" id="serviceModal-{{ $service->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('update.service', [$service->id])}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="_method" value="put">

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="title" class="col-md-12 col-form-label text-md-left">{{ __('Service Title:') }}</label>

                            <div class="col-md-12">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$service->title}}" required>

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
                                <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" required>{{$service->description}}</textarea>

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
                                <input id="image" type="file" class="@error('image') is-invalid @enderror" name="image">

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
                                <textarea id="designing" type="text" class="form-control @error('designing') is-invalid @enderror" name="designing" required>{{$service->designing}}</textarea>

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
                                <textarea id="deployment" type="text" class="form-control @error('deployment') is-invalid @enderror" name="deployment" required>{{$service->deployment}}</textarea>

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
                                <textarea id="testing" type="text" class="form-control @error('testing') is-invalid @enderror" name="testing">{{$service->testing}}</textarea>

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
                                <textarea id="support" type="text" class="form-control @error('support') is-invalid @enderror" name="support" required>{{$service->support}}</textarea>

                                @error('support')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <button type="button" class="btn btn-danger float-right" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success float-right">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>