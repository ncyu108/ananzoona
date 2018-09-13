<?php
require ("member.php");
$user_name = "ananzoona";
$user_pass = "ananzoona";
$mysql_qry ="SELECT * FROM member WHERE username LIKE '$user_name';";
$test ="SELECT * FROM member_data WHERE password LIKE '$user_pass';";
$re = mysqli_query($student , $test);
//password_verify("ananzoona",$re );
$result = mysqli_query($student , $mysql_qry);//username
$row = @musqli_fetch_row($result);
$_SESSION['password']=$row;
$dppw = $_SEESSION['password'];
if((mysqli_num_rows($result)>0)&&(password_verify('ananzoona',$re ))){
	echo "success";
	//echo mysqli_num_rows($result);
}
else{
	echo "false";
}
?>
