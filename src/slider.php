	<div class="slider">
	    <!-- Insert to your webpage where you want to display the slider -->
	    <div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:1337px;margin:0px auto 56px;">
	        <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
	            <ul class="amazingslider-slides" style="display:none;">

	                <?php
                    $slider = "SELECT * FROM `slider` ORDER BY `id` DESC";
                    $sliderQuery = mysqli_query($conn, $slider);

                    if (!$sliderQuery) {
                        die("Query Failed: " . mysqli_error($conn));
                    };

                    while ($sliderFetch = mysqli_fetch_assoc($sliderQuery)) {

                    ?>
	                    <li><img src=<?php echo $sliderFetch['src'] ?> alt=<?php echo $sliderFetch['title'] ?> title=<?php echo $sliderFetch['title'] ?> />
	                    </li>
	                <?php
                    }
                    ?>
	            </ul>
	            <ul class="amazingslider-thumbnails" style="display:none;">

	                <?php
                    $slider = "SELECT * FROM `slider` ORDER BY `id` DESC";
                    $sliderQuery = mysqli_query($conn, $slider);

                    if (!$sliderQuery) {
                        die("Query Failed: " . mysqli_error($conn));
                    };

                    while ($sliderFetch = mysqli_fetch_assoc($sliderQuery)) {

                    ?>
	                    <li><img src=<?php echo $sliderFetch['src'] ?> alt=<?php echo $sliderFetch['title'] ?> title=<?php echo $sliderFetch['title'] ?> /></li>
	                    </li>
	                <?php
                    }
                    ?>
	            </ul>
	        </div>
	    </div>
	    <!-- End of body section HTML codes -->

	</div><!-- slider -->