<?php require './../environment_setup.php' ?>

<!doctype html>
<html lang="en">

	<head>

		<!-- Required meta tags -->
		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<?php require "php/common/headElements.php"; ?>
		<link rel="stylesheet" href="css/index/general.css">
		<link rel="stylesheet" href="css/index/mobile.css">

		<title>DreamHouse</title>

	</head>

	<body class="text-center">

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
							<?php require "php/index/cityOptions.php" ?>
						</datalist>
					</div>
				</div>
			</div>
			
		</div>

		<?php require "php/common/jsForBootstrap.php"?>

		<!-- JavaScript -->
		<script src="config/javascriptConfiguration.js"></script>
		<script src="js/utils/URL.js"></script>
		<script src="js/home.js"></script>
	</body>

</html>