Task-2 PHP Basic Tasks Functions
<?php 
/* Q1. Write a PHP script to check if the inserted number is a prime number */
echo "<br><br>";
echo "1. <br><br>";
// Function to check if a number is prime
function IsPrime($n)
{
    if ($n <= 1) {
        return 0;
    }
    // Loop through all numbers from 2 to sqrt(n)
    for ($x = 2; $x <= sqrt($n); $x++)
    {
        // If n is divisible by any number other than 1 and itself,
        // it's not prime, so return 0
        if ($n % $x == 0)
        {
            return 0;
        }
    }
    // If no divisor found, n is prime, so return 1
    return 1;
}

// Call the IsPrime function to check if 3 is prime
$a = IsPrime(3);

// Check the return value and print the result
if ($a == 0)
    echo 'This is not a Prime Number.....' . "\n";
else
    echo 'This is a Prime Number..' . "\n";

/* Q2. Write a PHP script to reverse a string */
echo "<br><br>";
echo "2. <br><br>";

// Function to reverse a string recursively
function reverse_string($str1)
{
    // Get the length of the string
    $n = strlen($str1);
    
    // Base case: if the string has only one character, return the string itself
    if ($n == 1)
    {
        return $str1;
    }
    else
    {
        // Decrement the length of the string
        $n--;
        
        // Recursively reverse the substring starting from the second character
        // and concatenate the first character to it
        return reverse_string(substr($str1, 1, $n)) . substr($str1, 0, 1);
    }
}

// Call the reverse_string function with the argument '1234' and print the result
print_r(reverse_string('1234') . "\n");

/* Q3. Write a PHP script to check if all string characters are lowercase */
echo "<br><br>";
echo "3. <br><br>";

// Function to check if all characters in a string are lowercase
function is_all_lowercase($string) {
    return ctype_lower($string);
}

// Test the function
$string = "hello";
if (is_all_lowercase($string)) {
    echo "All characters are lowercase.\n";
} else {
    echo "Not all characters are lowercase.\n";
}

/* Q4. Write a PHP function to swap two variables */
echo "<br><br>";
echo "4. <br><br>";

// Declare and initialize two variables
$a = 15;
$b = 27;

// Display the original values of the variables
echo "\nThe number before swapping is:\n";
echo "Number a = " . $a . " and b = " . $b;

// Swap Logic
$temp = $a;
$a = $b;
$b = $temp;

// Display the values after swapping
echo "\nThe number after swapping is:\n";
echo "Number a = " . $a . " and b = " . $b . "\n";

/* Q5. This question is repeated from Q4, so skipping */
//Same as previous question

/* Q6. Write a PHP function to check if a number is an Armstrong number or not */
echo "<br><br>";
echo "6. <br><br>";
// Function to check if a number is an Armstrong number
function armstrong_number($num) {
    // Calculate the length of the number
    $sl = strlen($num);
    
    // Initialize a variable to store the sum of digits raised to the power of length
    $sum = 0;
    
    // Convert the number to a string for individual digit access
    $num = (string)$num;
    
    // Iterate over each digit of the number
    for ($i = 0; $i < $sl; $i++) {
        // Add the current digit raised to the power of length to the sum
        $sum = $sum + pow((int)$num[$i], $sl);
    }
    
    // Check if the sum is equal to the original number
    return $sum == (int)$num ? "True" : "False";
}

// Test cases
echo "Is 153 Armstrong number? " . armstrong_number(153) . "\n";
echo "Is 21 Armstrong number? " . armstrong_number(21) . "\n";
echo "Is 4587 Armstrong number? " . armstrong_number(4587) . "\n";




  /* Q7. Write a PHP function that checks whether a passed string is a palindrome or not? */

  echo "<br><br>";
  echo "7. <br><br>";

// Define a function to check if a string is a palindrome
function check_palindrome($string) 
{
    // Check if the reversed string is equal to the original string
    if ($string == strrev($string))
        return 1; // Return 1 if it is a palindrome
    else
        return 0; // Return 0 if it is not a palindrome
}
// Test the function with the string 'madam' and display the result
echo check_palindrome('madam')."\n"; // Output: 1 (true) since 'madam' is a palindrome


/* Q8. Write a PHP function to remove duplicates from an array ? */

echo "<br><br>";
echo "8. <br><br>";

function removeDouble($array){
    echo print_r(array_unique($array));
    }
    removeDouble([1,2,2,2,3,4,5,4,5]);






?>