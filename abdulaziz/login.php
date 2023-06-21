<?php
session_start();

include_once("config.php");

if($_POST['Username']){

	$USERNAME  		= $_POST['Username'];
	$USERPASSWORD  = $_POST['Userpassword'];

		
	echo $SQL = "SELECT * FROM users WHERE Username='".$USERNAME."' AND Userpassword='".$USERPASSWORD."'";

	$RESULT  = mysqli_query($conn,$SQL);

	if(mysqli_num_rows($RESULT)>0){

		$row =  mysqli_fetch_assoc($RESULT);

			if($row['Privalige'] == 1){
				$_SESSION['ADMIN'] = $USERNAME;
				$_SESSION['Username'] = $row['Name'];
				header("location:Cpanel.php");
				 
			}else{
				$_SESSION['user'] = $USERNAME;
				$_SESSION['Username'] = $row['Name'];
				header("location: book.php");
			}

	 }
}

?>