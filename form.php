<?php 
    
    include("header.php");
    
    //The stuff they are incrementing
    $Item = "";
    $Serving_Size = "";
    $Calories = "";
    $Total_Fat = "";
    $Total_Fat_Daily = "";
    $Saturated_Fat = "";
    $Saturated_Fat_Daily = "";
    $Cholesterol = "";
    $Cholesterol_Daily = "";
    $Carbohydrates = "";
    $Carbohydrates_Daily = "";
    $Dietary_Fiber = "";
    $Dietary_Fiber_Daily = "";
    $Sugars = "";
    $Protein = "";
    $CategoryID = "";

    $has_errors = "no";

    //Form Submiter
    if ($_SERVER["REQUEST_METHOD"] != "POST") {
        echo "Submitted";
    }

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

    <h1>Form</h1>

    <!--form-->
    <div class="gap">
        <form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            
            <!--Item increment-->
            <p>
                <input type="text" name="name_of_meal" value="<?php echo $Item; ?>" required placeholder="Name of Meal..." /> *
            </p>

            <!--Submit-->
            <input type="submit" name="search_sub" value="Submit" />

        </form>
    </div>

    <!--body end-->

<?php include("footer.php")?>
</body>
</html>