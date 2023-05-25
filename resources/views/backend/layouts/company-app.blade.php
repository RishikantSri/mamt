<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BROWNIE POINT</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page">
    @yield('content')
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend/dist/js/adminlte.min.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#pan_div').hide();
        $('#gst_div').hide();
        $('#identity_type').on('change', function(e) {
            var selected = $('#identity_type option:selected').val();
            if(selected == 1){
                $('#pan_div').show();
                $('#gst_div').hide();
            }
            else if(selected == 2){
                $('#pan_div').hide();
                $('#gst_div').show();
            }
            else if(selected == 3){
                $('#pan_div').show();
                $('#gst_div').show();
            }
        });
    });
</script>
</body>
</html>
