<!-- Task-1 PHP String and String Functions -->
<?php

/* Q1: Write a PHP script to: 
a. Convert the entered string to uppercase.
b. Convert the entered string to lowercase.
c.Make the first letter of the string uppercase.
d. Make the first letter of each word capitalized.  */
echo "<br><br>";
echo "1.<br><br>";

$salutation = "hello world!";
echo strtoupper($salutation) . "<br>";
echo strtolower($salutation) . "<br>";
echo ucfirst($salutation) . "<br>";
echo lcfirst($salutation);


/* Q2. Write a PHP script splitting the following numeric string to be a date format.
Sample Output: '085119'
Expected Output: 08:51:19 */
echo "<br><br>";
echo "2.<br><br>";


/* Q3. Write a PHP script to check whether the sentence contains a specific word. */
echo "<br><br>";
echo "3.<br><br>";
$stringx = 'I am a full stack developer at orange coding academy';

if (strpos($stringx, 'orange') !== false) {
    echo "Word Found!";
} else {
    echo "Word Not Found!";
}

/* Q4. Write a PHP script to extract the file name from the URL. */
echo "<br><br>";
echo "4.<br><br>";
$Link = 'www.orange.com/index.php';
echo basename($Link);

/* Q5. Write a PHP script to extract the username from the following email address. */
echo "<br><br>";
echo "5.<br><br>";
$email = 'info@orange.com';
echo (strstr($email, '@', true));

/* Q6. Write a PHP script to get the last three characters from the string. */
echo "<br><br>";
echo "6.<br><br>";
$email = 'info@orange.com';
echo (substr($email, -3));


/* Q7. Write a PHP script to generate simple random passwords [do not use rand () function] from a given string. */
echo "<br><br>";
echo "7.<br><br>";
$Pass = '1234567890ABCDEFGHIJKLMNOPabcdesghijklmnop';
echo substr(str_shuffle($Pass), 0, 10);


/* Q8. Write a PHP script to replace the first word of the sentence with another word. */

// PHP program to replace all occurrence
// of a word inside a string
echo "<br><br>";
echo "8.<br><br>";

// Given string
$str = "That new trainee is so genius.";

// Word to be replaced
$w1 = "That";

//  Replaced by
$w2 = "Our";

// Using str_replace() function 
// to replace the word 
$str = str_replace($w1, $w2, $str);

// Printing the result
echo $str;


/* Q9. Write a PHP script to find the first character that is different between two strings.*/


/* Q10. Write a PHP script to put a string in an array, use the (var_dump) to view the array. */
echo "<br><br>";
echo "10.<br><br>";
$stringA = 'Twinkle twinkle, little star.';
$Array = explode(' ', $stringA);
echo var_dump($Array);

/* Q11. Write a PHP script to print the next letter of the inputted letter.*/
echo "<br><br>";
echo "11.<br><br>";
$char = 'A';
echo ++$char;

/* Q12. Write a PHP script to insert a string at the specified position in a given string. */
echo "<br><br>";
echo "12.<br><br>";
$stringFox = 'The brown fox';
$addString = 'quick';
$positionS = 4;
echo 'a. ' . substr_replace($stringFox, $addString . ' ', $positionS, 0);
echo '<br> b. ' . strstr($stringFox, ' ', true);

/* Q13. Write a PHP script to remove zeroes from the given number. */
echo "<br><br>";
echo "13.<br><br>";
$num = 0000657022.24;
echo str_replace(0, '', $num);

/* Q14. Write a PHP script to remove part of a string. */
echo "<br><br>";
echo "14.<br><br>";
$stringFox2 = 'The quick brown fox jumps over the lazy dog';
$wordToRemove = 'fox';
echo str_replace($wordToRemove, '', $stringFox2);


/* Q15. Write a PHP script to remove trailing dashes from a string. */
echo "<br><br>";
echo "15.<br><br>";
$stringFox3 = 'The quick brown fox jumps----over the lazy dog---';
echo str_replace('-', '', $stringFox3);
echo '<br>' . trim($stringFox3, "-");

/* Q16. Write a PHP script to remove Special characters from the following string. */
echo "<br><br>";
echo "16.<br><br>";
$stringSpecial = '\"\1+2/3*2:2-3/4*3';
echo preg_replace("/[^0-9]/", ' ', $stringSpecial);

/* Q17. Write a PHP script to select first 5 words from the following string. */
$my_string = 'The quick brown fox jumps over the lazy dog';

echo implode(' ', array_slice(explode(' ', $my_string), 0, 5)) . "\n";

/* Q18. Write a PHP script to remove comma(s) from the following numeric string.  */
echo "<br><br>";
echo "18.<br><br>";
$num2 = '2,543.12';
echo str_replace(",", '', $num2);

/* Q19. Write a PHP script to print letters from 'a' to 'z'. */
echo "<br><br>";
echo "19.<br><br>";
for ($x = ord('a'); $x <= ord('z'); $x++)
    // Loop through ASCII values of lowercase letters from 'a' to 'z'.

    echo chr($x);
// Convert ASCII value to corresponding character and echo.

echo "\n";
// Output newline character.




?>