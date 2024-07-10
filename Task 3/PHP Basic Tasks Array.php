<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <style>
        body{
            background-color: beige;
        }
    </style>
  </head>
  <body>
  </body>
</html>

<?php
/* Q1.Write a script to generate the following paragraph
"The memory of that scene for me is like a frame of film forever frozen at that moment: the red
carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. -
Richard M. Nixon"
The words 'red', 'green' and 'white' should come from the $colors array. */

echo "1. <br><br>";

$color = array('white', 'green', 'red');
function ChangeColor($array)
{
    echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $array[0] carpet, the $array[1] lawn, the $array[2] house, the leaden sky.
 The new president and his first lady. - Richard M. Nixon" . "<br><br>";
}
ChangeColor($color);
echo "<br><br>";

/* Q2.$colors = array('white', 'green', 'red')
Write a PHP script that will display the colors as unordered list : */

echo "2. <br><br>";
function colors($Array)
{
    $color = array('white', 'green', 'red', 'Yallow');
    echo "<ul>";
    for ($i = 0; $i < count($color); $i++) {
        echo "<li>$color[$i]</li>";
    }
    echo "</ul>";
}
colors($color);
echo "<br><br>";

/* Q3.$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris",
"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" =>
"Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon",
"Spain"=>"Madrid" );
Create a PHP script to displays the capital and country name from the above array $cities. Sort
the list by the capital of the country. */

echo "3. <br><br>";

$countriesAndCapital = array(
    "Italy" => "Rome","Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels", "Denmark" => "Copenhagen",
    "Finland" => "Helsinki", "France" => "Paris",
    "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana",
    "Germany" => "Berlin", "Greece" => "Athens",
    "Ireland" => "Dublin", "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon", "Spain" => "Madrid",
    "Sweden" => "Stockholm", "United Kingdom" => "London",
    "Cyprus" => "Nicosia", "Lithuania" => "Vilnius",
    "Czech Republic" => "Prague", "Estonia" => "Tallin",
    "Hungary" => "Budapest", "Latvia" => "Riga",
    "Malta" => "Valetta", "Austria" => "Vienna",
    "Poland" => "Warsaw"
);

asort($countriesAndCapital);

foreach ($countriesAndCapital as $country => $capital) {
    echo "The capital of $country is $capital<br>";
}


echo "<br><br>";

/* Q4. $color = array (4 => 'white', 6 => 'green', 11=> 'red');
Write a PHP script to display the first element of the above array. */
echo "4. <br><br>";
$color = array(4 => 'white', 6 => 'green', 11 => 'red');
echo reset($color);
echo "<br><br>";


/* Q5. Write a PHP script that inserts a specific new item in an array in any position. */
echo "5. <br><br>";
$nArray = array();
function Add($nArray, $addValue, $Location)
{
    array_splice($nArray, $Location - 1, 0, $addValue);
    print_r($nArray);
    echo '<br>';
    for ($i = 0; $i < count($nArray); $i++) {
        echo $nArray[$i] . " ";
    }
};
Add([1, 2, 3, 4, 5], "$", 4);
echo "<br><br>";

/* Q6. Write a PHP script to sort the following associative array depending on the key value [asc] : */
echo "6. <br><br>";

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach ($fruits as $i => $i_value) {
    echo  $i . " = " . $i_value;
}
echo '<br><br>';


/* Q7.Write a PHP script to calculate and display the average temperature for the recorded reads, also
the script should display the list of the five lowest and the five highest temperatures */
echo "7. <br><br>";

$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
$avg_high_temp = $tot_temp / $temp_array_length;
echo "Average Temperature is : " . $avg_high_temp . "";
sort($temp_array);
echo " List of five lowest temperatures :";
for ($i = 0; $i < 5; $i++)
{ 
    echo $temp_array[$i] . ", ";
}
echo "List of five highest temperatures :";
for ($i = ($temp_array_length - 5); $i < $temp_array_length; $i++)
{
    echo $temp_array[$i] . ", ";
}
echo '<br><br>';

/* Q8. Write a PHP program to merge the following two arrays.  */
echo "8. <br><br>";
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

$mergedArray = array_merge($array1, $array2);

print_r($mergedArray);
echo '<br><br>';

/* Q9. Write a PHP function to change the following array's and convert all the strings to upper case. */
echo "9. <br><br>"; 

function upper($array){
    $newArray =[];
for($i=0; $i<count($array); $i++){
    array_push($newArray,strtoupper($array[$i]));
}
print_r($newArray);
}
upper(["red","blue","white","yellow"]);
echo '<br><br>';

/* Q10. Write a PHP function to change the following array's and convert all the strings to lower case. */

echo "10. <br><br>"; 

function lower($array){
    $newArray =[];
for($i=0; $i<count($array); $i++){
    array_push($newArray,strtolower($array[$i]));
}
print_r($newArray);
}
lower(["RED","BLUE", "WHITE","YELLOW"]);
echo '<br><br>';

/* Q11. Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4. */
echo"11. <br><br>";

echo implode(",", range(200, 250, 4)) . "\n";
echo '<br><br>';

/* Q 12. Write a PHP script to get the shortest/longest string length from an array. */
echo"12. <br><br>";

$words =  array("abcd","abc","de","hjjj","g","wer");
$StrLengthArray = array_map('strlen',$words);
echo "The shortest array length is : " . min($StrLengthArray). "<br>";
echo "The longest array length is : " . max($StrLengthArray);
echo '<br><br>';

/* Q13. Write a PHP script to generate unique random 10 numbers within a specific range. */
echo"13. <br><br>";

$n=range(11,20);
shuffle($n);
for($x=0;$x<10;$x++)
{
    echo $n[$x] . ' ';
}
echo "\n";
echo '<br><br>';

/* Q14. Write a PHP script that returns the lowest integer in the array that is not 0.  */

echo "14. <br><br>";
function min_values_not_zero(Array $values)
{
    return min(array_diff(array_map('intval', $values), array(0)));
}

print_r(min_values_not_zero(array(-1, 0, 1, 12, -90, 1)) . "\n");

/* Q15. Write a PHP program to sort an array of positive integers using the any Sort Algorithm. */

echo "15. <br><br>";

function bubbleSortDescending($arr) {
    $n = count($arr);
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] < $arr[$j + 1]) {
                // Swap $arr[$j] and $arr[$j + 1]
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}

$inputArray = array(5, 3, 1, 3, 8, 7, 4, 1, 1, 3);

$sortedArray = bubbleSortDescending($inputArray);

echo "Sorted Array: ";
print_r($sortedArray);

echo '<br><br>';

/* Q16. Write a PHP function to floor decimal numbers with precision. Note: Accept three parameters
 number, precision, and $separator */

 echo "16. <br><br>";

 function floorDec($number, $precision, $separator)
{
    $formatted_number = number_format($number, $precision, $separator, '');

    $number_part = explode($separator, $formatted_number);

    $ceil_number = array($number_part[0], $number_part[1]);

    if ($number_part[0] >= 0) {
        $ceil_number[1] = floor($number_part[1]);
    }
    else {
        $ceil_number[1] = ceil($number_part[1]);
    }

    return implode($separator, $ceil_number);
}

print_r(floorDec(1.155, 2, ".") . "\n");
print_r(floorDec(100.25781, 4, ".") . "\n");
print_r(floorDec(-2.9636, 3, ".") . "\n");

echo '<br><br>';

/* Q17. Write a PHP script to merge two commas separated lists with unique values only. */

echo "17. <br><br>";

$list1 = "4, 5, 6, 7";
$list2 = "4, 5, 7, 8";

$result = implode("," , array_unique(array_merge(explode(",",$list1),explode(",", $list2))));
echo $result."\n";

echo '<br><br>';

/* Q18. Write a PHP function to remove the duplicate entry from an array. */
echo "18. <br><br>";


echo '<br><br>';

/* Q 19. Write a PHP Program to find if an array is a subset of another. */
echo "19. <br><br>";

function isSubset($array1, $array2) {
    $difference = array_diff($array2, $array1);

    if (empty($difference)) {
        echo "array2 is a subset array from array1";
    } else {
        echo "array2 is not a subset array from array1";
    }
}

$array1 = array('a', '1', '2', '3', '4');
$array2 = array('a', '3');

isSubset($array1, $array2);

echo '<br><br>';

?>
