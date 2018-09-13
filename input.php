<?php
require ("member.php");
//$ans_houseowner;
//$ans_house ;
$message=$_POST["message"];
$mysql_qry ="insert into test_inputmess (message) values ('$message');";

if($student->query($mysql_qry) === TRUE){
	echo "success";
}
else{
	echo "false";
}
?>