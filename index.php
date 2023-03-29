<?php
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);

//including assignment.php located in classes directory
require_once "classes/Assignment.php";
require_once "classes/myAssignment.php";
require_once "classes/childAssignment.php";


//creating an instance of of the class assigned 
$class = new Assignment();

$inherited= new childAssignment(['stop'=>12, 'start'=>0]);
//echo "The mean is ";
echo ($inherited->calculateMean()['mean']);
echo "<br>";
//echo "The median of odd numbers is: ";
echo  ($inherited->calculateMedian());


//calling and printing the results of evenNumbers method
/*echo ($class->evenOddPrimeNumbers(['stop'=>100,'result'=>'list','start'=>0,'type'=>'odd']));
echo "<br>";
print_r ($class->evenOddPrimeNumbers(['stop'=>100,'result'=>'array','start'=>0,'type'=>'even']));
echo "<br>";
echo ($class->evenOddPrimeNumbers(['stop'=>100,'result'=>'sum','start'=>0,'type'=>'prime']));

//an instance of the the inherited class
$inherited= new childAssignment();

echo ($inherited->)*/

