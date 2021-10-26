<?php
$age = 50;

if ($age < 18){
    echo "Sorry, we can't allow you to access this content";
}else{
    echo "Have fun!!!";
}
echo "<br>";

$marks = 80;
if ($marks <60){
    echo "FAIL";
}else{
    echo "PASS";
}
echo "<br>";
$registeredusername = "allan";
$resteredpassword = "allan123";
$username = "allan";
$password = "allan123";
if ($username == $registeredusername and $password==$resteredpassword){
    echo "login successful";
}else{
    echo "login failed";
}
echo "<br>";

$score = 55;
if ($score < 40){
    echo "E";
}elseif ($score < 50){
    echo "D";
}elseif ($score < 60){
    echo "B";
}else{
    echo "A";
}
echo "<br>";

$bettingNumber = 3;
switch ($bettingNumber){
    case 1:
        echo "Oooops!!! you lost!!";
        break;
        case 2:
            echo "Oooops!!! you lost!!";
            break;
            case 3:
                echo "congratulations!!! You won!!!";
                break;
                case 4:
                    echo "Oooops!!! you lost!!";
                    break;
                    default:
                        echo "Sorry, enter a number from 1-4 to bet";

}