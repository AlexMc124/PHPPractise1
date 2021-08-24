<?php include "header.html" ?>
    This will be used to collect Words from the user and make a story in the style of a Madlib. <br>
    This will be done with the $_GET Method and the name of the Form variable. <br> <br>
    
    <form action="madlib.php" method="get">
        Colour : <input type="text" name="color"></input>
        <br>
        Plural Noun : <input type="text" name="noun"></input>
        <br>
        Celebrity : <input type="text" name="celeb"></input>
        <br>
        <button type="submit">Submit</button>
    </form>
    <br>
    <?php 
        $color = $_GET["color"];
        $noun = $_GET["noun"];
        $celeb = $_GET["celeb"];
        echo "Roses are $color <br>";
        echo "$noun are blue <br>";
        echo "I love $celeb <br>";
    ?>
<?php include "footer.html" ?>