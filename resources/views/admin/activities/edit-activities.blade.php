@extends('admin.master')

@section('title')
    Edit Activity
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">In Edit Activity</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="well">
                <form class="form-horizontal" action="{{ url('/activities/update-activities') }}" method="post" enctype="multipart/form-data" name="editActivitiesForm">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="dept_name" class="col-sm-3">Department Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="department_name" value="{{ $activity->department_name }}" id="dept_name" class="form-control">
                            <span class="text-danger">{{ $errors->has('department_name') ? $errors->first('department_name') : '' }}</span>
                            <input type="hidden" name="activity_id" value="{{ $activity->id }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="activity_title" class="col-sm-3">Activity Title</label>
                        <div class="col-sm-9">
                            <input type="text" name="activity_title" value="{{ $activity->activity_title }}" id="activity_title" class="form-control">
                            <span class="text-danger">{{ $errors->has('activity_title') ? $errors->first('activity_title') : '' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="activity_place" class="col-sm-3">Activity Place</label>
                        <div class="col-sm-9">
                            <input type="text" name="activity_place" value="{{ $activity->activity_place }}" id="activity_place" class="form-control">
                            <span class="text-danger">{{ $errors->has('activity_place') ? $errors->first('activity_place') : '' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="activity_date" class="col-sm-3">Activity Date</label>
                        <div class="col-sm-9">
                            <input type="date" name="activity_date" value="{{ $activity->activity_date }}" id="activity_date" class="form-control">
                            <span class="text-danger">{{ $errors->has('activity_date') ? $errors->first('activity_date') : '' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="activity_description" class="col-sm-3">Activity Description</label>
                        <div class="col-sm-9">
                            <textarea name="activity_description" id="activity_description" cols="30" rows="10" class="tinymce" style="resize: vertical;">
                                 {{ $activity->activity_description }}
                            </textarea>
                            <span class="text-danger">{{ $errors->has('activity_description') ? $errors->first('activity_description') : '' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="activity_image" class="col-sm-3">Activity Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" id="activity_image" class="form-control" accept="image/*">
                            <span class="text-danger">{{ $errors->has('image') ? $errors->first('image') : '' }}</span><br>
                            <img src="{{ asset($activity->image) }}" alt="Image" style="height: 80px;width: 150px;">
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
                            <button type="submit" name="btn" class="btn btn-success btn-block">Update Activity Info</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <script>
        document.forms['editActivitiesForm'].elements['publication_status'].value='{{ $activity->publication_status }}';
    </script>

@endsection