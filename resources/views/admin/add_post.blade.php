@extends('layouts.admin-layout')
@section('title', 'Add post')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-body">
                    <form method="POST">
                        {{ csrf_field() }}
                        <div class="form-body">
                            <h3 class="box-title">Add Post</h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Post Title</label>
                                        <input type="text" name="title" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" name="description" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <label class="custom-file d-block">
                                            <input type="file" name="image" class="custom-file-input" required>
                                            <span class="custom-file-control"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Content</label>
                                        <textarea name="content" class="textarea_editor form-control" rows="20" placeholder="Enter text ..." ></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/html5-editor/bootstrap-wysihtml5.css') }}" />
@endsection

@section('scripts')
    <!-- wysuhtml5 Plugin JavaScript -->
    <script src="{{ asset('admin/assets/plugins/html5-editor/wysihtml5-0.3.0.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/html5-editor/bootstrap-wysihtml5.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.textarea_editor').wysihtml5();
        });
    </script>
@endsection