<?php include("header.php")?>

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
        <?php include("connection_test.php") ?>
    </div>
    <!--body end-->

<?php include("footer.php")?>
</body>
</html>