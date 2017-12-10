@extends('admin.master')

@section('title')
    Edit File
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">In Edit File</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="well">
                <form class="form-horizontal" action="{{ url('/download/update-file') }}" method="post" enctype="multipart/form-data" name="editFileForm">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="file_name" class="col-sm-3">File Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="file_name" value="{{ $file->file_name }}" id="file_name" class="form-control" required>
                            <span class="text-danger">{{ $errors->has('file_name') ? $errors->first('file_name') : '' }}</span>
                            <input type="hidden" name="file_id" value="{{ $file->id }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="file_type" class="col-sm-3">File Type</label>
                        <div class="col-sm-9">
                            <select name="file_type" id="file_type" class="form-control" required>
                                <option value="">Select File Type</option>
                                <option value="1">Manual</option>
                                <option value="2">Document</option>
                            </select>
                            <span class="text-danger">{{ $errors->has('file_type') ? $errors->first('file_type') : '' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="uploaded_file" class="col-sm-3">Uploaded File</label>
                        <div class="col-sm-9">
                            <input type="file" name="uploaded_file" id="uploaded_file" class="form-control" accept=".xlsx,.xls,.doc,.docx,.ppt,.pptx,.txt,.pdf">
                            <span class="text-danger">{{ $errors->has('uploaded_file') ? $errors->first('uploaded_file') : '' }}</span>
                            <span style="font-weight: 800; text-decoration: underline;">{{ $file->uploaded_file }}</span>
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
                            <button type="submit" name="btn" class="btn btn-success btn-block">Update File Info</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <script>
        document.forms['editFileForm'].elements['file_type'].value='{{ $file->file_type }}';
        document.forms['editFileForm'].elements['publication_status'].value='{{ $file->publication_status }}';
    </script>

@endsection