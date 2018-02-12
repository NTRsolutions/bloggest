@extends('layouts.admin-layout')
@section('title', 'Settings')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-body">
                    <form method="POST">
                        {{ csrf_field() }}
                        <div class="form-body">
                            <h3 class="box-title">Home</h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Heading</label>
                                        <input type="text" name="home-heading" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Subheading</label>
                                        <input type="text" name="home-subheading" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <label class="custom-file d-block">
                                            <input type="file" name="home-image" class="custom-file-input" required>
                                            <span class="custom-file-control"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <h3 class="box-title">About</h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Heading</label>
                                        <input type="text" name="about-heading" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Subheading</label>
                                        <input type="text" name="about-subheading" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <label class="custom-file d-block">
                                            <input type="file" name="about-image" class="custom-file-input" required>
                                            <span class="custom-file-control"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <h3 class="box-title">Contact</h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Heading</label>
                                        <input type="text" name="contact-heading" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Subheading</label>
                                        <input type="text" name="contact-subheading" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <label class="custom-file d-block">
                                            <input type="file" name="contact-image" class="custom-file-input" required>
                                            <span class="custom-file-control"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <h3 class="box-title">Other</h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Social links</label>
                                        <input type="text" name="contact-heading" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Copyrigh text</label>
                                        <input type="text" name="contact-heading" class="form-control" >
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