<?php
$host='104.198.121.63'; //你資料庫的位置
$name='root'; //帳號
$pwd='ananzoona';//密碼
$db='ananzoona'; //資料庫名稱
$con=mysqli_connect($host,$name,$pwd);
mysqli_select_db($con,$db);


  $query=mysqli_query($con,"SELECT * FROM safereport3");//user=資料表
  
  if($query){
	  
	  while($row=mysqli_fetch_array($query)){
		$flag[]=$row;
	  }
	  
	  print(json_encode($flag));
	  
  }
  
  
  
  
  
  mysqli_close($con);



?>





