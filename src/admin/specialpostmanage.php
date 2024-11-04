<?php include("menu.php"); ?>

<div class="settBox">
	<div class="lastpostTitle">
		<p>تنظیمات پست های ویژه</p>

		<?php
		if ($_GET['error'] == 422) {
			echo "<center><font color=red>تمام فیلد ها باید پر باشند</font></center>";
		}

		if ($_GET['ok'] == 201) {
			echo "<center><font color=green>پست با موفقیت ثبت شد</font></center>";
		}

		if ($_GET['error'] == 500) {
			echo "<center><font color=red>خطا در اتصال به دیتابیس</font></center>";
		}

		?>


	</div><!-- lastpostTitle -->
	<form method="post" action="../check.php">
		<label>عنوان پست ویژه</label>
		<input type="text" name="specialposttitle">
		<label>آدرس عکس پست ویژه</label>
		<input type="text" name="specialpostimg">
		<label>متن پست ویژه</label>
		<textarea name="specialpostcontent"></textarea>
		<input type="submit" name="specialpostbtn" value="ارسال اطلاعات">
		<a href="upload.php" class="uploadlink">آپلود تصویر شاخص</a>

	</form>
</div><!-- settBox -->



</body>

</html>