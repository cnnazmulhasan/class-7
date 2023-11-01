<?php
$name = trim($_REQUEST["name"]);
$email = trim($_REQUEST["email"]);
$number = trim($_REQUEST["number"]);
$password = trim($_REQUEST["password"]);
$message = trim($_REQUEST["message"]);

if(strlen($name) > 50){
    echo "Invalid name";
} else {
    echo $name;
}
echo "<br>";

if(strlen($email) > 30){
    echo "Invalid email";
} else {
    echo $email;
}
echo "<br>";

if(strlen($number) != 11 || !is_numeric($number)){
    echo "Invalid phone number";
} else {
    echo $number;
}
echo "<br>";

if(strlen($password) != 8){
    echo "Please use 8 characters for password";
} else {
    echo $password;
}
echo "<br>";

if(strlen($message) > 100){
    echo "Do not disturb me";
} else {
    echo $message;
}
?>
