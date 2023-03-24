<!DOCTYPE html>
<html lang="en">
@include('admin.component.head')
<body>
<div class="container-scroller">
@include('admin.component.header')
<div class="container-fluid page-body-wrapper">
    @include('admin.component.sidebar')
    @yield('content')
    <!-- main-panel ends -->
</div>
  <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
</body>
</html>