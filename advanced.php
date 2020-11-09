<?php 
    
    include("header.php");
    
    $search = $_POST['search'];

    // linking database to site

    $b = array(0, 1, 2, 3, 4, 5, 6, 7, 8);
    $ch = " WHERE ";
    $sql = "SELECT * FROM `menu` 
    JOIN category ON (category.CategoryID = menu.CategoryID) ";
    if(isset($_POST['search_ad'])) {
        if(isset($_POST[1])) {
            foreach((array) $_POST[$b[1]] as $name) {
                if(!empty($name)) {
                    $sql .= $ch."`Category` LIKE '%".$name."%'";
                    $ch = " OR ";
                }
            }
        }
    }

    $find_sql = "$sql";
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

            <input type="text" name="search" required placeholder="Search..." id="search_bar"/>
            <input type="submit" name="search_sub" value="&#xf002;" id="search_img" />

        </form>

    <!--filter-->
    <?php include('filter.php') ?>

    <a href="index.php"><button id="clear">Clear Search</button></a>

    <!--database box-->
    <?php include('results.php') ?>
    </div>

    <!--body end-->

<?php include("footer.php")?>
</body>
</html>