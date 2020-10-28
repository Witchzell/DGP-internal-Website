<div id="box">
        <?php 

            if($count < 1) {
        
        ?>

        <!--error handling-->
        <div class="error">
            <p>
                Sorry! There are no results that match
                your seach. Try using the search box again
                or checking your internet connection. Thank you.
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
        
        </div>
        
        <div class="results_bt">

            <div class="<?php echo $find_rs['ID']; ?>" id="content">
                    
                <span class="s_con_left1">Serving Size: </span>
                <div class="con_left"> <?php echo $find_rs['Serving_Size']; ?> </div>

                <span class="s_con_left2">Calories:</span> 
                <?php echo $find_rs['Calories']; ?>
                
                <span class="s_con_left3">Sugars:</span> 
                <?php echo $find_rs['Sugars']; ?>
                
                <span class="s_con_left4">Protein:</span> 
                <?php echo $find_rs['Protein']; ?>
                
                <span class="s_con_left5">Saturated Fat:</span> 
                <?php echo $find_rs['Saturated_Fat']; ?>
                
                <span class="s_con_left6">Saturated Fat Daily %:</span>
                <?php echo $find_rs['Saturated_Fat_Daily%']; ?>
                
                <span class="s_con_left7">Cholesterol:</span>
                <?php echo $find_rs['Cholesterol']; ?>
                
                <span class="s_con_right1">Cholesterol Daily %:</span>
                <?php echo $find_rs['Cholesterol_Daily%']; ?>
                
                <span class="s_con_right2">Carbohydrates:</span>
                <?php echo $find_rs['Carbohydrates']; ?>
                
                <span class="s_con_right3">Carbohydrates Daily %:</span>
                <?php echo $find_rs['Carbohydrates_Daily%']; ?>
                
                <span class="s_con_right4">Dietary Fibre:</span>
                <?php echo $find_rs['Dietary_Fibre']; ?>
                
                <span class="s_con_right5">Dietary Fibre Daily %:</span>
                <?php echo $find_rs['Dietary_Fibre_Daily%']; ?>
                
                <span class="s_con_right6">Total Fat:</span>
                <?php echo $find_rs['Total_Fat']; ?>
                
                <span class="s_con_right7">Total Fat Daily %:</span>
                <?php echo $find_rs['Total_Fat_Daily%']; ?>
                    
            </div>

        </div>
        
        <br/>

        <?php

                } //end of do

                while($find_rs=mysqli_fetch_assoc($find_query));

            } //end else

        ?>