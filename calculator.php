<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alex Practise HTML & PHP Code</title>
</head>
<body>
    <h1>Alex Site </h1>
    <hr>
    <p>Practising some php. <a href='/PHPinVSCode/index.php'>Link to the Index</a> <a href='/PHPinVSCode/calculator.php'>Link to the Calculator</a></p>
    <hr>
    This is an example calculator to add two numbers together.

    <form action="calculator.php" method="get">
        Number 1 : <input type="number" name="num1"></input>
        <br>
        Number 2 : <input type="number" name="num2"></input>
        <br>
        <button type="submit">Submit</button>
    </form>
    Answer: <?php echo $_GET["num1"] + $_GET["num2"]?>
    </body>
</html>