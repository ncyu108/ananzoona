<?php
require ("member.php");
$name = $_POST["name"];
$surname = $_POST["surname"];
$age = $_POST["age"];
$username = $_POST["username"];
$password = $_POST["password"];
$mysql_qry ="SELECT * FROM member_data WHERE username LIKE '$username';";
$result = mysqli_query($student,$mysql_qry);
if(mysqli_num_rows($result)>0){
	echo "false";

}
else{
	$mysql_int ="insert into member_data (name, surname, age, username, password) values ('$name','$surname','$age','$username','$password')";
 if($student->query($mysql_int) === TRUE){
	echo "success"; }
}

//$get_row = mysql_affected_rows($student);
//if($get_row >=1){
//	echo "user exists";
//}
$student->close();
?>