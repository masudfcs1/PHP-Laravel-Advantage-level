<?php
echo "<ul>";
for ($i = 0; $i <= 3; $i++) {

    echo "<li>Parent </li>";
    echo "<ol>";
    for ($x = 1; $x <= 2; $x++) {
        echo "Child<br>";
    }
    echo "</ol>";
}

echo "</ul>";
