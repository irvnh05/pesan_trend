<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User | Dashboard</title>

  @include('includes.user.style')

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  @include('includes.user.navbar')

  @include('includes.user.sidebar')

  @yield('content')

  @include('includes.user.footer')

</div>
<!-- ./wrapper -->

  @include('includes.user.script')

</body>
</html>
