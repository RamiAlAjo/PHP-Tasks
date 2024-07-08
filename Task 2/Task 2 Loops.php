<?php
// Q1. Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no dash (-) at the start and end position
echo "<br><br>";
echo "1. <br><br>";
for ($i = 1; $i <= 10; $i++) {
    if ($i < 10) {
        echo $i . "-";
    } else {
        echo $i;
    }
}
echo "<br><br>";

// Q2. Create a script using a for loop to add all the integers between 0 and 30 and display the total
echo "2. <br><br>";

// Initialize sum variable
$sum = 0;

// Loop through numbers from 1 to 30
for ($x = 1; $x <= 30; $x++) {
    // Add current number to the sum
    $sum += $x;
}

// Print the sum of numbers from 1 to 30
echo "The sum of the numbers 0 to 30 is $sum" . "<br><br>";

// Q3. Create a script to generate the following pattern, using the nested for loop.
echo "3. <br><br>";

for ($i = 0; $i < 5; $i++) {
    for ($x = 4; $x >= 0; $x--) {
        if ($x <= $i) {
            echo chr(ord('A') + $i) . "&nbsp;&nbsp; ";
        } else {
            echo "A" . "&nbsp;&nbsp; ";
        }
    }
    echo "<br>";
}
echo '<br><br>';

// Q4. Create a script to generate the following pattern, using the nested for loop.
echo "4. <br><br>";

for ($i = 0; $i < 5; $i++) {
    for ($x = 4; $x >= 0; $x--) {
        if ($x <= $i) {
            echo (1 + $i) . "&nbsp;&nbsp; ";
        } else {
            echo "1" . "&nbsp;&nbsp; ";
        }
    }
    echo "<br>";
}
echo '<br><br>';

// Q5. Create a script to generate the following pattern, using the nested for loop.
echo "5. <br><br>";

for ($i = 1; $i < 6; $i++) {
    for ($x = 1; $x < 6; $x++) {
        if ($x == $i) {
            echo $i . "&nbsp;&nbsp; ";
        } else {
            echo '0' . "&nbsp;&nbsp; ";
        }
    }
    echo '<br>';
}
echo "<br><br>";

// Q6. Write a program to calculate and print the factorial of a number using a for loop. The factorial of a number is the product of all integers up to and including that number.
echo "6. <br><br>";

function factor($num)
{
    $factorial = 1;
    for ($i = 1; $i <= $num; $i++) {
        $factorial *= $i;
    }
    echo "Factorial of $num = $factorial" . "<br><br>";
}
factor(5);
echo "<br><br>";

// Q7. Write a program to calculate and print the Fibonacci sequence using a for loop. Fibonacci is a series of numbers where a number is the sum of previous two numbers. Starting with 0 and 1, the sequence goes 0, 1, 1, 2, 3, 5, 8, 13, 21, and so on.
echo "7. <br><br>";

function Fibonacci($num)
{
    $n1 = 0;
    $n2 = 1;
    $count = 0;
    while ($count < $num) {
        echo $n1 . ' ';
        $n3 = $n2 + $n1;
        $n1 = $n2;
        $n2 = $n3;
        $count++;
    }
}
Fibonacci(11);
echo "<br><br>";

// Q8. Write a program which will count the "c" characters in the text "Orange Coding Academy".
echo "8. <br><br>";

function countChar($string, $char)
{
    $counter = 0;
    for ($i = 0; $i < strlen($string); $i++) {
        if (strtoupper(substr($string, $i, 1)) == strtoupper($char)) {
            $counter++;
        }
    }
    echo "The letter ( $char ) is repeated ( $counter ) times in this sentence : ( $string ) ";
}
countChar("Orange Coding Academy", 'C');
echo "<br><br>";

// Q9. Write a PHP script that creates the following table using for loops. Add cellpadding="3px" and cell spacing="0px" to the table tag.
echo "9. <br><br>";

echo '<table border="1" cellpadding="3px" cellspacing="0px">';
for ($i = 1; $i < 7; $i++) {
    echo "<tr>";
    for ($x = 1; $x < 6; $x++) {
        echo "<td>$i * $x = " . $i * $x . "</td>";
    }
    echo "</tr>";
}
echo '</table>';
echo "<br><br>";

// Q10. Write a PHP program that repeats integers from 1 to 50. For multiples of three, print "Fizz" instead of the number, and for multiples of five print "Buzz". For numbers that are multiples of both three and five, print "FizzBuzz".
echo "10. <br><br>";
for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz ";
    } elseif ($i % 3 == 0) {
        echo "Fizz ";
    } elseif ($i % 5 == 0) {
        echo "Buzz ";
    } else {
        echo $i . " ";
    }
}
echo "<br><br>";

// Q11. Write a PHP program to generate and display the first n lines of a Floyd triangle
echo "11. <br><br>";

$sum = 0;
for ($i = 0; $i < 5; $i++) {
    for ($x = 0; $x <= $i; $x++) {
        $sum++;
        echo $sum . " ";
    }
    echo '<br>';
}
echo "<br><br>";

// Q12. Write a PHP program to print the following pattern.

echo "12. <br><br>";

// Generate the pattern as shown in the image
// First part of the pattern: increasing rows
for ($i = 1; $i <= 5; $i++) {
    // Print leading spaces for centering
    echo str_repeat("&nbsp;&nbsp;", 5 - $i);

    // Print letters from A to the current row number
    for ($j = 0; $j < $i; $j++) {
        echo chr(ord('A') + $j) . "&nbsp;&nbsp;";
    }
    echo "<br>";
}

// Second part of the pattern: decreasing rows
for ($i = 4; $i >= 1; $i--) {
    // Print leading spaces for centering
    echo str_repeat("&nbsp;&nbsp;", 5 - $i);

    // Print letters from A to the current row number
    for ($j = 0; $j < $i; $j++) {
        echo chr(ord('A') + $j) . "&nbsp;&nbsp;";
    }
    echo "<br>";
}
