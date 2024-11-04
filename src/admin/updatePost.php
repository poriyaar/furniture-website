<?php include("menu.php"); ?>
<?php include("../config.php"); ?>

<div class="sendpostBox">
     <div class="lastpostTitle">
          <p>ارسال پست</p>
     </div><!-- lastpostTitle -->

     <?php
     if (isset($_GET['PostId'])) {
          $postId = $_GET['PostId'];
          $postSql = "SELECT * FROM `post` WHERE `id`=$postId";
          $postQuery = mysqli_query($conn, $postSql);

          while ($postFetch = mysqli_fetch_assoc($postQuery)) {

     ?>

               <form method="post" action="../check.php">
                    <label>عنوان</label>
                    <input type="text" name="title" value="<?php echo $postFetch['title'] ?>" >
                    <label>آدرس تصویر شاخص</label>
                    <input type="text" name="thumb" value="<?php echo $postFetch['src'] ?>">
                    <label>متن</label>
                    <input type="hidden" name="updatepostid" value="<?php echo $postFetch['id'] ?>">
                    <textarea name="content"><?php echo $postFetch['content'] ?></textarea>
                    <input type="submit" name="updatepostbtn" value="ارسال اطلاعات">
               </form>
               <a href="upload.php" class="uploadlink">آپلود تصویر شاخص</a>
</div><!-- sendpostBox -->

<?php
          }
     }
?>

</body>

</html>