<div class="f_frame">
        
        <span title="filter" class="filter_btn" onclick="btnDropdown()"> &upsih; </span>
        <form method="post" action="advanced.php" enctype="multipart/form-data" class="filter_content" id="dropdown">

        <?php 
                
            $category_sql = "SELECT * FROM `category` ORDER BY `Category` ASC";
            $category_query = mysqli_query($dbconnect, $category_sql);
            $category_rs = mysqli_fetch_assoc($category_query);
            $a = 0;

            do {
                ?>

                <input type="checkbox" value="<?php echo $category_rs['Category']; ?>" name="1">
                <label for="<?php echo $category_rs['Category']; ?>" class="label_ch"> 
                    <?php echo $category_rs['Category']; echo $a; ?> </br> 
                </label>

                <?php
                $a += 1;
            }

            while($category_rs = mysqli_fetch_assoc($category_query));

        ?>

        <input type="submit" name="search_ad" value="&#xf002;" id="search_img_filter" />
            
        </form>

    </div>

    </div>