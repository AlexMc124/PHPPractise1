<?php include "header.html" ?>
    This is an example calculator to add two numbers together.

    <form action="calculator.php" method="get">
        Number 1 : <input type="number" name="num1"></input>
        <br>
        Number 2 : <input type="number" name="num2"></input>
        <br>
        <button type="submit">Submit</button>
    </form>
    Answer: <?php echo $_GET["num1"] + $_GET["num2"]?>
<?php include "footer.html" ?>