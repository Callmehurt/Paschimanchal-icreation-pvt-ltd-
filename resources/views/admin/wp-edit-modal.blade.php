<div class="modal fade" id="wpModal-{{ $place->id }}" tabindex="-1" aria-labelledby="blogModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('update.work-place', [$place->id])}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="_method" value="put">

                    <div class="form-group row">
                        <label for="location" class="col-md-3 col-form-label text-md-left">{{ __('Location:') }}</label>

                        <div class="col-md-12">
                            <input id="location" type="text" class="form-control @error('location') is-invalid @enderror" name="location" value="{{ $place->location }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="staffcount" class="col-md-3 col-form-label text-md-left">{{ __('Staff Count:') }}</label>

                        <div class="col-md-12">
                            <input id="staffcount" type="text" class="form-control @error('staffcount') is-invalid @enderror" name="staffcount"  value="{{ $place->staffcount }}" required>
                        </div>
                    </div>
                    <button type="button" class="btn btn-danger float-right" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success float-right">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>