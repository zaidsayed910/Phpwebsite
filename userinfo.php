<?php

$con = mysqli_connect('localhost','root','','websiteuserdata');
if ($con) {
    echo "Connection successful";
} else {
    echo "No connection";
}

mysqli_select_db($con,'websiteuserdata');
$user = $_POST['user'];
$Email = $_POST['Email'];
$mobile = $_POST['mobile'];
$Comments = $_POST['Comments'];

$query = "insert into userinfodata (user, Email, mobile, Comments) values ('$user','$Email','$mobile','$Comments') ";

mysqli_query($con, $query);

header('location:index.php');

function myfun() {
  alert("submitted successfully!");
}


?>