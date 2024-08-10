<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <p> This is HTML STMT</p>
</body>
</html>

<!--Here in html stmt also used in php code. If one page there are HTML & PHP stmts present means
when your are going to run this. in normal webpage it will take only HTML not PHP stmt.!>

<?php
$name = "Mahesh";

echo "<p> My  Friend $name is a living legend";
?>

<!-Now in PHP will take in webpage only when XAMMP or WAMP server is Runs. 
And in XAMMP or WAMMP server consider the HTML stmt also !>


<!- or else we will gave the only php code echo stmt. It will execute in XAMMP or WAMMP !>

<?php

$name = "Mahesh"; #Here the $ is represents the Variable and for the variable we must give the value like string,float,boolean,decimal etc.,
echo "<br> My Friend $name is living legend </br"

?>