<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>JORINDO APP</title>
	@vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="hold-transition sidebar-mini">
	<div class="wrapper">

		@include('layouts.navbar')

		@include('layouts.sidebar')

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0">{{ $title ?? '' }}</h1>
						</div><!-- /.col -->
					</div><!-- /.row -->
					<hr>
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->

			<!-- Main content -->
			<div class="content">
				<div class="container-fluid">

					@yield('content')

					<!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		@include('layouts.footer')

	</div>
	<!-- ./wrapper -->

</body>

</html>