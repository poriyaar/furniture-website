<?php include("header.php"); ?>
<?php include("slider.php"); ?>
<?php include("specialPost.php"); ?>
<?php include("func/func.php") ?>


<?php
$postSql = "SELECT * FROM `post` ORDER BY `id` DESC";
$postQuery = mysqli_query($conn, $postSql);

if (!$postQuery) {
    die("Query Failed: " . mysqli_error($conn));
};

while ($postFetch = mysqli_fetch_assoc($postQuery)) {

?>



    <div class="big-content">
        <div class="big-content-thumb">
            <img src=<?php echo $postFetch['src'] ?>>
        </div><!-- big-content-thumb -->
        <div class="big-content-title">
            <p><?php echo $postFetch['title'] ?></p>
        </div><!-- big-content-title -->

        <div class="big-content-txt">
            <p><?php echo post_content($postFetch['content'])  ?></p>
        </div><!-- big-content-txt -->
        <div class="big-content-footer">
            <a href= <?php echo "readmore.php?postid=$postFetch[id]" ?> >ادامه مطلب...</a>
        </div><!-- big-content-footer -->
    </div><!-- big-content -->
<?php
}
?>


<?php include("footer.php"); ?>

</div><!-- allweb -->
</body>

</html>