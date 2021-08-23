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
    <p>Practising some php. <a href='/PHPinVSCode/index.php'>Link to the previous section</a></p>
    <hr>
    This will be used to collect the users Name & Age through a form. <br>
    This will be done with the $_GET Method and the name of the Form variable.
    
    <form action="userinput.php" method="get">
        Name : <input type="text" name="name"></input>
        <br>
        Age : <input type="text" name="age"></input>
        <br>
        <button type="submit">Submit</button>
    </form>
    <br>
    Your name is <?php echo $_GET["name"]?>
    <br>
    Your age is <?php echo $_GET["age"]?>
</body>
</html>