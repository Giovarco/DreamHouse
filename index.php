<!doctype html>
<html lang="en" class="h-100">

	<head>

		<!-- Required meta tags -->
		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
		crossorigin="anonymous">
		<link rel="stylesheet" href="css/custom_desktop.css"> <!-- css/custom.css -->
		<link rel="stylesheet" href="css/custom_mobile.css"> <!-- css/custom.css -->

		<title>Hello, world!</title>

	</head>

	<body class="h-100">

		<!-- Header -->
		<?php require 'php/common/header.php';?>

		<main class="h-100 marginTop100">

			<div class="container h-100">

				<div class="row h-100 centerContentOnPage">
					<div class="col">

						<!-- Title -->
						<div class="row text-center text-white">
							<div class="w-100">
								<h1 id="title" >Let's Find You a Great Apartment.</h1>
							</div>
						</div>

						<!-- Subtitle -->
						<div class="row text-center text-white">
							<div class="w-100">
								<h2 id="subtitle">
									<small>Join more than 5,828,476 happy renters searching 1,025,792 local apartments.</small>
								</h2>
							</div>
						</div>

						<!-- Search box -->
						<div class="row w-100 align-items-center ml-0">
							<div id="search" class="enterALocationSearchBox">
								<input type="search" onchange="javascript:Home.confirmSelection();" class="text-center rounded w-100" list="cities" placeholder="Enter a Location here">
								<datalist id="cities">
									<option value="Milan">
									<option value="Rome">
								</datalist>
							</div>
						</div>


					</div>
				</div>

			</div>



		</main>

		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
		crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
		crossorigin="anonymous"></script>

		<!-- JavaScript -->
		<script src="config/javascript.js"></script>
		<script src="js/utils/URL.js"></script>
		<script src="js/home.js"></script>
	</body>

</html>