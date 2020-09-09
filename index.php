<?php 
    
    include("header.php");
    
    // linking database to site
    $find_sql = "SELECT * FROM `menu` JOIN category ON (category.CategoryID = menu.CategoryID)";
    $find_query = mysqli_query($dbconnect, $find_sql);
    $find_rs = mysqli_fetch_assoc($find_query);
    $count = mysqli_num_rows($find_query);

?>

    <!--body start-->
    <h1>About</h1>
    <div class="gap">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempus consequat odio 
            a pellentesque. Nam dapibus vitae arcu at interdum. Fusce tempus nisi urna, non blandit 
            libero fermentum nec. Cras sit amet velit ac ante pellentesque ornare eget vel nulla. 
            Phasellus mollis, ipsum vitae faucibus ultricies, eros sapien gravida neque.
        </p>
    </div>

    <h1>Database</h1>

    <!--search-->
    <div class="search">
        <input type="text" placeholder="Search..."/>
        <img id="search_img" src="IMG/Search.png">
    </div>

    <!--database box-->
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

    </div>
    <!--body end-->

<?php include("footer.php")?>
</body>
</html>