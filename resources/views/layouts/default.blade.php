<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Atlantis Lite - Bootstrap 4 Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{ asset('backend/img/icon.ico') }}" type="image/x-icon" />

	<!-- Fonts and icons -->
	<script src="{{ asset('backend/js/plugin/webfont/webfont.min.js') }}"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Lato:300,400,700,900"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
				urls: ["{{ asset('backend/css/fonts.min.css') }}"]
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('backend/css/atlantis.min.css') }}">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="{{ asset('backend/css/demo.css') }}">

	<!-- Select2 CSS -->
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body>
	<div class="wrapper">

		@include('includes.header')
		<!-- Sidebar -->
		@include('includes.sidebar')
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">

				@yield('content')

			</div>
			@include('includes.footer')
		</div>
	</div>

	<!--   Core JS Files   -->
	@include('includes.js')

	<!-- jQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<!-- Select2 JS -->
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

	<!-- Inisialisasi Select2 -->
	<script>
		$(document).ready(function() {
			$('.select2').select2({
				placeholder: "Pilih tags",
				allowClear: true
			});
		});
	</script>
</body>

</html>