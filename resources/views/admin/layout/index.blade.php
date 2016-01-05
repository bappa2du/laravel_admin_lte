<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin</title>
  <base href="/">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Tell the browser to be responsive to screen width -->
  @include('admin.layout.style')
  
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
	@include('admin.layout.header')
  

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  @include('admin.layout.sidebar')

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  @yield('content')
    
  </div>
  <!-- /.content-wrapper -->

  @include('admin.layout.footer')

</div>
<!-- ./wrapper -->

@include('admin.layout.script')
</body>
</html>
