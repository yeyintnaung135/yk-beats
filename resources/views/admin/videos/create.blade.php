@extends('admin.layouts.formlayout')
@section('content')
<div class="wrapper">
@include('admin.layouts.header')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Advanced Form</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
                            <li class="breadcrumb-item active">Video Upload</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <form method="POST" action="{{url('admin/video/create')}}" enctype="multipart/form-data">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Video Upload</h3>


                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <!-- /.row -->

                        <div class="row">
                            <div class="col-12 col-sm-6">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="Enter email">
                            </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Sold out Or Free Or New</label>
                                    <select class="form-control select2 select2-danger" name="sorforn" data-dropdown-css-class="select2-danger" style="width: 100%;">
                                        <option selected="selected" value="new">New</option>
                                        <option value="sold">Sold Out</option>
                                        <option value="free">Free</option>

                                    </select>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                            <!-- /.col -->
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="3" name="description" placeholder="Enter ..."></textarea>
                            </div>
                            </div>



                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Video File</label>

                                    <div class="custom-file">
                                        <input type="file" name="file_link" class="custom-file-input" id="customFile1">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6">

                            <div class="form-group">
                                <label>Date and time:</label>
                                <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                                    <input type="text" name="uploaddatetime" class="form-control datetimepicker-input" data-target="#reservationdatetime"/>
                                    <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Tumbnail</label>
                                    <div class="custom-file">
                                        <input type="file" name="thumbnail" class="custom-file-input" id="customFile2">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Youtube Link</label>
                                    <textarea class="form-control" rows="3" name="youtubelink" placeholder="Enter ..."></textarea>
                                </div>
                            </div>

                        </div>
                        <div class="row">
@csrf
                        <div class="col-12 col-sm-12 ">
                            <div class="form-group float-right">
                                <button type="submit" class="btn btn-lg btn-primary">Submit</button>

                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            </div>
            </form>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.1.0
        </div>
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
@endsection
