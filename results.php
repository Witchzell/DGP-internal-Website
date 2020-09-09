<div id="box">
        <?php 

            if($count < 1) {
        
        ?>

        <!--error handling-->
        <div class="error">
            <p>
                Sorry! There are no results that match
                your seach. Try using the search box again.
                Thank you.
            </p>
        </div>

        <?php 
        
        }

        else {
            do {
            echo '<script src="JS/Modal_Box.js"></script>'
        ?>

        <div class="results">

            <span class="s_item">Item: </span>
            <span class="h_results"><?php echo $find_rs['Item']; ?></span>
            <span class="s_type">Type: </span>
            <span class="h_type"><?php echo $find_rs['Category']; ?></span>

            <button onclick="myFunction(<?php echo $find_rs['ID']; ?>)" class="btn">More info</button>

            <div class="<?php echo $find_rs['ID']; ?>" id="content">
            
                <?php echo $find_rs['ID']; ?>
                <p>epic</p>

            </div>

        </div>
        
        <br/>

        <?php

                } //end of do

                while($find_rs=mysqli_fetch_assoc($find_query));

            } //end else

        ?>