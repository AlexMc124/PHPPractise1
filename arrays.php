<?php include "header.html" ?>
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
            echo "Friend number " . $x+1 . " is: $friends[$x] <br>";
        }
        echo "<br>";
        for ($x = 0; $x <= count($fruits)-1; $x++) {
            echo "Friend number " . $x+1 . " is: $fruits[$x] <br>";
        }
    ?>
    </body>
</html>