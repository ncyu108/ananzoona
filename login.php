<?php
require ("member.php");
$user_name = $_POST["user_name"];
$user_pass = $_POST["password"];
$mysql_qry ="SELECT * FROM member_data WHERE username LIKE '$user_name' AND password LIKE '$user_pass';";
//password_verify($password,$password2);
$result = mysqli_query($student , $mysql_qry);
if(mysqli_num_rows($result)>0){
	echo "success";
	//echo mysqli_num_rows($result);
}
else{
	echo "false";
}
?>
