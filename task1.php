<?php 
// WEEK 1 TASK.
// Write a function that takes two arguments, start and end, and returns an array containing all the numbers from start up to(and including)end.
echo "<h2> WEEK 1 TASK: </h2>";
function rangeFunc($start, $end){
    for($x = $start;$x <= $end; $x++){
        $result = array($x);
        echo $result[0]. " ";
    }  
 }
 echo "<p> Result of the array from start to end is: <br> </p>"; 
rangeFunc(0,10);
echo "<br><br><br>";


//Write a sum function that takes an array of numbers and returns the sum of these numbers.

$numArray = array(1,2,3,4,5,6,7,8,9,10);
$sum = 0;
$len = count($numArray);
function sumFunc($y){
    global $sum , $numArray, $len;
    for($x=0; $x<$len ; $x++){
        $sum = $sum + $numArray[$x];
        echo $sum." ";
    }
}
echo "<p> The sum of the numbers is: <br> </p>";
sumFunc($numArray);

// OR
echo "<br>";
$y = array(1,2,3,4,5,6,7,8,9,10);
echo "Sum : ".array_sum($y);
?>