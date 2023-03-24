<!DOCTYPE html>
<html lang="en">

@include('layouts.head')
<body>
@include('layouts.spinner')
@include('layouts.header')
@yield('content')
@include('layouts.vendor')
@include('layouts.footer')
@include('layouts.script')
</body>

</html>