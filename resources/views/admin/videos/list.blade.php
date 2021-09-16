@extends('admin.layouts.tablelayout')
@section('content')
    <div class="wrapper">
        @include('admin.layouts.header')
        <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>DataTables</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">DataTables</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">DataTable with minimal features & hover style</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="example2" class="table table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Title</th>
                                                <th>Date</th>
                                                <th>CSS grade</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($videos as $v)
                                            <tr>
                                                <td>{{$v->id}}</td>
                                                <td>{{$v->title}}
                                                </td>
                                                <td>{{$v->uploaddatetime}}</td>
                                                <td>
                                                    <form method="POST" id="{{$v->id}}delete_form" action="{{url('admin/video/delete')}}">
                                                        <input type="hidden" name="id" value="{{$v->id}}"/>
                                                        @csrf
                                                    </form>
                                                    <a type="button" onclick="Delete({{$v->id}})" class="btn waves-effect waves-light btn-sm btn-danger" style="color:white;"><i class="fa fa-trash"></i> Delete</a>
                                                    <script>
                                                        function Delete(id) {
                                                            if (confirm('Are you sure want to delete this video')) {
                                                                document.getElementById(id+'delete_form').submit();
                                                            }
                                                        }
                                                    </script>
                                                </td>
                                            </tr>
                                            @endforeach


                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>id</th>
                                                <th>Title</th>
                                                <th>Date</th>
                                                <th>CSS grade</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->

                                <!-- /.card -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
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
