<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pesan_Trend | Dashboard Admin</title>

  @include('includes.admin.style')

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  @include('includes.admin.navbar')

  @include('includes.admin.sidebar')

  @yield('content')

  @include('includes.admin.footer')

</div>
<!-- ./wrapper -->

  @include('includes.admin.script')

</body>
</html>
