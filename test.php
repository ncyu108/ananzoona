<?php
require ("member.php");
$Leader =$_POST["leader"];
$STnum =$_POST["user_name"];
$i = $_POST["idd"];

//echo $test;
$mysqli_qry ="SELECT * FROM member_data WHERE username LIKE '$STnum';";
$mysqli_leader ="SELECT * FROM test_group WHERE number LIKE '$Leader'";
$result = mysqli_query($student,$mysqli_qry);
$test = ("student$i"); 
$mysqli_int ="insert into test_group (number,$test) values ('$Leader','$STnum')";
$rows=mysqli_query($student,$mysqli_leader);
$num=mysqli_num_rows($rows);

if(mysqli_num_rows($result)>0){
	
	if($num==0){
		if(mysqli_query($student,$mysqli_int))
       {
	     echo "success"; 
         }
		 else{
	      echo $i;
	      echo $test;
	      echo "false";
	     }	
	}
	else
	{
		
		$mysql_ints="UPDATE test_group SET $test = '$STnum' WHERE number='$Leader'";
		if(mysqli_query($student,$mysql_ints))
       {
	     echo "success"; 
        }
		else
		{
	      echo $i;
	      echo $test;
	      echo "false";
	    }	
		
	}
}
else{
	echo "false2";
}
$student->close();
?>