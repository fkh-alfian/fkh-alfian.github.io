<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
	<div class="p-3">
		<h5>{{ strtoupper($username) }}</h5>
		<a href="#" class="btn btn-block btn-outline-info"><i class="fas fa-lock-open "></i> Logout</a>
	</div>
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer">
	<!-- To the right -->
	<div class="float-right d-none d-sm-inline">
		Anything you want
	</div>
	<!-- Default to the left -->
	<strong>Copyright &copy; {{ \Carbon\Carbon::now()->format('Y') }} <a href="#">{{ strtoupper(config('app.name'))
			}}</a>.</strong> All rights reserved.
</footer>