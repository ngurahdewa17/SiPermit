<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" "/>
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
    <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
    <style type="text/css">
        body{font-family: arial;}
        .rangkasurat{width: 600px;margin:0 auto;  height: 1600px; padding: 20px;}
        table{border-bottom: 5px solid #000; padding:2px}
        .tengah{text-align: center;line-height: 5px;}

        .ttd1{
            margin-left: -5px;
            margin-top : 50px;
        }
        .ttd2 {

          
            margin-left: 158px;
            margin-top: 25px;
        }
        .ttd3 {
            margin-left: 371px;
            margin-top: -327px;
        }
                
    </style >
    {{-- <link rel="stylesheet" href="{{asset('template.css')}}"> --}}
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
          </div>
        @yield('content')

        @include('partials.navbarindex')
        {{-- @yield('container') --}}
        <!-- /.navbar -->
      
        <!-- Main Sidebar Container -->
        @include('partials.sidebarindex')
        {{-- @yield('sidebar') --}}
        <!-- Content Wrapper. Contains page content -->
        
        <!-- /.content-wrapper -->
        @yield('container')
        <!-- Footer -->
        @include('partials.footer')
        {{-- @yield('footer') --}}
        
         <!-- Content Footer -->
       
      
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
          <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
      </div>
      <!-- ./wrapper -->
      
      <!-- jQuery -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
      <script>
          CKEDITOR.replace( 'content' );
      </script>
      <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
      <!-- jQuery UI 1.11.4 -->
      <script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
      <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
      <script>
        $.widget.bridge('uibutton', $.ui.button)
      </script>
      <!-- Bootstrap 4 -->
      <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <!-- ChartJS -->
      <script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
      <!-- Sparkline -->
      <script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
      <!-- JQVMap -->
      <script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
      <script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
      <!-- jQuery Knob Chart -->
      <script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
      <!-- daterangepicker -->
      <script src="{{asset('plugins/moment/moment.min.js')}}"></script>
      <script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
      <!-- Tempusdominus Bootstrap 4 -->
      <script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
      <!-- Summernote -->
      <script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
      <!-- overlayScrollbars -->
      <script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
      <!-- AdminLTE App -->
      <script src="{{asset('dist/js/adminlte.js')}}"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="{{asset('dist/js/demo.js')}}"></script>
      <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
      <script src="{{asset('dist/js/pages/dashboard.js')}}"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script type="text/javascript" src="https://formden.com/static/cdn/formden.js"></script>
      <script>  
        $(document).ready(function()
        {    
          var date_input=$('input[name="date"]');    
          var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";    
          date_input.datepicker(
          {      
            format: 'mm/dd/yyyy',      
            container: container,      
            todayHighlight: true,      
            autoclose: true,    
          })  
        })
      </script>
    </body>
</html>