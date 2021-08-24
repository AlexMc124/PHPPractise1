<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alex Practise HTML & PHP Code</title>
</head>
<body>
    <h1><a href='/PHPinVSCode/index.php'>Alex Site - User Input<a></h1>
    <hr>
    <p>Practising some php. <br>
        <a href='/PHPinVSCode/index.php'>Link to the Index</a> <br> 
        <a href='/PHPinVSCode/calculator.php'>Link to the Calculator</a><br>
        <a href='/PHPinVSCode/madlib.php'>Link to the Madlib</a><br>
        <a href='/PHPinVSCode/arrays.php'>Link to the Arrays</a><br>
        <a href='/PHPinVSCode/assosiativearrays.php'>Link to the Assosiative Arrays</a><br>
        <a href='/PHPinVSCode/functions.php'>Link to the Functions</a><br>
    </p>
    <hr>
    This will be used to collect the users Name & Age through a form. <br>
    This will be done with the $_GET Method and the name of the Form variable.<br>
    This has also been used to learn URL Parameter.<br> The Method of the form has been changed to POST to prevent URL Tampering. <br><br>
    <hr>
    <form action="userinput.php" method="post">
        Name : <input type="text" name="name"></input><br>
        Age : <input type="text" name="age"></input><br>
        <button type="submit">Submit</button>
    </form>
    <br>
    Your name is <?php echo $_POST["name"]?>
    <br>
    Your age is <?php echo $_POST["age"]?>
</body>
</html>