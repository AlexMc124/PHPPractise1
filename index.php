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

        echo "String Functions <br>";
        echo "Working with the string: $string <br>";
        echo "Upper: ";
        echo strtoupper($string);
        echo "<br>";
        echo "Lower: ";
        echo strtolower($string);
        echo "<br>";
        echo "String length: ";
        echo strlen($string);
        echo "<br>";
        echo "Indexing : Character at 1 = ";
        echo $string[0];
        echo "<br>";
        echo "Indexing : Character at 7 = ";
        echo $string[6];
        echo "<br>";
        echo "Indexing : Character at 3 = ";
        echo $string[2];
        echo "<br>";

        echo "String Replacing : Character at 3 = ";
        echo $string[4];
        echo "<br>";
        $string[4] = "r";
        echo "String Replacing : Character at 3 = ";
        echo $string[4];
        echo "<br>";

        echo "<br>";
        echo "String Replace using str_replace to replace the word to with I";
        echo "<br>";
        echo "<br>";
        echo $string;
        echo "<br>";
        str_replace("to", "I", $string);
        echo "<br>";
        echo $string;
        echo "<br>";
        echo "Substrings";
        echo substr($string, -2, 0);

        echo "<hr>";
        echo "<h2>Working with Numbers</h2>";
        echo "<hr>";

        echo "Addition : 5 + 9 = ";
        echo 5 + 9;
        echo "<br>";
        echo "Subtraction : 5 - 9 = ";
        echo 5 - 9;
        echo "<br>";
        echo "Divide : 5 / 9 = ";
        echo 5 / 9;
        echo "<br>";
        echo "Multiply : 5 * 9 = ";
        echo 5 * 9;
        echo "<br>";
        echo "Modulus : 5 % 9 = ";
        echo 5 % 9;
        echo "<br>";
        echo "int + 25 = ";
        echo $int + 25;
        echo "<br><br>";
        echo "absolute: abs(-100) = ";
        echo abs(-100);
        echo "<br><br>";
        echo "powers: pow(2,4) = ";
        echo pow(2,4);
        echo "<br><br>";
        echo "min: min(2, 10) = ";
        echo min(2, 10);
        echo "<br><br>";
        echo "max: max(2, 10) = ";
        echo max(2, 10);
        echo "<br><br>";
        echo "ciel: ciel(3.55) = ";
        echo ceil(3.55);
        echo "<br><br>";
        echo "floor: floor(3.55) = ";
        echo floor(3.55);

        
    ?>
</body>
</html>