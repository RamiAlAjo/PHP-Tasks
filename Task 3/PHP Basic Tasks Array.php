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
    "Italy" => "Rome", "Luxembourg" => "Luxembourg",
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
    echo "The capital of $country is $capital" . "\n";
}
echo "<br><br>";

/* Q4. $color = array (4 => 'white', 6 => 'green', 11=> 'red');
Write a PHP script to display the first element of the above array. */
echo "4. <br><br>";
$color = array(4 => 'white', 6 => 'green', 11 => 'red');
echo reset($color);

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
    echo "<br>";
}
echo '<br><br>';

/* Q7. Write a PHP script to sort the following associative array depending on the key value [asc] : */
echo "7. <br><br>";
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach ($fruits as $i => $i_value) {
    echo  $i . " = " . $i_value;
    echo "<br>";
}
echo '<br><br>';


/* Q7.Write a PHP script to calculate and display the average temperature for the recorded reads, also
the script should display the list of the five lowest and the five highest temperatures */
echo "7. <br><br>";
