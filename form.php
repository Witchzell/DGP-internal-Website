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
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "Submitted";

        //Increment
        $Item = mysqli_real_escape_string($dbconnect, $_POST['Item']);
        $Serving_Size = mysqli_real_escape_string($dbconnect, $_POST['Serving_Size']);
        $Calories = mysqli_real_escape_string($dbconnect, $_POST['Calories']);
        $Total_Fat = mysqli_real_escape_string($dbconnect, $_POST['Total_Fat']);
        $Total_Fat_Daily = mysqli_real_escape_string($dbconnect, $_POST['Total_Fat_Daily']);
        $Saturated_Fat = mysqli_real_escape_string($dbconnect, $_POST['Saturated_Fat']);
        $Saturated_Fat_Daily = mysqli_real_escape_string($dbconnect, $_POST['Saturated_Fat_Daily']);
        $Cholesterol = mysqli_real_escape_string($dbconnect, $_POST['Cholesterol']);
        $Cholesterol_Daily = mysqli_real_escape_string($dbconnect, $_POST['Cholesterol_Daily']);
        $Carbohydrates = mysqli_real_escape_string($dbconnect, $_POST['Carbohydrates']);
        $Carbohydrates_Daily = mysqli_real_escape_string($dbconnect, $_POST['Carbohydrates_Daily']);
        $Dietary_Fiber = mysqli_real_escape_string($dbconnect, $_POST['Dietary_Fiber']);
        $Dietary_Fiber_Daily = mysqli_real_escape_string($dbconnect, $_POST['Dietary_Fiber_Daily']);
        $Sugars = mysqli_real_escape_string($dbconnect, $_POST['Sugars']);
        $Protein = mysqli_real_escape_string($dbconnect, $_POST['Protein']);
        $CategoryID = mysqli_real_escape_string($dbconnect, $_POST['CategoryID']);

        //Add Entry
        if($has_errors == "no"){

            header('Location: success.php');

            $adden_sql = "INSERT INTO `menu` (`ID`, `CategoryID`, `Item`, `Serving_Size`, `Calories`, `Total_Fat`, 
            `Total_Fat_Daily%`, `Saturated_Fat`, `Saturated_Fat_Daily%`, `Cholesterol`, `Cholesterol_Daily%`, 
            `Carbohydrates`, `Carbohydrates_Daily%`, `Dietary_Fibre`, `Dietary_Fibre_Daily%`, `Sugars`, `Protein`) 
            VALUES (NULL, '$CategoryID', '$Item', '$Serving_Size', '$Calories', '$Total_Fat', '$Total_Fat_Daily', 
            '$Saturated_Fat', '$Saturated_Fat_Daily', '$Cholesterol', '$Cholesterol_Daily', '$Carbohydrates', 
            '$Carbohydrates_Daily', '$Dietary_Fiber', '$Dietary_Fiber_Daily', '$Sugars', '$Protein');";

            $adden_query = mysqli_query($dbconnect, $adden_sql);

        }

    }

    $category_sql = "SELECT * FROM `category` ORDER BY `Category` ASC";
    $category_query = mysqli_query($dbconnect, $category_sql);
    $category_rs = mysqli_fetch_assoc($category_query);

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

    <p class="required gap">
        All are required
    </p>

    <!--form-->
    <div class="gap">
        <form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            <div id="form_grid">
            <!--Item increment-->
            <p>
                <input type="text" name="Item" value="<?php echo $Item; ?>" required class="left"
                placeholder="Name of Meal..." maxlength="200" />
            </p>
 
            <!--Serving Size increment-->
            <p>
                <input type="number" name="Serving_Size" value="<?php echo $Serving_Size; ?>" required class="left" 
                placeholder="Serving Size..." min="1" max="999999" />
            </p>
 
            <!--Calories increment-->
            <p>
                <input type="number" name="Calories" value="<?php echo $Calories; ?>" required class="left"
                placeholder="Calories..." min="1" max="999" />
            </p>
 
            <!--Total Fat increment-->
            <p>
                <input type="number" name="Total_Fat" value="<?php echo $Total_Fat; ?>" required class="left"
                placeholder="Total Fat..." min="1" max="99999" />
            </p>
 
            <!--Total Fat Daily increment-->
            <p>
                <input type="number" name="Total_Fat_Daily" value="<?php echo $Total_Fat_Daily; ?>" required class="left"
                placeholder="Total Fat Daily..." min="1" max="999" />
            </p>
 
            <!--Saturated Fat increment-->
            <p>
                <input type="number" name="Saturated_Fat" value="<?php echo $Saturated_Fat; ?>" required class="left"
                placeholder="Saturated Fat..." min="1" max="99999" />
            </p>
 
            <!--Saturated Fat Daily increment-->
            <p>
                <input type="number" name="Saturated_Fat_Daily" value="<?php echo $Saturated_Fat_Daily; ?>" required class="left"
                placeholder="Saturated Fat Daily..." min="1" max="999" />
            </p>
 
            <!--Cholesterol increment-->
            <p>
                <input type="number" name="Cholesterol" value="<?php echo $Cholesterol; ?>" required class="left"
                placeholder="Cholesterol..." min="1" max="99999" />
            </p>
 
            <!--Cholesterol Daily increment-->
            <p>
                <input type="number" name="Cholesterol_Daily" value="<?php echo $Cholesterol_Daily; ?>" required class="left"
                placeholder="Cholesterol Daily..." min="1" max="999" />
            </p>
 
            <!--Carbohydrates increment-->
            <p>
                <input type="number" name="Carbohydrates" value="<?php echo $Carbohydrates; ?>" required class="right"
                placeholder="Carbohydrates..." min="1" max="99999" />
            </p>
 
            <!--Carbohydrates Daily increment-->
            <p>
                <input type="number" name="Carbohydrates_Daily" value="<?php echo $Carbohydrates_Daily; ?>" required class="right"
                placeholder="Carbohydrates Daily..." min="1" max="999" />
            </p>
 
            <!--Dietary Fiber increment-->
            <p>
                <input type="number" name="Dietary_Fiber" value="<?php echo $Dietary_Fiber; ?>" required class="right"
                placeholder="Dietary Fiber..." min="1" max="99999" />
            </p>

            <!--Dietary Fiber Daily increment-->
            <p>
                <input type="number" name="Dietary_Fiber_Daily" value="<?php echo $Dietary_Fiber_Daily; ?>" required class="right"
                placeholder="Dietary Fiber Daily..." min="1" max="999" /> 
            </p>
 
            <!--Sugars increment-->
            <p>
                <input type="number" name="Sugars" value="<?php echo $Sugars; ?>" required class="right"
                placeholder="Sugars..." min="1" max="99999" /> 
            </p>
 
            <!--Protein increment-->
            <p>
                <input type="number" name="Protein" value="<?php echo $Protein; ?>" required class="right"
                placeholder="Protein..." min="1" max="99999" /> 
            </p>
 
            <!--CategoryID increment-->
            <p>
                <select required class="right" name="CategoryID">
                    <option disabled selected value="">Category...</option>

                    <?php 
                        do {
                    ?>

                    <option value="<?php echo $category_rs['CategoryID']; ?>">
                            <?php echo $category_rs['Category'] ?>
                    </option>

                    <?php 
                        }
                        while ($category_rs = mysqli_fetch_assoc($category_query))
                    ?>
                </select> 
            </p>
            
            <div class="right" id="btns">
                <!--Submit-->
                <input type="submit" name="search_sub" value="Submit" id="btn1"/>
                <input type="reset" id="btn2"/>
            </div>
            
            </div>
        </form>
    </div>

    <!--body end-->

</div>
<?php include("footer.php")?>
</div>
</body>
</html>