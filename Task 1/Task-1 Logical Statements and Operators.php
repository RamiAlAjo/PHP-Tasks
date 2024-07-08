<!-- Task-1 Logical Statements and Operators -->

<?php
/* Q1. Write a PHP script to see if the specified year is a leap year or not.  */
echo "<br><br>";
echo "1.<br><br>";

function leapYear($year)
{
    if ((0 == $year % 4)) {
        echo "$year : This year is a leap year <br><br>";
    } else {
        echo "$year : This year is not a leap year <br><br>";
    }
}
leapYear(2013);

/* Q2. Write a PHP script to check the season depending on the inserted temperature if the */
echo "<br><br>";
echo "2.<br><br>";
function season($temp)
{
    if (($temp < 27)) {
        echo "We are in the winter <br><br>";
    } else {
        echo "We are in the summer <br><br>";
    }
}
season(16);

/* Q3. Write a PHP script to calculate the sum of the two integers. If the two values are the same, then
calculate the triple of their sum. */

echo "<br><br>";
echo "3.<br><br>";

function sum($n1, $n2)
{
    if (($n1 == $n2)) {
        echo "The summation of $n1 & $n2 = " . ($n1 + $n2) * 3;
    } else {
        echo "The summation of $n1 & $n2 = " . ($n1 + $n2);
    }
}
sum(2, 1);

/* Q4. Write PHP to check if the sum of the two given numbers equals 30, if the condition is true the
return their sum otherwise return false */
echo "<br><br>";
echo "4.<br><br>";
function sum2($n1, $n2)
{
    if (($n1 + $n2) == 30) {
        echo "The summation of $n1 & $n2 = " . ($n1 + $n2);
    } else {
        echo "False";
    }
}
sum2(15, 15);

/* Q5. Write in PHP script to check if the given positive number is a multiple of 3. */
echo "<br><br>";
echo "5.<br><br>";

function mult($n)
{
    if ($n % 3 == 0) {
        echo "True";
    } else {
        echo "False";
    }
}
mult(30);

/* Q6. Write a PHP script to check if the integer value is in the range of [20-50] inclusive. */

echo "<br><br>";
echo "6.<br><br>";
function checkRange($n)
{
    if ($n > 19 && $n < 51) {
        echo "True";
    } else {
        echo "False";
    }
}
checkRange(27);

/* Q7. Write PHP script to find the largest number between the three integers */
echo "<br><br>";
echo "7.<br><br>";

function largest($n1, $n2, $n3)
{
    if ($n1 > $n2 && $n1 > $n3) {
        echo "The largest number is : $n1";
    } else if ($n2 > $n1 && $n2 > $n3) {
        echo "The largest number is : $n2";
    } else {
        echo "The largest number is : $n3";
    }
}
largest(11, 32, 8);

/* Q8. Write PHP script to calculate the monthly electricity bill according to these rules */

echo "<br><br>";
echo "8.<br><br>";

function elecBill($units)
{
    if ($units < 51 && $units >= 0) {
        echo "The bill =  " . $units * 2.5;
    } else if ($units > 51 && $units < 151) {
        echo "The bill =  " . $units * 5;
    } else if ($units > 150 && $units < 251) {
        echo "The bill =  " . $units * 6.2;
    } else if ($units > 250) {
        echo "The bill =  " . $units * 6.2;
    } else {
        echo "Units can't be a negative value";
    }
}
elecBill(-50);

/* Q9. Write php script to make a calculator, the calculator should contain the four main operations */
echo "<br><br>";
echo "9.<br><br>";

function calc($n1, $n2, $operation)
{
    if ($operation == '+') {
        echo "The sum =  " . ($n1 + $n2);
    } else if ($operation == '-') {
        echo "The subtraction =  " . ($n1 - $n2);
    } else if ($operation == '*') {
        echo "The multiplication =  " . ($n1 * $n2);
    } else if ($operation == '/') {
        echo "The division =  " . ($n1 / $n2);
    } else {
        echo "Please enter a valid operation (+, -, /, *)";
    }
}
calc(1, 2, '+');

/* Q10. Write php script to check if a person is eligible to vote, minimum age required for voting is 18. */
echo "<br><br>";
echo "10.<br><br>";

function vote($Age)
{
    if ($Age > 17) {
        echo "You can vote";
    } else if ($Age < 17 && $Age > 0) {
        echo "You can't vote";
    } else {
        echo "Age can't be zero or less";
    }
}
vote(45);

/* Q11. Write php script to check whether a number is positive, negative or zero */
echo "<br><br>";
echo "11.<br><br>";

function type($n)
{
    if ($n > 0) {
        echo "($n) is a positive number";
    } else if ($n < 0) {
        echo "($n) is a negative number";
    } else {
        echo "The number you entered is zero";
    }
}
type(0);

/* Q12. Write a PHP to find the grade for the student, after calculating the average of his score in all the subject */
echo "<br><br>";
echo "12.<br><br>";

function grade($Array)
{
    $ave = array_sum($Array) / count($Array);
    if ($ave < 60 && $ave >= 0) {
        echo "Your grade is : ( F )";
    } else if ($ave < 70 && $ave > 59) {
        echo "Your grade is : ( D )";
    } else if ($ave < 80 && $ave > 69) {
        echo "Your grade is : ( C )";
    } else if ($ave < 90 && $ave > 79) {
        echo "Your grade is : ( B )";
    } else if ($ave <= 100 && $ave > 89) {
        echo "Your grade is : ( A )";
    } else {
        echo "Please check that you entered your grades correctly";
    }
}
grade([60, 86, 95, 63, 55, 74, 79, 62, 50]);


?>