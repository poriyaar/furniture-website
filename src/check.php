<?php

include __DIR__ . '/config.php';

#---- ADMIN LOGIN
if (isset($_POST["btnlogin"])) {

	if (empty($_POST["username"]) || empty($_POST["password"])) {
		header("location:login.php?empty=1010");
		exit;
	}
	$adminUerName = $_POST["username"];
	$adminPassword = $_POST["password"];
	$admin = "SELECT * from `furnituredb`.`admin` where `username`='$adminUerName'  && `password` ='$adminPassword' ";
	$adminResult = mysqli_query($conn, $admin);
	$adminRows = mysqli_num_rows($adminResult);
	if ($adminRows > 0) {
		$adminfetch = mysqli_fetch_assoc($adminResult);
		setcookie("admin", "$adminfetch[fname]", time() + (86400 * 7));
		header("location:admin/panel.php?adminid=$adminfetch[id]");
		exit;
	} else {
		header("location:login.php?error=2020");
		exit;
	}
}

#----- ADMIN EXIT
if (isset($_GET["exit"])) {
	setcookie("admin", "مدیر وبسایت", time() - (86400 * 7));
	header("location:index.php");
	exit;
}

#----- SEND POST
if (isset($_POST['sendpostbtn'])) {
	if (empty($_POST['title']) || empty($_POST['thumb']) || empty($_POST['content'])) {
		header('location:admin/sendpost.php?error=422');
		exit;
	} else {
		$posttitle = $_POST['title'];
		$postthumb = $_POST['thumb'];
		$postcontent = $_POST['content'];
		mysqli_query($conn, "SET CHARACTER SET UTF-8");
		$sendPostSql = "INSERT INTO `furnituredb`.`post` (`id`, `title`, `src`, `content`) VALUES (NULL, '$posttitle', '$postthumb', '$postcontent')";

		$sendPostQuery = mysqli_query($conn, $sendPostSql);
		if ($sendPostQuery) {
			header("location:admin/sendpost.php?ok=201");
		} else {
			header("location:admin/sendpost.php?error=500");
		}
	}
}


// Post delete
if (isset($_GET['postid'])) {
	$postdeid = $_GET["postid"];
	$postSql = "DELETE FROM `furnituredb`.`post` WHERE `post`.`id` = $postdeid ";
	$postdequery = mysqli_query($conn, $postSql);
	if ($postdequery) {
		header("location:admin/postmanage.php?okdel=200");
		exit;
	} else {
		header("location:admin/postmanage.php?nodel=422");
		exit;
	}
}

// update post 
if (isset($_POST['updatepostbtn'])) {
	if (empty($_POST["title"]) || empty($_POST["thumb"]) || empty($_POST["content"])) {
		header("location:admin/sendpost.php?error=422");
		exit;
	} else {
		$updatepost = $_POST["updatepostid"];
		$updatePostSql = "UPDATE `furnituredb`.`post` SET `title` = '$_POST[title]' ,`src` = '$_POST[thumb]' ,`content` = '$_POST[content]'  WHERE `post`.`id` = '$updatepost'";
		$updatepostresulte = mysqli_query($conn, $updatePostSql);
		if ($updatepostresulte) {
			header("location:admin/postmanage.php?okupdate=200");
			exit;
		} else {
			header("location:admin/postmanage.php?noupdate=422");
			exit;
		}
	}
}

// ---- top menu 
if (isset($_POST["topmnubtn"])) {
	if (empty($_POST["topmnutitle"]) || empty($_POST["topmnulink"])) {
		header("location:admin/setting.php?emptytopmnu=1575");
		exit;
	}
	$menutitle = $_POST['topmnutitle'];
	$menulink = $_POST['topmnulink'];

	$mnu = "INSERT INTO `furnituredb`.`menu` (`id`, `title`, `link`) VALUES (NULL,'$menutitle', '$menulink')";
	$mnuresulte = mysqli_query($conn, $mnu);
	if ($mnuresulte) {
		header("location:admin/setting.php?oktopmnu=1575");
		exit;
	} else {
		header("location:admin/setting.php?errortopmnu=1575");
		exit;
	}
}

// ---- top ads 
if (isset($_POST["topadsbtn"])) {
	if (empty($_POST["adsimg"]) || empty($_POST["adslink"])) {
		header("location:admin/setting.php?emptytopads=1575");
		exit;
	}
	$adstitle = $_POST['adsimg'];
	$adslink = $_POST['adslink'];

	$topads = "INSERT INTO `furnituredb`.`topads` (`id`, `src`, `link`) VALUES (NULL,'$adstitle', '$adslink')";
	$topadsresulte = mysqli_query($conn, $topads);
	if ($topadsresulte) {
		header("location:admin/setting.php?oktopads=1575");
		exit;
	} else {
		header("location:admin/setting.php?errortopads=1575");
		exit;
	}
}

// ---- slider
if (isset($_POST["sliderbtn"])) {
	if (empty($_POST["sliderimg"]) || empty($_POST["slidertitle"])) {
		header("location:admin/setting.php?emptyslider=1575");
		exit;
	}
	$sliderimg = $_POST['sliderimg'];
	$slidertitle = $_POST['slidertitle'];

	$sliders = "INSERT INTO `furnituredb`.`slider` (`id`, `src`, `title`) VALUES (NULL,'$sliderimg', '$slidertitle')";
	$slidersresulte = mysqli_query($conn, $sliders);
	if ($slidersresulte) {
		header("location:admin/setting.php?okslider=1575");
		exit;
	} else {
		header("location:admin/setting.php?errorslider=1575");
		exit;
	}
}

#----- SEND POST
if (isset($_POST['specialpostbtn'])) {
	if (empty($_POST['specialposttitle']) || empty($_POST['specialpostimg']) || empty($_POST['specialpostcontent'])) {
		header('location:admin/specialpostmanage.php?error=422');
		exit;
	} else {
		$posttitle = $_POST['specialposttitle'];
		$postthumb = $_POST['specialpostimg'];
		$postcontent = $_POST['specialpostcontent'];

		$sendPostSql = "INSERT INTO `furnituredb`.`specialpost` (`id`, `title`, `src`, `content`) VALUES (NULL, '$posttitle', '$postthumb', '$postcontent')";

		$sendPostQuery = mysqli_query($conn, $sendPostSql);
		if ($sendPostQuery) {
			header("location:admin/specialpostmanage.php?ok=201");
		} else {
			header("location:admin/specialpostmanage.php?error=500");
		}
	}
}

// ads delete
if (isset($_GET['mnuid'])) {
	$menudeid = $_GET["mnuid"];
	$mnuSql = "DELETE FROM `furnituredb`.`menu` WHERE `menu`.`id` = $menudeid ";
	$mnudequery = mysqli_query($conn, $mnuSql);
	if ($mnudequery) {
		header("location:admin/show.php?okdelmnu=200");
		exit;
	} else {
		header("location:admin/show.php?nodelmnu=422");
		exit;
	}
}

// menu delete
if (isset($_GET['adsid'])) {
	$topadsdeid = $_GET["adsid"];
	$adsidSql = "DELETE FROM `furnituredb`.`topads` WHERE `topads`.`id` = $topadsdeid ";
	$adsiddequery = mysqli_query($conn, $adsidSql);
	if ($adsiddequery) {
		header("location:admin/show.php?okdeltopads=200");
		exit;
	} else {
		header("location:admin/show.php?nodeltopads=422");
		exit;
	}
}

// slider delete
if (isset($_GET['sliderid'])) {
	$sliderdeid = $_GET["sliderid"];
	$sliderSql = "DELETE FROM `furnituredb`.`slider` WHERE `slider`.`id` = $sliderdeid ";
	$sliderdequery = mysqli_query($conn, $sliderSql);
	if ($sliderdequery) {
		header("location:admin/show.php?okdelslider=200");
		exit;
	} else {
		header("location:admin/show.php?nodelslider=422");
		exit;
	}
}

// special post delete
if (isset($_GET['specialpostid'])) {
	$specialpostid = $_GET["specialpostid"];
	$specialpostSql = "DELETE FROM `furnituredb`.`specialpost` WHERE `specialpost`.`id` = $specialpostid ";
	$specialpostdequery = mysqli_query($conn, $specialpostSql);
	if ($specialpostdequery) {
		header("location:admin/show.php?okdelspecialpost=200");
		exit;
	} else {
		header("location:admin/show.php?nodelspecialpost=422");
		exit;
	}
}
