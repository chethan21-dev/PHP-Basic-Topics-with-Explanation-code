<?php

#Now if you single variable value store and print in php then use echo statement.
#supppose if multi variables and also multi values are going to be store means use the array concept.
#In array concept there are 2 methods to declare the variable.

$person = "Mahesh"; #This is for one variable.
echo $person;

#Array 1st method syntax
$persons1 = array('mahesh', '9848022338','24');

#Array 2nd method syntax
$persons2 = ['mahesh', '9848022338','24'];

//Here echo will not work when multi values are there in array concept.
//use print_r will be able to use for multi values store in one variable in array concept.

print_r($persons1);
echo "<br>"
print_r($persons2);

//suppose if you are going to print any one value in variable means. on that time use echo 
echo $persons1[1];
//in variables the values are starting with 0 index numerical.



?>
