<?php require './../environment_setup.php' ?>

<!doctype html>
<html lang="en" class="h-100">

	<head>

		<!-- Required meta tags -->
		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
		crossorigin="anonymous">
		<link rel="stylesheet" href="css/common.css">		
		<link rel="stylesheet" href="css/search/general.css">
		<link rel="stylesheet" href="css/search/mobile.css">

		<title>Hello, world!</title>

	</head>

	<body class="h-100">

		<!-- Header -->
		<?php require 'php/common/header.php';?>

		<div class="container">

			<!-- Title section -->
			<div class="row mt-2">
				<div class="col-sm-3 px-0 d-none d-sm-block">
					<img class="w-100 h-100" src="https://www.dronezine.it/wp-content/uploads/2015/06/duomo-milano.jpg">
				</div>

				<div class="col-sm-9 my-auto">
					<h1 id="title" class="text-white text-center">Milan</h1>
				</div>
			</div>

			<!-- Filters column + Item showcase -->
			<div class="row mt-2">

				<!-- Filters column -->
				<div id="filterWindow" class="col-sm-3 bg-white px-0 d-none d-sm-block">

					<div class="bar text-white text-center py-2">
						<h4>FILTERS</h4>
					</div>

					<div class="px-3 pt-2">
						<?php require PHP_FOLDER."/search/searchFilters.php"; ?>
					</div>
					
				</div>

				<!-- Item showcase -->
				<div class="col-sm-9 col-xs-12">

					<div class="container-fluid">
					
						<div id="itemShowcaseRow" class="row">

						</div>

					</div>
					
				</div>

			</div>

		</div>

		<?php require "php/common/jsForBootstrap.php"?>

		<!-- JavaScript -->
		<script src="config/javascriptConfiguration.js"></script>
		<script src="js/utils/LoadingScreenHandler.js"></script>
		<script src="js/utils/URL.js"></script>
		<script src="js/Search.js"></script>

		<script>
			function isMobile() {
				return screen.width < javascriptConfiguration.mobileThreshold;
			}
		</script>

	</body>

</html>