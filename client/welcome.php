<?php
    // Use ajax request with javascript in a script tag at the bottom
    // use the include
    // use the form action thing

    if (isset($_POST["name"]) && isset($_POST["email"])) {
        echo $_POST["name"];
        echo "<br>";
        echo $_POST["email"];
        
    }
?>