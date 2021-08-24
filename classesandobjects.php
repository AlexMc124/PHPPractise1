<?php include "header.html" ?>
    <p>This is a page used to practise working with Classes and Objects. <br>
    For this we will use an example of a Library and Books.</p>
    <hr>

    <p>This is an example of a book with the code used to create an instance of the class : <br> <br>
        class Book {<br>
        var $title;<br>
        var $author;<br>
        var $pages;<br>
    } <br><br>
    
    $book1 = new Book;<br>
    $book1->title = "Harry Potter";<br>
    $book1->author = "J. K. Rowling";<br>
    $book1->pages = 400;<br><br>

    $book2 = new Book;<br>
    $book2->title = "Lord of the Rings";<br>
    $book2->author = "J. R. R. Tolkien";<br>
    $book2->pages = 700;<br><br>
    
    echo $book1->title;<br>
    </p>
    <?php class Book {
        var $title;
        var $author;
        var $pages;

        function __construct($aAuthor, $aTitle, $aPages){
            $this->title = $aAuthor;
            $this->author = $aTitle;
            $this->pages = $aPages;
        }
    } 
    
    ?>

    <hr> 
    <p> This is used to learn the formatting of constructors for the classes </p><p>
    class Book {<br>
        var $title;<br>
        var $author;<br>
        var $pages;<br><br>

        function __construct($aAuthor, $aTitle, $aPages){<br>
            $this->title = $aAuthor;<br>
            $this->author = $aTitle;<br>
            $this->pages = $aPages;<br>
        }<br>
        <br> 
        $book1 = Book("Harry Potter", "J. K. Rowling", 400);<br>
        $book2 = Book("Lord of the Rings", "J. R. R. Tolkien", 700);<br>
    } </p>
    <?php 
        $book1 = new Book("Harry Potter", "J. K. Rowling", 400);
        $book2 = new Book("Lord of the Rings", "J. R. R. Tolkien", 700);
        
        echo $book1->title;
    ?>
    <hr> 
    <p> This is used to learn the formatting of getters and setters for the classes.<br> This will follow the example of a movie.<br>
    The title of the Movie will be public and the rating will be private to prevent unauthorized modification.</p>
    
    <p>
        This the class with modified constructor to prevent an invalid rating being applied to the movie : <br><br>
        class Movie {<br>
            public $title;<br>
            private $rating;<br><br>

            function __construct($aTitle, $aRating) {<br>
                $this->$title = $aTitle;<br>
                $this->set_rating($aRating);<br>
            }<br><br>

            function set_rating($aRating){<br>
                if ($aRating == "G" || $aRating == "PG" || $aRating == "13" || $aRating == "PG-13" || $aRating == "R" || $aRating == "NR" ) {<br>
                    $this->$rating = $aRating;<br>
                }<br>
                else {<br>
                    $this->$rating = "NR";<br>
                }<br>
            }<br><br>

            function get_rating(){<br>
                return $this->rating;<br>
            }<br>
        }<br>
    </p>
    <?php 
        class Movie {
            public $title;
            private $rating;

            function __construct($aTitle, $aRating) {
                $this->$title = $aTitle;
                $this->set_rating($aRating);
            }

            function set_rating($aRating){
                if ($aRating == "G" || $aRating == "PG" || $aRating == "13" || $aRating == "PG-13" || $aRating == "R" || $aRating == "NR" ) {
                    $this->$rating = $aRating;
                }
                else {
                    $this->$rating = "NR";
                }
            }

            function get_rating(){
                return $this->rating;
            }
        }
    ?> 
    <hr> 
    <p> 
        This is used to learn the formatting of Inheritance for the classes.<br> This will follow the example of a Chef.<br>
        There will be a normal chef that can male Chicken, Salad and a Special Dish, and an Italian Chef that can do the same as the <br>
        regular Chef and a few more dishes. The Italian Chef has also overridden the special dish to make Pizza.<br>
    </p>

    <p>
        This is a copy of the code used to model each of the Chefs : <br><br>
        class Chef   {<br>
            function makeChicken() { <br>
                echo "The Chef makes Chicken!";<br>
            }<br>
            function makeSalad() { <br>
                echo "The Chef makes Salad!";<br>
            }<br>
            function makeSpecial() { <br>
                echo "The Chef makes Ribs!";<br>
            }<br>
        }<br><br>

        class ItalianChef extends Chef {<br>
            function makePasta() {<br>
                echo "The Chef makes Pasta!";<br>
            }<br>
            function makeSpecial() {<br>
                echo "The Chef makes Pizza!";<br>
            }<br>
        }<br>
    </p>
    <?php 
        class Chef   {
            function makeChicken() { 
                echo "The Chef makes Chicken!";
            }
            function makeSalad() { 
                echo "The Chef makes Salad!";
            }
            function makeSpecial() { 
                echo "The Chef makes Ribs!";
            }
        }

        class ItalianChef extends Chef {
            function makePasta() {
                echo "The Chef makes Pasta!";
            }
            function makeSpecial() {
                echo "The Chef makes Pizza!";
            }
        }
    ?>
<?php include "footer.html" ?>