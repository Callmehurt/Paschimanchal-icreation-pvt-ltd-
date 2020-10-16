<div class="modal fade" id="projectModal-{{ $project->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('update.project', [$project->id])}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="_method" value="put">

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="project_name" class="col-md-12 col-form-label text-md-left">{{ __('Project Name:') }}</label>

                            <div class="col-md-12">
                                <input id="project_name" type="text" class="form-control @error('project_name') is-invalid @enderror" name="project_name" value="{{$project->project_name}}" required>
                            </div>
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="client" class="col-md-12 col-form-label text-md-left">{{ __('Client:') }}</label>

                            <div class="col-md-12">
                                <input id="client" type="text" class="form-control @error('client') is-invalid @enderror" name="client" value="{{$project->client}}" required>
                            </div>
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="area" class="col-md-3 col-form-label text-md-left">{{ __('Area:') }}</label>

                            <div class="col-md-12">
                                <input id="area" type="text" class="form-control @error('area') is-invalid @enderror" name="area" value="{{$project->area}}" required>
                            </div>
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="year" class="col-md-3 col-form-label text-md-left">{{ __('Year:') }}</label>

                            <div class="col-md-12">
                                <input id="year" type="date" class="form-control @error('year') is-invalid @enderror" name="year" value="{{$project->year}}" required>
                            </div>
                        </div>


                        <div class="form-group col-lg-6">
                            <label for="contract_name" class="col-md-12 col-form-label text-md-left">{{ __('Contract Name:') }}</label>

                            <div class="col-md-12">
                                <input id="contract_name" type="text" class="form-control @error('contract_name') is-invalid @enderror" name="contract_name" value="{{$project->contract_name}}">
                            </div>
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="customer" class="col-md-3 col-form-label text-md-left">{{ __('Customer:') }}</label>

                            <div class="col-md-12">
                                <input id="customer" type="text" class="form-control @error('customer') is-invalid @enderror" name="customer" value="{{$project->customer}}" required>
                            </div>
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="description" class="col-md-3 col-form-label text-md-left">{{ __('Description:') }}</label>

                            <div class="col-md-12">
                                <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description">{{$project->description}}</textarea>
                            </div>
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="quantity" class="col-md-3 col-form-label text-md-left">{{ __('Quantity:') }}</label>

                            <div class="col-md-12">
                                <input id="quantity" type="text" class="form-control @error('quantity') is-invalid @enderror" name="quantity" value="{{$project->quantity}}">
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