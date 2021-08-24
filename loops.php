<?php include "header.html" ?>
    <p> This section is used to demonstrate the use of Loops in php. </p><hr>
    <p> Enter a number to have it multiplied by itself 5 times and displayed. This uses a While loop</p>

    <form action="loops.php" method="get">
        <input type="number" name="cuber"></input>
        <input type="submit">
    </form>
    <?php
        $index = 1;
        $cuber = $_GET["cuber"];
        while ($index <= 5) {
            echo "Number " . $index . " is " .$cuber . "<br>";
            $cuber = $cuber * $cuber;
            $index++;
        }
    ?>

    <hr> 
    <p> Enter a number to have it displayed 10 times on the page. This uses a for loop</p>
    <form action="loops.php" method="get">
        <input type="number" name="adder"></input>
        <input type="submit">
    </form>
    <?php
        $adder = $_GET["adder"];
        for ($index = 1; $index <= 10; $index++) {
            echo "Print " . $index . " is " .$adder . "<br>";
        }
    ?>

    <hr> 
    <p> This is printing the contents of an array to the screen. This has been done previously in the project <br>
    but have re done for the sake of clarity. This uses a for loop</p>
    <?php 
        $lucky_num = array(1, 2, 3, 5, 8, 13);
        for ($i = 0; $i < count($lucky_num); $i++){
            echo "$lucky_num[$i]<br>";
        }
    ?>
<?php include "footer.html" ?>