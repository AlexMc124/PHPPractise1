<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alex Practise HTML & PHP Code</title>
</head>
<body>
    <h1><a href='/PHPinVSCode/index.php'>Alex Site - Madlib<a></h1>
    <hr>
    <p>Practising some php. <br>
        <a href='/PHPinVSCode/index.php'>Link to the Index</a> <br> 
        <a href='/PHPinVSCode/userinput.php'>Link to the User Input</a><br>
        <a href='/PHPinVSCode/calculator.php'>Link to the Calculator</a><br>
        <a href='/PHPinVSCode/arrays.php'>Link to the Arrays</a><br>
        <a href='/PHPinVSCode/assosiativearrays.php'>Link to the Assosiative Arrays</a><br>
        <a href='/PHPinVSCode/functions.php'>Link to the Functions</a><br>
    </p>
    <hr>
    This will be used to collect Words from the user and make a story in the style of a Madlib. <br>
    This will be done with the $_GET Method and the name of the Form variable. <br> <br>
    
    <form action="madlib.php" method="get">
        Colour : <input type="text" name="color"></input>
        <br>
        Plural Noun : <input type="text" name="noun"></input>
        <br>
        Celebrity : <input type="text" name="celeb"></input>
        <br>
        <button type="submit">Submit</button>
    </form>
    <br>
    <?php 
        $color = $_GET["color"];
        $noun = $_GET["noun"];
        $celeb = $_GET["celeb"];
        echo "Roses are $color <br>";
        echo "$noun are blue <br>";
        echo "I love $celeb <br>";
    ?>
</body>
</html>