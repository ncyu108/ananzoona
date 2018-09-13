<?php
require ("member.php");
$user_name = $_POST["user_name"];
$mysql_qry ="SELECT * FROM member_data WHERE username LIKE '$user_name';";
$result = mysqli_query($student , $mysql_qry);
if(mysqli_num_rows($result)>0){
	echo "success";
	//echo mysqli_num_rows($result);
}
else{
	echo "false";
}
?>


<?php
require ("member.php");
$STnum ="123";
$i = "2";
//echo $test;
//$mysql_qry ="SELECT * FROM member_data WHERE username LIKE '$STnum';";
//$result = mysqli_query($student,$mysql_qry);
$test = ("student$i"); 
$mysql_int ="insert into test_group ($test) values ('$STnum')";
//if(mysqli_num_rows($result)>0){
  if($student->query($mysql_int) === TRUE)
  {
	  
	echo "success"; }
  else{
	echo "false1";
	}
//}
//else{
	//echo "false2";
//}
$student->close();
?>

<?php
require ("member.php");
$STnum ="456";
//$student = "123";
$i = "3";

	$test = ("student$i"); 
	echo $test;
	$mysql_int ="insert into test_group ($test) values ('$STnum')";
	//if($mysql_int)
 if($student->query($mysql_int) === TRUE)
 {
	echo "success"; }
	else{
	echo "false";
	}
$student->close();
?>