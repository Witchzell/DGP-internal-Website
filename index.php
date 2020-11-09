<?php 
    
    include("header.php");
    
    if (isset($_POST['search'])) {

        $search = $_POST['search'];
        
    }

    $category = mysqli_real_escape_string($dbconnect, isset($_POST['Category']));

    //Linking database to site
    $find_sql = "SELECT * FROM `menu` 
        JOIN category ON (category.CategoryID = menu.CategoryID)";
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

        <form method="post" action="search.php" enctype="multipart/form-data" class="search">

            <input type="text" name="search" required placeholder="Search..." id="search_bar" />
            <input type="submit" name="search_sub" value="&#xf002;" id="search_img" title="search" />
            
        </form>

    <!--filter-->
    <?php include('filter.php') ?>

    <!--database box-->
    <?php include('results.php') ?>
    </div>

    </br>

    <div class="gap">
        <a href="form.php"><button class="form">Go to Creation Form</button></a>
    </div>

    <!--body end-->

<?php include("footer.php")?>
</body>
</html>