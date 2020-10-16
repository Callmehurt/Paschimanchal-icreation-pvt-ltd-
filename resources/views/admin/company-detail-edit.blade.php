<div class="modal fade" id="companyModal-{{ $detail->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('update.details', [$detail->id])}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="_method" value="put">
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="title" class="col-md-12 col-form-label text-md-left">{{ __('Location:') }}</label>

                            <div class="col-md-12">
                                <input id="office_location" type="text" class="form-control @error('office_location') is-invalid @enderror" name="office_location" value="{{$detail->office_location}}" required>
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="landline" class="col-md-12 col-form-label text-md-left">{{ __('Landline:') }}</label>

                            <div class="col-md-12">
                                <input id="landline" type="text" class="form-control @error('landline') is-invalid @enderror" name="landline" value="{{$detail->landline}}" required>
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="mobile" class="col-md-12 col-form-label text-md-left">{{ __('Mobile Number:') }}</label>

                            <div class="col-md-12">
                                <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{$detail->mobile}}" required>
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="mail" class="col-md-12 col-form-label text-md-left">{{ __('Mail Account:') }}</label>

                            <div class="col-md-12">
                                <input id="mail" type="email" class="form-control @error('mail') is-invalid @enderror" name="mail" value="{{$detail->mail}}" required>
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="gmail" class="col-md-12 col-form-label text-md-left">{{ __('Gmail Account:') }}</label>

                            <div class="col-md-12">
                                <input id="gmail" type="email" class="form-control @error('gmail') is-invalid @enderror" name="gmail" value="{{$detail->gmail}}" required>
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="domain" class="col-md-12 col-form-label text-md-left">{{ __('Domain:') }}</label>

                            <div class="col-md-12">
                                <input id="domain" type="text" class="form-control @error('domain') is-invalid @enderror" name="domain" value="{{$detail->domain}}" required>
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