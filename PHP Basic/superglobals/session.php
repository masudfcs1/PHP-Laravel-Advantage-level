<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>

<body>

    <?php

    // Set session variables
    $_SESSION["favcolor"] = "Red";
    $_SESSION["favanimal"] = "Dog";

    echo "Session variables are set.<br><br><br>";

    echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
    echo "Favorite animal is " . $_SESSION["favanimal"] . ".<br><br>";

    // session unset
    session_unset();


    print_r($_SESSION);

    // session destroy all value
    session_destroy();


    ?>




</body>

</html>
