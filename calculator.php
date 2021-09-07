<style>
    <?php
        include("main.css");
    ?>
</style>

<head>
<script src="https://kit.fontawesome.com/82ee0524bd.js" crossorigin="anonymous"></script>


</head>


<div class="testDiv">
    <i class="fas fa-calculator"></i>
    <h2>Hello, this is a Calculator</h2>

    <form  class= "fields" method="get" action="?">
        <input class="text-field" type="number" name="myInput" placeholder="Enter a number">
        <input class="text-field" type="number" name="myInput2" placeholder="Enter a number">
        <div class="button plus">
            <i class="fas fa-plus"></i>
            <input class="button2" type="submit" name="add" value="Add">
        </div>
        <div class="button minus">
            <i class="fas fa-minus"></i>
            <input class="button2" type="submit" name="substract" value="Substract">
        </div>
        <div class="button">
            <i class="fas fa-divide"></i>
            <input class="button2" type="submit" name="divide" value="Divide">
        </div>
    </form>

    <?php
        if(!empty($_GET['myInput'])){
            echo "First number: " . $_GET['myInput'] . "<br>";
        }

        if(!empty($_GET['myInput2'])){
            echo "Second number: " . $_GET['myInput2'] ."<br> <br>";
        }

        

        
    ?>

    <div class="result">
        <?php
            if (isset ($_GET['add'])){
                echo "<b>Sum: </b>" . intval($_GET['myInput']) + intval($_GET['myInput2']);
            } else if (isset ($_GET['substract'])) {
                echo "<b>Substraction: </b>" . intval($_GET['myInput']) - intval($_GET['myInput2']);
            } else if (isset ($_GET['divide'])) {
                echo "<b>Division: </b>" . intval($_GET['myInput']) / intval($_GET['myInput2']);
            }
            ;

        ?>
    </div>

    <div class="error">
        <?php
            if(empty($_GET['myInput']) || empty($_GET['myInput2'])){
                echo "<i class='fas fa-exclamation'></i>" . "Please enter your numbers first";
            }
        ?>
    </div>
    
</div>