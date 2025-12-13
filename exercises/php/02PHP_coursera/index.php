<!DOCTYPE html>
<html>
<head>
    <title>Aymane Guessing Game</title>
</head>
<body>

<?php
$correct = 46; // autograder will change this

if ( ! isset($_GET['guess']) ) {
    echo "Missing guess parameter";
} else if ( strlen($_GET['guess']) < 1 ) {
    echo "Your guess is too short";
} else if ( ! is_numeric($_GET['guess']) ) {
    echo "Your guess is not a number";
} else if ( $_GET['guess'] < $correct ) {
    echo "Your guess is too low";
} else if ( $_GET['guess'] > $correct ) {
    echo "Your guess is too high";
} else {
    echo "Congratulations - You are right";
}
?>

</body>
</html>

