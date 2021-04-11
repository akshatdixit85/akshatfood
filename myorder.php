<?php

$con  = mysqli_connect('localhost','root');

if($con){
    echo "Connection Successful";
}
else{
    echo "Error";
}

mysqli_select_db($con,'myorder');

$name = $_POST['user'];
$number = $_POST['num'];
$address = $_POST['add'];
$token = $_POST['tok'];
$payment = $_POST['pay'];

$query = "insert into orders (Name,Number,Address,Token,Payment)
values ('$name','$number','$address','$token','$payment')";
// echo "$query";

mysqli_query($con, $query);

header('location:thanks.html');

?>