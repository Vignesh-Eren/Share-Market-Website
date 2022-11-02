<?php

$con = mysqli_connect('localhost','root');

if($con){
	   echo"connection successful";
}else{
	echo"no onnection";
}

mysqli_select_db($con,'portfolio');

$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$vrn=$_POST['vrn'];
$comment=$_POST['comment'];

$query="insert into help (name,mobile,email,vrn,comment)
values('$name','$mobile','$email','$vrn','$comment')";

echo"$query";

mysqli_query($con,$query);

header('location:about.php');


?>