<?php
// $color = "t";
// switch ($color) {

//     case 'green':
//         echo "IT's Green";
//         break;

//     case 'red':
//         echo "IT's Red";
//         break;

//     case 'yellow':
//         echo "It's Yellow";
//         break;

//     default:
//         echo "Color is not match!";
// }

$mark = 55;

switch ($mark) {
    case ($mark >= 80):
        echo "A+";
        break;
    case ($mark >= 70 and $mark <= 79);
        echo "A";
        break;

    case ($mark >= 60 and $mark <= 69);
        echo "A-";
        break;

    case ($mark >= 50 and $mark <= 59);
        echo "B+";
        break;

    case ($mark >= 40 and $mark <= 49);
        echo "B";
        break;


    case ($mark >= 30 and $mark <= 33);
        echo "C";
        break;

    case ($mark >= 70 and $mark <= 79);
        echo "D";
        break;

    default:
        echo "Failed";
}
