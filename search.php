<!doctype html>
<html lang="en">

	<head>

		<!-- Required meta tags -->
		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
		crossorigin="anonymous">
		<link rel="stylesheet" href="css/custom.css"> <!-- css/custom.css -->

		<title>Hello, world!</title>

	</head>

	<body>

		<!-- Header -->
		<?php require 'php/common/header.php';?>

		<!-- Main content -->
		<main class="text-white">

			<div class="container">

				<!-- Title section -->
				<div class="row ">
					<div class="col">
						<h1 class="text-center">MILAN</h1>
					</div>
				</div>

				<!-- Filters column + Item showcase -->
				<div class="row">
					<div class="col-3 bg-white px-0">

						<div class="text-center py-2" style="background-color: #131862;">
							<h4>FILTERS</h4>
						</div>

						<div class="px-3 pt-2">

							<div class="checkbox">
								<label><input type="checkbox" value="">Option 1</label>
							</div>

							<div class="checkbox">
								<label><input type="checkbox" value="">Option 2</label>
							</div>

							<div class="checkbox disabled">
								<label><input type="checkbox" value="" disabled>Option 3</label>
							</div>

						</div>
						
					</div>

					<div class="col-9">
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