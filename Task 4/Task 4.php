<?php 
echo "Q1-create a form and send email and password , in the action page you will determine if the data is sent by get or
 post ";
 echo "<br><br>";

echo "<form method='GET'>
name :<input type='text' name='name'> <br>
email :<input type='text' name='email'><br>
<button type='submit' style='margin-left: 45px; width: 11%;'>go</button>
</form>";

if (isset($_GET["name"]) && isset($_GET["email"])) {
    $name = htmlspecialchars($_GET["name"]);
    $email = htmlspecialchars($_GET["email"]);
    echo "The name is $name, the email is $email";
    echo "<br><br>";
}

?>

<!-- #Q2 -->
<?php 
echo "Q2-make asearch engine website that contain URL as input text and button named (GO) if you click on Go
 will redirect you to the written URL";
echo "<br><br>";
echo "<form method='GET'>
    <input type='text' name='search'>
    <button type='submit'>Go</button>
    </form>";

if (isset($_GET["search"])) {
    $url = htmlspecialchars($_GET["search"]);
    print_r($url);

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
echo "Q3- make aCalculator that contain Basic Mathematical operations(+,-,*,/)";
echo "<br><br>";
echo "<form method='GET'>
    <input type='text' name='num1'>
    <input type='text' name='op'>
    <input type='text' name='num2'>
    <button type='submit'>go</button>
    </form>";

if (isset($_GET["num1"]) && isset($_GET["num2"]) && isset($_GET["op"])) {
    $num1 = floatval($_GET["num1"]);
    $num2 = floatval($_GET["num2"]);
    $op = $_GET["op"];
    $result = "You inserted the wrong operation";

    switch ($op) {
        case "*":
            $result = $num1 * $num2;
            break;
        case "/":
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Division by zero error";
            }
            break;
        case "+":
            $result = $num1 + $num2;
            break;
        case "-":
            $result = $num1 - $num2;
            break;
    }

    echo $result;
    echo "<br>";
}
?>

<!-- #Q4 -->
<?php 
echo "Q4-Create a To Do List Page.";
echo "<br><br>";
session_start();
$toDoList = array();
$input = "";

if (!isset($_SESSION['toDoList'])) {
    $_SESSION['toDoList'] = array();
}

$toDoList = $_SESSION['toDoList'];
if (isset($_GET['listItem']) && !empty($_GET['listItem'])) {
    $input = htmlspecialchars($_GET['listItem']);
    $toDoList[] = $input; 

    $_SESSION['toDoList'] = $toDoList; 
}

echo "<form method='GET'>
<input type='text' name='listItem'>
<button type='submit'>add</button>
</form>";

print_r($toDoList);
echo "<div><ul>";
foreach ($toDoList as $item) {
    echo "<li>$item</li>";
}
echo "</ul></div>";

session_write_close();
?>

<!-- #Q5 -->
<?php 
echo "Q5-determine the project name, and script name .";
echo "<br><br>";
echo 'http://' . $_SERVER['HTTP_HOST'] . '/';  
echo "<br>";  
echo $_SERVER['SCRIPT_NAME'];  
echo "<br>";    
?>

<!-- #Q6 -->
<?php 
echo "Q6-Determine page requested time.";
echo "<br><br>";
$starttime = microtime(true); 
for ($i = 0; $i < 100; $i++) {
    $empty = 0;
}
$endtime = microtime(true);
echo "<br>";
printf("Page loaded in %f seconds", $endtime - $starttime);
echo "<br>";    
?>

<!-- #Q7 -->
<?php
echo "Q7-makeawebsite counter on refresh ? ";
echo "<br><br>";

session_set_cookie_params([
    'lifetime' => 0,
]);

session_start();

if (!isset($_SESSION["refreshed_round"])) {
    $_SESSION["refreshed_round"] = 0;
}

$_SESSION["refreshed_round"]++;

session_write_close();

echo "User refreshed: " . $_SESSION["refreshed_round"];
echo "<br><br>";    
?>

<!-- #Q8 -->
<?php
echo "Q8-Number of visitors ?";
echo "<br><br>";

$views = 0;

session_start();

if (!isset($_SESSION["views"])) {
    $_SESSION["views"] = 0;
}
$_SESSION["views"]++;
$views = $_SESSION["views"];

echo "User views: " . $views;
session_write_close();
?>
<script>
    localStorage.setItem("views", <?php echo $views; ?>);
</script>

<!-- #Q9 -->
<?php
echo "Q9-Creating Cookies include cookie_name, cookie_value, [expiry_time], [cookie_path], [domain], [secure],
 [httponly] . Then Retrieve all cookies value after that delete the cookies .";
echo "<br><br>";

$cookie_name = "user";

setcookie($cookie_name, "Rami", time() + 3600, "/");

?>
