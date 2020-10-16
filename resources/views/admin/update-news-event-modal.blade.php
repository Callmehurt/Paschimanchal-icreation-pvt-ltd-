<div class="modal fade" id="eventModal-{{ $event->id }}" tabindex="-1" aria-labelledby="blogModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit News & Events</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('update.events', [$event->id])}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="_method" value="put">

                    <div class="form-group">
                        <label for="title" class="col-form-label">Title:</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$event->title}}">
                    </div>
                    <div class="form-group">
                        <label for="content" class="col-form-label">content:</label>
                        <textarea class="form-control" id="content" name="content">{{$event->content}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="title" class="col-form-label">Location:</label>
                        <input type="text" class="form-control" id="location" name="location" value="{{$event->location}}">
                    </div>
                    <div class="form-group">
                        <label for="date" class="col-form-label">Date:</label>
                        <input type="date" class="form-control" id="date" name="date" value="{{$event->date}}">
                    </div>
                    <div class="form-group">
                        <label for="image" class="col-form-label">Image:</label>
                        <input type="file" class="form-control-file" id="image" name="image" />
                    </div>
                    <button type="button" class="btn btn-danger float-right" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success float-right">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>