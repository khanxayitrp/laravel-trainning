<!doctype html>
<html lang="en">

@include('partial.header')

<body>
<div class="Loader"></div>
<div class="wrapper">
@include('partial.navbar')

 <div class="clearfix"></div>
@yield('content')

@include('partial.footer')

</div>
</body>

</html>