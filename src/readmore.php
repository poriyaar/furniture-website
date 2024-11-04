<?php include("header.php"); ?>
<?php include("config.php"); ?>


<?php
$postId = $_GET['postid'];
$postSql = "SELECT * FROM `post` WHERE `id`=$postId";
$postQuery = mysqli_query($conn, $postSql);

if (!$postQuery) {
   die("Query Failed: " . mysqli_error($conn));
};
while ($postFetch = mysqli_fetch_assoc($postQuery)) {

?>

   <div class="rm-big-content">
      <div class="rm-big-content-thumb">
         <img src=<?php echo $postFetch['src'] ?>>
      </div><!-- rm-big-content-thumb -->
      <div class="rm-big-content-txt">
         <a href="#"><?php echo $postFetch['title'] ?></a>
         <p><?php echo $postFetch['content'] ?></p>
      </div><!-- rm-big-content-txt -->
   </div><!-- rm-big-content -->


   <?php include("footer.php"); ?>
<?php
}
?>

</div><!-- allweb -->
</body>

</html>