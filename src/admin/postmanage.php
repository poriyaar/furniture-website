<?php include("menu.php"); ?>
<?php include("../config.php") ?>
<?php include("../func/func.php") ?>

<div class="managepostBox">
	<div class="lastpostTitle">
		<p>مدیریت پست های وبسایت</p>
	</div><!-- lastpostTitle -->
	<center>

		<?php
		if (isset($_GET['okdel'])) {
			echo "<font color=green>پست با موفقیت حذف شد</font>";
		}

		if (isset($_GET['nodel'])) {
			echo "<font color red>پست حذف نشد</font>";
		}

		if (isset($_GET['error'])) {
			echo "<font color red>تمام فیلد ها باید پر باشند</font>";
		}
		if (isset($_GET['okupdate'])) {
			echo "<font color red>ویرایش اطلاعات با موفقیت انجام شد</font>";
		}
		if (isset($_GET['noupdate'])) {
			echo "<font color red>مشکل در ارسال اطلاعات</font>";
		}

		?>

		<table border="0">
			<tr>
				<td width="500">عنوان</td>
				<td>ویرایش</td>
				<td>حذف</td>
			</tr>
			<?php
			$postSql = "SELECT * FROM `post` ORDER BY `id` DESC";
			$postQuery = mysqli_query($conn, $postSql);
			while ($postFetch = mysqli_fetch_assoc($postQuery)) {
				# code...

			?>

				<tr>
					<td><a href=<?php echo "../readmore.php?postid=$postFetch[id]" ?>><?php echo $postFetch['title'] ?></a></td>
					<td><a href=<?php echo "updatePost.php?PostId=$postFetch[id]" ?>>ویرایش</a></td>
					<td><a href=<?php echo "../check.php?postid=$postFetch[id]" ?>>حذف</a></td>
				</tr>

			<?php
			}
			?>
		</table>
	</center>
</div><!-- managepostBox -->



</body>

</html>