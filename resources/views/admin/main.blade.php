<!doctype html>
<html lang="en">
@include('admin.partial.header')
<body>
<div class="dashboard-main-wrapper">
	@include('admin.partial.navbar')
	@include('admin.partial.sidebar')
	<div class="dashboard-wrapper">
	@yield('admincontent')
	@include('admin.partial.footer')
	</div>
</div>

</body>
 
</html>