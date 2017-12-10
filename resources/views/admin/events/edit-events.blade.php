@extends('admin.master')

@section('title')
    Edit Event
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">In Edit Event</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="well">
                <form class="form-horizontal" action="{{ url('/events/update-events') }}" method="post" name="editEventForm">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="dept_name" class="col-sm-3">Department Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="department_name" value="{{ $event->department_name }}" id="dept_name" class="form-control">
                            <span class="text-danger">{{ $errors->has('department_name') ? $errors->first('department_name') : '' }}</span>
                            <input type="hidden" name="event_id" value="{{ $event->id }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="event_title" class="col-sm-3">Event Title</label>
                        <div class="col-sm-9">
                            <input type="text" name="event_title" value="{{ $event->event_title }}" id="event_title" class="form-control">
                            <span class="text-danger">{{ $errors->has('event_title') ? $errors->first('event_title') : '' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="event_place" class="col-sm-3">Event Place</label>
                        <div class="col-sm-9">
                            <input type="text" name="event_place" value="{{ $event->event_place }}" id="event_place" class="form-control">
                            <span class="text-danger">{{ $errors->has('event_place') ? $errors->first('event_place') : '' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="event_date" class="col-sm-3">Event Date</label>
                        <div class="col-sm-9">
                            <input type="date" name="event_date" value="{{ $event->event_date }}" id="event_date" class="form-control">
                            <span class="text-danger">{{ $errors->has('event_date') ? $errors->first('event_date') : '' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="event_time" class="col-sm-3">Event Time</label>
                        <div class="col-sm-9">
                            <input type="time" name="event_time" value="{{ $event->event_time }}" id="event_time" class="form-control">
                            <span class="text-danger">{{ $errors->has('event_time') ? $errors->first('event_time') : '' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="event_description" class="col-sm-3">Event Description</label>
                        <div class="col-sm-9">
                            <textarea name="event_description" id="event_description" cols="30" rows="10" class="tinymce" style="resize: vertical;">
                                 {{ $event->event_description }}
                            </textarea>
                            <span class="text-danger">{{ $errors->has('event_description') ? $errors->first('event_description') : '' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="publication_status" class="col-sm-3">Publication Status</label>
                        <div class="col-sm-9">
                            <select name="publication_status" id="publication_status" class="form-control">
                                <option>Select Publication Status</option>
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" name="btn" class="btn btn-success btn-block">Update Event Info</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <script>
        document.forms['editEventForm'].elements['publication_status'].value='{{ $event->publication_status }}';
    </script>

@endsection