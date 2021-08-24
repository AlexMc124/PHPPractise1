<?php include "header.html" ?>
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
<?php include "footer.html" ?>