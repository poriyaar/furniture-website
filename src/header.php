<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="fontAwsome/css/font-awesome.css" />
	<link rel="stylesheet" type="text/css" href="fontAwsome/css/font-awesome.min.css" />

	<!-- Insert to your webpage before the </head> -->
	<script src="sliderengine/jquery.js"></script>
	<script src="sliderengine/amazingslider.js"></script>
	<link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-1.css">
	<script src="sliderengine/initslider-1.js"></script>
	<!-- End of head section HTML codes -->

	<title>تک مبل</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style/style.css">
</head>

<body>
	<div class="allweb">
		<div class="menu">
			<ul>

				<?php
				include("config.php");

				$mnu = "SELECT * FROM `menu` ORDER BY `id` DESC";
				$mnuQuery = mysqli_query($conn, $mnu);

				if (!$mnuQuery) {
					die("Query Failed: " . mysqli_error($conn));
				};

				while ($mnuFetch = mysqli_fetch_assoc($mnuQuery)) {

				?>

					<li><a href=<?php echo $mnuFetch['link'] ?>><?php echo $mnuFetch['title'] ?></a></li>
				<?php
				}
				?>
			</ul>
		</div><!-- menu -->

		<div class="ads">
			<ul>

				<?php
				include("config.php");

				$topads = "SELECT * FROM `topads` ORDER BY `id` DESC";
				$topadsQuery = mysqli_query($conn, $topads);

				if (!$topadsQuery) {
					die("Query Failed: " . mysqli_error($conn));
				};

				while ($topadsFetch = mysqli_fetch_assoc($topadsQuery)) {

				?>

					<li><a href="<?php echo $topadsFetch['link']?>"><img src="<?php echo $topadsFetch['src']?>"></a></li>

				<?php
				}
				?>
			</ul>
		</div><!-- ads -->