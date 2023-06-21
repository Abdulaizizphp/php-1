<?php
$host 		= "localhost"; 
$user 		="root";
$password	="";
$DB 		="libarary";

$conn = mysqli_connect($host ,$user, $password,$DB);

if(!$conn){
	echo "خطا فى الاتصال بقاعدة البيانات!!";
}
?>