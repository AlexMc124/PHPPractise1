<?php include "header.html" ?>
    <p> This section is used to demonstrate the use of functions in php. </p><hr>
    <p> This is a say hello function </p>
    <?php
        function say_hello(){
            echo ("Hello!");
        }
        say_hello();
    ?>
    <hr><p> This is used to test Return Statements of a Function by cubing a number (4) </p>
    <?php 
        function cube($num) {
            return $num * $num * $num;
        }
        $cube_result = cube(4);
        echo $cube_result;
    ?>
    <br>
    <p>enter a number below to be cubed: </p>
    <form action="functions.php" method="get">
        <input type="number" name="value"></input>
        <input type="submit">
    </form>
    <?php 
        echo "the result is : " . $cube_result = cube($_GET["value"]);
    ?>
    <hr> 
    <p> This section is used to demonstrate IF Statements. If the user enters the name Alex the if statement <br>will welcome them otherwise the user won't be recognised. </p> 
    <p> What is your name? </p>
    <form action="functions.php" method="get">
        <input type="text" name="username"></input>
        <input type="submit">
    </form>
    <?php 
        $name = $_GET["username"];
        if ($name == "Alex"){
            echo ("Welcome Alex!!");
        }
        else {
            echo ("Sorry I don't know who you are!!");
        }
    ?>
<?php include "footer.html" ?>