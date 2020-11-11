<?php include("header.php"); ?>

    <!--body start-->
    <h1>Form Submitted</h1>
    <div class="gap">
        <p>
            Congratulations! Your form was submitted. 
            (You are going to be redirected to homepage in 5 seconds)
        </p>
    </div>

    <script>
        setTimeout(() => { location.replace("index.php") }, 5000);
    </script>
</div>
<?php include("footer.php")?>
</div>
</body>
</html>