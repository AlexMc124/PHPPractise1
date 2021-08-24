<?php include "header.html" ?>
    <p> This section is used to demonstrate the use of switch statements in php. </p><hr>
    <p> Enter a grade A-F and get a result </p>
    <form action="switchstatments.php" method="get">
        <input type="text" name="grade"></input>
        <input type="submit">
    </form>
    <?php
        $grade = $_GET["grade"];
        switch($grade) {
            case "A":
                echo "You did great";
                break;
            case "B":
                echo "You did OK";
                break;
            case "C":
                echo "You could do better";
                break;
            case "D":
                echo "You Didnt do well";
                break;
            case "E":
                echo "You did very badly";
                break;
            case "F":
                echo "You FAIL";
                break;
            default:
                echo "Thats not a Grade!";
                break;
        };
    ?>
<?php include "footer.html" ?>