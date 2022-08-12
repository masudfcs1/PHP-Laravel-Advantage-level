<?php
print("Masud Rana<br>");

function test()
{
    print("A winner is Dreamer who never give up.<br>");
}
test();

function info($name, $add)
{
    print("Your Address: $name $add<br>");
    print("Your Address: $add<br> ");
}

info("Masud ", "Dhaka");




//Function with return Value
function addinfo($first, $second, $thard)
{
    return "$first" . "$second" . "$thard";
}
print addinfo("Zakir ", "Abdul ", "Molla");




//Function with return Value math
function math(int $a = 0, int $b = 0): int
{
    echo "<br>";
    return $a + $b;
}

math(5, 6);


//Function with return Reference argument
function addfunction($countvalue)
{
    $countvalue += 5;
}

$coutnNumber = 10;

addfunction($coutnNumber);
echo $coutnNumber;


function calculator($method = "sub", int $a, int $b)
{
    if ($method == "sub")
        return $a - $b;
    elseif ($method = "sum")
        return $a + $b;
}
echo "<br>";
print calculator("sub", 50, 4);
