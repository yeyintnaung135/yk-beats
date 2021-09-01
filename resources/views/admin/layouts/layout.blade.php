<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Kanban Board</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('admindist/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ekko Lightbox -->
    <link rel="stylesheet" href="{{url('admindist/plugins/ekko-lightbox/ekko-lightbox.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('admindist/dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{url('admindist/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
@yield('content')
<!-- jQuery -->
<script src="{{url('admindist/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{url('admindist/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Ekko Lightbox -->
<script src="{{url('admindist/plugins/ekko-lightbox/ekko-lightbox.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{url('admindist/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('admindist/dist/js/adminlte.min.js')}}"></script>
<!-- Filterizr-->
<script src="{{url('admindist/plugins/filterizr/jquery.filterizr.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('admindist/dist/js/demo.js')}}"></script>

<!-- Page specific script -->
<script>
    $(function () {
        $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    })
</script>
</body>
</html>
