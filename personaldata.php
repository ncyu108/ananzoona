<?php
require ("member.php");
$user_name = $_POST["user_name"];
$r=mysqli_query($student,"SELECT * FROM member_data WHERE username LIKE $user_name;");//user資料表名稱

if($r){
  while($row=mysqli_fetch_array($r))
  {
	  $flag[] =$row;
  }
  printf(json_encode($flag));
 }
 mysqli_close($student);
?>