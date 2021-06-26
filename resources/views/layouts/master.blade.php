

<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>TechDiag</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href={{ asset("vendors/images/apple-touch-icon.png") }}>
	<link rel="icon" type="image/png" sizes="32x32" href={{ asset("vendors/images/favicon-32x32.png") }}>
	<link rel="icon" type="image/png" sizes="16x16" href={{ asset("vendors/images/favicon-16x16.png") }}>

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
    <link rel="stylesheet" type="text/css" href={{ asset("css/app.css") }}>
	<link rel="stylesheet" type="text/css" href={{ asset("vendors/styles/core.css") }}>
	<link rel="stylesheet" type="text/css" href={{ asset("vendors/styles/icon-font.min.css") }}>
	<link rel="stylesheet" type="text/css" href={{ asset("src/plugins/datatables/css/dataTables.bootstrap4.min.css") }}>
	<link rel="stylesheet" type="text/css" href={{ asset("src/plugins/datatables/css/responsive.bootstrap4.min.css") }}>
	<link rel="stylesheet" type="text/css" href={{ asset("vendors/styles/style.css") }}>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
	<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src={{ asset("vendors/images/deskapp-logo.svg") }} alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div>

    @include("layouts.nav")

	<div class="main-container">
		<div class="pd-ltr-20">
            <div class="card-box pd-20 height-100-p mb-30">
				<div class="row align-items-center">
					
					<div class="col-md-8">
						@yield("content")
					</div>
				</div>
			</div>
        </div>
	</div> 
            </div> 
	<!-- js -->
    <script src="{{ asset("js/app.js") }}"></script>
	<script src={{ asset("vendors/scripts/core.js") }}></script>
	<script src={{ asset("vendors/scripts/script.min.js") }}></script>
	<script src={{ asset("vendors/scripts/process.js") }}></script>
	<script src={{ asset("vendors/scripts/layout-settings.js") }}></script>
	<script src={{ asset("src/plugins/apexcharts/apexcharts.min.js") }}></script>
	<script src={{ asset("src/plugins/datatables/js/jquery.dataTables.min.js") }}></script>
	<script src={{ asset("src/plugins/datatables/js/dataTables.bootstrap4.min.js") }}></script>
	<script src={{ asset("src/plugins/datatables/js/dataTables.responsive.min.js") }}></script>
	<script src={{ asset("src/plugins/datatables/js/responsive.bootstrap4.min.js") }}></script>
	<script src={{ asset("vendors/scripts/dashboard.js") }}></script>
</body>
</html>