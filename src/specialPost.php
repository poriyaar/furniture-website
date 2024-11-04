    <div class="content-wrapp">

            <?php
                $i = 0;
                $postSql = "SELECT * FROM `specialpost` ORDER BY `id` DESC";
                $postQuery = mysqli_query($conn, $postSql);
                while ($specialPostFetch = mysqli_fetch_assoc($postQuery)) {

                ?>
                    <div class="content">
                            <div class="content-title">
                                    <p><?php echo $specialPostFetch["title"] ?></p>
                            </div><!-- content-title -->
                            <div class="content-thumb">
                                    <img src=<?php echo $specialPostFetch["src"] ?>>
                            </div><!-- content-thumb -->
                            <div class="content-txt">
                                    <p><?php echo $specialPostFetch["content"] ?></p>
                            </div><!-- content-txt -->
                    </div><!-- content -->

            <?php
                        $i++;
                        if ($i >= 3) {
                                break;
                        }
                }
                ?>


    </div><!-- content-wrapp -->