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
        <a href='/PHPinVSCode/calculator.php'>Link to the Calculator</a><br>
    </p>
    <hr>
    This is a page used to practise working with Arrays.
    <hr>

    <form action="arrays.php" method="post">
        Apples : <input type="checkbox" name="fruits[]" value="apples"><br>
        Bananas : <input type="checkbox" name="fruits[]" value="bananas"><br>
        Oranges : <input type="checkbox" name="fruits[]" value="oranges"><br>
        <button type="submit">Submit</button>
    </form>
    <br>
    <br>
    <?php 
        $fruits = $_POST["fruits"];
        $friends = array("Kevin","Karen","Oscar","Jim");
        for ($x = 0; $x <= count($friends)-1; $x++) {
            echo "Friend number $x is: $friends[$x] <br>";
        }
        echo "<br>";
        for ($x = 0; $x <= count($fruits)-1; $x++) {
            echo "Friend number $x is: $fruits[$x] <br>";
        }
    ?>
    </body>
</html>