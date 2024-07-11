<?php 
// Q1: Create a form to send name and email, and determine if the data is sent by GET or POST
echo "Q1 - Create a form and send email and password, in the action page you will determine if the data is sent by GET or POST<br><br>";

// Display a form that sends data via GET
echo "<form method='GET'>
name: <input type='text' name='name'><br>
email: <input type='text' name='email'><br>
<button type='submit' style='margin-left: 45px; width: 11%;'>go</button>
</form>";

// Check if data is sent via GET
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET["name"], $_GET["email"])) {
    $name = htmlspecialchars($_GET["name"]);
    $email = htmlspecialchars($_GET["email"]);
    echo "The name is $name, the email is $email<br><br>";
}
?>

<!-- #Q2 -->
<?php 
// Q2: Make a search engine website that redirects to a given URL
echo "Q2 - Make a search engine website that contains URL as input text and button named 'GO'. If you click on Go, it will redirect you to the written URL<br><br>";

// Display a form for URL input
echo "<form method='GET'>
    <input type='text' name='search' placeholder='Enter URL'>
    <button type='submit'>Go</button>
</form>";

// Handle URL redirection
if (isset($_GET["search"])) {
    $url = htmlspecialchars($_GET["search"]);
    if (filter_var($url, FILTER_VALIDATE_URL)) {
        header("Location: $url");
        exit();
    } else {
        echo "Invalid URL.";
    }
}
?>

<!-- #Q3 -->
<?php 
// Q3: Create a calculator with basic mathematical operations (+, -, *, /)
echo "Q3 - Make a Calculator that contains Basic Mathematical operations (+, -, *, /)<br><br>";

// Display a form for calculator input
echo "<form method='GET'>
    <input type='text' name='num1' placeholder='First number'>
    <input type='text' name='op' placeholder='Operator'>
    <input type='text' name='num2' placeholder='Second number'>
    <button type='submit'>Go</button>
</form>";

// Perform calculation based on operator
if (isset($_GET["num1"], $_GET["num2"], $_GET["op"])) {
    $num1 = floatval($_GET["num1"]);
    $num2 = floatval($_GET["num2"]);
    $op = $_GET["op"];
    $result = "You inserted the wrong operation";
    
    switch ($op) {
        case "*": $result = $num1 * $num2; break;
        case "/": $result = ($num2 != 0) ? $num1 / $num2 : "Division by zero error"; break;
        case "+": $result = $num1 + $num2; break;
        case "-": $result = $num1 - $num2; break;
    }

    echo $result . "<br>";
}
?>

<!-- #Q4 -->
<?php 
// Q4: Create a To Do List Page
session_start(); // Start session

echo "Q4 - Create a To Do List Page.<br><br>";

// Initialize to-do list if not set
if (!isset($_SESSION['toDoList'])) {
    $_SESSION['toDoList'] = [];
}

// Retrieve and update to-do list
if (!empty($_GET['listItem'])) {
    $_SESSION['toDoList'][] = htmlspecialchars($_GET['listItem']);
}

// Display form and to-do list
echo "<form method='GET'>
    <input type='text' name='listItem' placeholder='Add a new item'>
    <button type='submit'>add</button>
</form><div><ul>";

foreach ($_SESSION['toDoList'] as $item) {
    echo "<li>$item</li>";
}

echo "</ul></div>";
session_write_close(); // Close session
?>

<!-- #Q5 -->
<?php 
// Q5: Determine the project name and script name
echo "Q5 - Determine the project name and script name.<br><br>";
echo 'Project name: ' . basename(dirname(__FILE__)) . "<br>";
echo 'Script name: ' . basename(__FILE__) . "<br><br>";
?>

<!-- #Q6 -->
<?php 
// Q6: Determine page requested time
echo "Q6 - Determine page requested time.<br><br>";

$starttime = microtime(true); 

// Dummy operation
for ($i = 0; $i < 100; $i++) {
    $empty = 0;
}

$endtime = microtime(true);
printf("Page loaded in %f seconds<br>", $endtime - $starttime);
?>

<!-- #Q7 -->
<?php
session_start(); // Start session

// Q7: Create a website counter on refresh
echo "Q7 - Make a website counter on refresh.<br><br>";

// Initialize counter
if (!isset($_SESSION["refreshed_round"])) {
    $_SESSION["refreshed_round"] = 0;
}

$_SESSION["refreshed_round"]++;
echo "User refreshed: " . $_SESSION["refreshed_round"] . "<br><br>";  
session_write_close(); // Close session
?>

<!-- #Q8 -->
<?php
session_start(); // Start session

// Q8: Number of visitors
echo "Q8 - Number of visitors?<br><br>";

// Initialize view counter
if (!isset($_SESSION["views"])) {
    $_SESSION["views"] = 0;
}

$_SESSION["views"]++;
$views = $_SESSION["views"];
echo "User views: $views";
session_write_close(); // Close session
?>
<script>
// Store view count in localStorage
localStorage.setItem("views", <?php echo $views; ?>);
</script>
<br><br>

<!-- #Q9 -->
<?php
// Q9: Creating Cookies
echo "Q9 - Creating Cookies.<br><br>";

// Define and set cookie
$cookie_name = "user";
$cookie_value = "Rami";
setcookie($cookie_name, $cookie_value, time() + 3600, "/");

// Display and delete cookie
if (isset($_COOKIE[$cookie_name])) {
    echo "Cookie '$cookie_name' is set!<br>Value is: " . $_COOKIE[$cookie_name];
} else {
    echo "Cookie '$cookie_name' is not set!";
}

setcookie($cookie_name, "", time() - 3600, "/");
echo "<br>Cookie '$cookie_name' has been deleted.";
?>
