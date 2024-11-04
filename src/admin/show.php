<?php include("menu.php"); ?>
<?php include("../config.php"); ?>


<div class="settBox">
	<div class="lastpostTitle">
		<p>مدیریت اجزای منوی بالایی</p>
	</div><!-- lastpostTitle -->

	<center>
		<?php
		if (isset($_GET["okdelmnu"])) {
			echo "<font color=green>با موفقیت پاک شد</font>";
		}
		if (isset($_GET["nodelmnu"])) {
			echo "<font color=red>مشکل در حذف</font>";
		}
		?>
		<table border="1">
			<tr>
				<td>عنوان</td>
				<td>لینک</td>
				<td>حذف</td>
			</tr>
			<?php
			$mnu = "SELECT * FROM  `menu` ORDER BY  `id` DESC ;";
			$mnuresult = mysqli_query($conn, $mnu);
			while ($mnufetch = mysqli_fetch_assoc($mnuresult)) {
			?>
				<tr>
					<td><?php echo $mnufetch["title"]; ?></td>
					<td><?php echo $mnufetch["link"]; ?></td>
					<td><a href=<?php echo "../check.php?mnuid=" . $mnufetch["id"]; ?>>حذف</a></td>
				</tr>
			<?php
			}
			?>
		</table>
	</center>



</div><!-- settBox -->


<div class="settBox">
	<div class="lastpostTitle">
		<p>مدیریت اجزای تبلیغات بالایی</p>
	</div><!-- lastpostTitle -->
	<center>
		<?php
		if (isset($_GET["okdeltopads"])) {
			echo "<font color=green>با موفقیت پاک شد</font>";
		}
		if (isset($_GET["nodeltopads"])) {
			echo "<font color=red>مشکل در حذف</font>";
		}
		?>
		<table border="1">
			<tr>
				<td>عنوان</td>
				<td>لینک</td>
				<td>حذف</td>
			</tr>
			<?php
			$ads = "SELECT * FROM  `topads` ORDER BY  `id` DESC ;";
			$adsresult = mysqli_query($conn, $ads);
			while ($adsfetch = mysqli_fetch_assoc($adsresult)) {
			?>
				<tr>
					<td><?php echo $adsfetch["src"]; ?></td>
					<td><?php echo $adsfetch["link"]; ?></td>
					<td><a href=<?php echo "../check.php?adsid=" . $adsfetch["id"]; ?>>حذف</a></td>
				</tr>
			<?php
			}
			?>
		</table>
	</center>
</div><!-- settBox -->



<div class="settBox">
	<div class="lastpostTitle">
		<p>مدیریت اجزای اسلایدر</p>
	</div><!-- lastpostTitle -->
	<center>
		<?php
		if (isset($_GET["okdelslider"])) {
			echo "<font color=green>با موفقیت پاک شد</font>";
		}
		if (isset($_GET["nodelslider"])) {
			echo "<font color=red>مشکل در حذف</font>";
		}
		?>
		<table border="1">
			<tr>
				<td>عنوان</td>
				<td>لینک</td>
				<td>حذف</td>
			</tr>
			<?php
			$slider = "SELECT * FROM  `slider` ORDER BY  `id` DESC ;";
			$slideresult = mysqli_query($conn, $slider);
			while ($sliderfetch = mysqli_fetch_assoc($slideresult)) {
			?>
				<tr>
					<td><?php echo $sliderfetch["src"]; ?></td>
					<td><?php echo $sliderfetch["title"]; ?></td>
					<td><a href=<?php echo "../check.php?sliderid=" . $sliderfetch["id"]; ?>>حذف</a></td>
				</tr>
			<?php
			}
			?>
		</table>
	</center>
</div><!-- settBox -->


<div class="settBox">
	<div class="lastpostTitle">
		<p>مدیریت اجزای پست های ویژه</p>
	</div><!-- lastpostTitle -->
	<center>
		<?php
		if (isset($_GET["okdelspecialpost"])) {
			echo "<font color=green>با موفقیت پاک شد</font>";
		}
		if (isset($_GET["nodelspecialpost"])) {
			echo "<font color=red>مشکل در حذف</font>";
		}
		?>
		<table border="1">
			<tr>
				<td>عنوان</td>
				<td>اردس عکس</td>
				<td>متن</td>
				<td>حذف</td>
			</tr>
			<?php
			$specialpost = "SELECT * FROM  `specialpost` ORDER BY  `id` DESC ;";
			$specialpostresult = mysqli_query($conn, $specialpost);
			while ($specialpostfetch = mysqli_fetch_assoc($specialpostresult)) {
			?>
				<tr>
					<td><?php echo $specialpostfetch["title"]; ?></td>
					<td><?php echo $specialpostfetch["src"]; ?></td>
					<td><?php echo $specialpostfetch["content"]; ?></td>
					<td><a href=<?php echo "../check.php?specialpostid=" . $specialpostfetch["id"]; ?>>حذف</a></td>
				</tr>
			<?php
			}
			?>
		</table>
	</center>
</div><!-- settBox -->


</body>

</html>