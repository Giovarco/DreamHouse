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
		<link rel="stylesheet" href="css/index/general.css">
		<link rel="stylesheet" href="css/index/mobile.css">

		<title>DreamHouse</title>

	</head>

	<body class="text-center h-100">

		<!-- Header -->
		<?php require 'php/common/header.php';?>

		<div class="container">

			<!-- Title -->
			<div class="row firstRowMarginTop">
				<div class="col">
					<h1 id="title" class="text-white">Let's Find You a Great Apartment.</h1>
				</div>
			</div>

			<!-- Subtitle -->
			<div class="row">
				<div class="col">
					<h2 id="subtitle" class="mb-3 text-white">
						<small>Join more than 5,828,476 happy renters searching 1,025,792 local apartments.</small>
					</h2>
				</div>
			</div>

			<!-- Search box -->
			<div class="row">
				<div class="col">
					<div id="search" class="enterALocationSearchBox align-items-center">
						<input type="search" onchange="javascript:Home.confirmSelection();" class="text-center rounded w-100" list="cities" placeholder="Enter a Location here">
						<datalist id="cities">
							<option value="Milan">
							<option value="Rome">
						</datalist>
					</div>
				</div>
			</div>
			
		</div>

		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
		crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
		crossorigin="anonymous"></script>

		<!-- JavaScript -->
		<?php require CONFIG_FOLDER.'/javascriptConfiguration.php'?>
		<script src="js/utils/URL.js"></script>
		<script src="js/home.js"></script>
	</body>

</html>