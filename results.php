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

            <div class="<?php echo $find_rs['ID']; ?>" id="content">
                
                <span class="s_con">Serving Size: </span>
                <?php echo $find_rs['Serving_Size']; ?>
                <br/>
                <br/>
                <span class="s_con">Calories:</span> 
                <?php echo $find_rs['Calories']; ?>
                <br/>
                <br/>
                <span class="s_con">Sugars:</span> 
                <?php echo $find_rs['Sugars']; ?>
                <br/>
                <br/>
                <span class="s_con">Protein:</span> 
                <?php echo $find_rs['Protein']; ?>
                <br/>
                <br/>
                <span class="s_con">Saturated Fat:</span> 
                <?php echo $find_rs['Saturated_Fat']; ?>
                <br/>
                <br/>
                <span class="s_con">Saturated Fat Daily %:</span>
                <?php echo $find_rs['Saturated_Fat_Daily%']; ?>
                <br/>
                <br/>
                <span class="s_con">Cholesterol:</span>
                <?php echo $find_rs['Cholesterol']; ?>
                <br/>
                <br/>
                <span class="s_con">Cholesterol Daily %:</span>
                <?php echo $find_rs['Cholesterol_Daily%']; ?>
                <br/>
                <br/>
                <span class="s_con">Carbohydrates:</span>
                <?php echo $find_rs['Carbohydrates']; ?>
                <br/>
                <br/>
                <span class="s_con">Carbohydrates Daily %:</span>
                <?php echo $find_rs['Carbohydrates_Daily%']; ?>
                <br/>
                <br/>
                <span class="s_con">Dietary Fibre:</span>
                <?php echo $find_rs['Dietary_Fibre']; ?>
                <br/>
                <br/>
                <span class="s_con">Dietary Fibre Daily %:</span>
                <?php echo $find_rs['Dietary_Fibre_Daily%']; ?>
                <br/>
                <br/>
                <span class="s_con">Total Fat:</span>
                <?php echo $find_rs['Total_Fat']; ?>
                <br/>
                <br/>
                <span class="s_con">Total Fat Daily %:</span>
                <?php echo $find_rs['Total_Fat_Daily%']; ?>
                

            </div>

        </div>
        
        <br/>

        <?php

                } //end of do

                while($find_rs=mysqli_fetch_assoc($find_query));

            } //end else

        ?>