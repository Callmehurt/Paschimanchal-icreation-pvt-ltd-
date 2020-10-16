<div class="modal fade" id="teamModal-{{ $member->id }}" tabindex="-1" aria-labelledby="blogModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('update.team', [$member->id])}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="_method" value="put">

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="fullname" class="col-md-3 col-form-label text-md-left">{{ __('Fullname:') }}</label>

                            <div class="col-md-12">
                                <input id="fullname" type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{ $member->fullname }}" required>

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
                                <input id="designation" type="text" class="form-control @error('designation') is-invalid @enderror" name="designation" value="{{ $member->designation }}" required>

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
                                <input id="intro" type="text" class="form-control @error('intro') is-invalid @enderror" name="intro" value="{{ $member->intro }}" required>
                            </div>
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="contact" class="col-md-3 col-form-label text-md-left">{{ __('Contact:') }}</label>

                            <div class="col-md-12">
                                <input id="contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ $member->contact }}" required>

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
                                <input id="link" type="text" class="form-control @error('link') is-invalid @enderror" name="link" value="{{ $member->link }}" required>

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

                    </div>
                    <button type="button" class="btn btn-danger float-right" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success float-right">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>