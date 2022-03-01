<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Petugas | Dashboard</title>

  @include('includes.petugas.style')

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  @include('includes.petugas.navbar')

  @include('includes.petugas.sidebar')

  @yield('content')

  @include('includes.petugas.footer')

</div>
<!-- ./wrapper -->

  @include('includes.petugas.script')

</body>
</html>
