<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alex Practise HTML & PHP Code</title>
</head>
<body>
    <h1><a href='/PHPinVSCode/index.php'>Alex Site - Calculator<a></h1>
    <hr>
    <p>Practising some php. <br>
        <a href='/PHPinVSCode/userinput.php'>Link to the User Input</a><br>
        <a href='/PHPinVSCode/index.php'>Link to the Index</a> <br>
        <a href='/PHPinVSCode/madlib.php'>Link to the Madlib</a><br>
        <a href='/PHPinVSCode/arrays.php'>Link to the Arrays</a><br>
        <a href='/PHPinVSCode/assosiativearrays.php'>Link to the Assosiative Arrays</a><br>
        <hr>
    </p>
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
    </body>
</html>