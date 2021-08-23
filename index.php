<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alex Practise HTML & PHP Code</title>
</head>
<body>
    <?php 
        echo "<h1>Alex Site </h1>";
        echo "<hr>";
        echo "<p>Practising some php</p>";
        echo "<hr>";

        $characterName = "Alex";
        $characterAge = 70;

        echo "<h2>Variables</h2>";
        echo "There once was a man named $characterName <br>";
        echo "He was $characterAge years old <br>";
        echo "He liked being called $characterName <br>";
        echo "but he didnt like being $characterAge <br>";

        echo "<hr>";
        echo "<h2>Data Types</h2>";
        echo "<hr>";

        $string = "To be or not to be";
        $int = 30;
        $float = 0.99;
        $bool = false;
        

        echo "This is a string: $string <br>";
        echo "This is a int: $int <br>";
        echo "This is a float: $float <br>";
        echo "This is a bool: $bool <br>";

        echo "<hr>";
        echo "<h2>Working with strings</h2>";
        echo "<hr>";

    ?>
</body>
</html>