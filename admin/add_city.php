<?php 

session_start();
include("header.php"); 

?>

<!-- CONTENT -->
<div id="contentHolder" class="width100">
    <div id="grayGradientLight"></div>
    
    <!-- MAIN -->
    <div id="main" class="width1000">
    
        <!-- Navigation -->
            <?php include("navigation.php"); ?>
        <!-- .Navigation -->
        
        <!-- Content -->
        <div id="content" class="default">
            <h2>Add City</h2>
         <form action="cities.php" method="post" id="add_city_form" name="add_city_form">
            <div class="row">
                <div class="span1"></div>
                <div class="span9">
                    <div clas="row">
                        <div class="span6">
                            <input type="text" id="city_name" required name="city_name" placeholder="Enter the City Name">
                        </div>
                    </div>
                    <div clas="row">
                        <div class="span9">
                            <textarea class="ckeditor" id="city_description" name="city_description"></textarea>
                        </div>
                    </div>
                    <div clas="row">
                        <div class="span9">
                            <input type="submit" id="submit_button" class="redButton customSubmit roundButtonX" value="Submit">
                        </div>
                    </div>
                </div>
                <div class="span2"></div>
            </div> 
           </form>
        </div>
        <!-- .Content -->
    
    </div>
    <!-- .MAIN -->

</div>
<!-- .CONTENT -->

<!-- FOOTER -->
            <?php include("../footer.php"); ?>

<!-- .FOOTER -->


</body>
</html>
