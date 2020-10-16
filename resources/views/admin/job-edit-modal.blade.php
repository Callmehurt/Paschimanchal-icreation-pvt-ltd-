<div class="modal fade" id="jobModal-{{ $job->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('update.job', [$job->id])}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="_method" value="put">

                    <div class="form-group row">
                        <label for="title" class="col-md-3 col-form-label text-md-left">{{ __('Title:') }}</label>

                        <div class="col-md-12">
                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $job->title }}">

                            @error('title')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="location" class="col-md-3 col-form-label text-md-left">{{ __('Title:') }}</label>

                        <div class="col-md-12">
                            <input id="location" type="text" class="form-control @error('location') is-invalid @enderror" name="location" value="{{ $job->location }}">

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
                            <textarea class="form-control" id="job_description" name="job_description">{{ $job->job_description }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="job_requirement" class="col-md-3 col-form-label text-md-left">{{ __('Job Requirement:') }}</label>

                        <div class="col-md-12">
                            <textarea id="job_requirement" type="text" class="form-control" name="job_requirement" required>{{ $job->job_requirement }}</textarea>
                        </div>
                    </div>

                    <button type="button" class="btn btn-danger float-right" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success float-right">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'job_requirement' );
    CKEDITOR.replace( 'job_description' );
</script>