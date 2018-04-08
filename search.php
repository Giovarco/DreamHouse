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
				<div class="col-sm-3 bg-white px-0 d-none d-sm-block">

					<div class="bar text-white text-center py-2">
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

				<!-- Item showcase -->
				<div class="col-sm-9 col-xs-12">

					<div class="container-fluid">
					
						<div class="row">

							<!-- Item 1 -->
							<div class="col-sm-3 border px-0 item-box" recentlyClicked="false">
								<div class="item-box-text" style="opacity: 0;">
									Street:<br>
									Price: 800€ per month<br>
									From: via Lecco 1<br>
									m<sup>2</sup>: 20
								</div>
								<img class="w-100 h-100" src="img\Lighthouse.jpg">
							</div>

							<!-- Item 2 -->
							<div class="col-sm-3 border px-0 item-box" recentlyClicked="false">
								<div class="item-box-text" style="opacity: 0;">
									Street:<br>
									Price: 800€ per month<br>
									From: via Lecco 1<br>
									m<sup>2</sup>: 20
								</div>
								<img class="w-100 h-100" src="img\Lighthouse.jpg">
							</div>

							<div class="col-sm-3 border">
								C
							</div>
							<div class="col-sm-3 border">
								D
							</div>
						</div>

					</div>
					
				</div>

			</div>

		</div>

		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
		crossorigin="anonymous"></script>

		<!-- JavaScript -->
		<?php require CONFIG_FOLDER.'/javascriptConfiguration.php'?>
		<script src="js/utils/URL.js"></script>
		<script src="js/home.js"></script>
		<script>
			function isMobile() {
				return screen.width < javascriptConfiguration.mobileThreshold;
			}
		</script>
		<script>
		$(document).ready(function() {

			var itemBoxes = $(".item-box");

			itemBoxes.click(function() {
				if (isMobile()) {

					var thisItemBox = $(this);
					var wasRecentlyClicked = thisItemBox.attr("recentlyClicked") == "true";

					if(wasRecentlyClicked) {
						console.log("Salta all'annuncio 1");
					} else {
						thisItemBox.attr("recentlyClicked", true);
					}

				} else {
					console.log("Salta all'annuncio 2");
				}
			});

			itemBoxes.hover(
				function() {
					var itemBox = $(this);
					var image = itemBox.children("img:first");
					var text = itemBox.children(".item-box-text");

					image.fadeTo("slow" , 0.2);
					text.fadeTo("slow", 1);
				},
				function() {

					itemBoxes.attr("recentlyClicked", false);

					var itemBox = $(this);
					var image = itemBox.children("img:first");
					var text = itemBox.children(".item-box-text");

					image.fadeTo("slow" , 1);
					text.fadeTo("slow", 0);
				}
			);

		});
		
		</script>
	</body>

</html>