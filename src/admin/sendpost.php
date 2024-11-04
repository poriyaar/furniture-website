<?php include("menu.php"); ?>

<div class="sendpostBox">
	<div class="lastpostTitle">
		<p>ارسال پست</p>
	</div><!-- lastpostTitle -->

	<?php
	 if ($_GET['error'] == 422) {
		echo "<center><font color red>تمام فیلد ها باید پر باشند</font></center>";
	 }

	 if ($_GET['ok'] == 201) {
		echo "<center><font color green>پست با موفقیت ثبت شد</font></center>";
	 }

	 if ($_GET['error'] == 500) {
		echo "<center><font color red>خطا در اتصال به دیتابیس</font></center>";
	 }

	?>

	<form method="post" action="../check.php">
		<label>عنوان</label>
		<input type="text" name="title">
		<label>آدرس تصویر شاخص</label>
		<input type="text" name="thumb">
		<label>متن</label>
		<textarea name="content"></textarea>
		<input type="submit" name="sendpostbtn" value="ارسال اطلاعات">
	</form>
	<a href="upload.php" class="uploadlink">آپلود تصویر شاخص</a>
</div><!-- sendpostBox -->



</body>

</html>