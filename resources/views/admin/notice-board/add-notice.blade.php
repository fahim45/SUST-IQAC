@extends('admin.master')

@section('title')
    Add Notice
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">In Add Notice</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            @if($message = Session::get('message'))
                <div class="alert alert-success">
                    <h2 class="text-center text-success">{{$message}}</h2>
                </div>
            @endif
            <div class="well">
                <form class="form-horizontal" action="{{ url('/notice-board/new-notice-board') }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="notice_title" class="col-sm-3">Notice Title</label>
                        <div class="col-sm-9">
                            <input type="text" name="notice_title" id="notice_title" class="form-control">
                            <span class="text-danger">{{ $errors->has('notice_title') ? $errors->first('notice_title') : '' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="notice_description" class="col-sm-3">Notice Description</label>
                        <div class="col-sm-9">
                            <textarea name="notice_description" id="notice_description" cols="30" rows="10" class="tinymce" style="resize: vertical;"></textarea>
                            <span class="text-danger">{{ $errors->has('notice_description') ? $errors->first('notice_description') : '' }}</span>
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
                            <button type="submit" name="btn" class="btn btn-success btn-block">Add Notice Info</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

@endsection