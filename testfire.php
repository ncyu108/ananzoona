<?
$host='10.3.204.7';
$name='root';
$pwd='';
$db='member';
$con=mysql_connect($host,$name,$pwd) or die("connection failed");
mysql_select_db($db,$con) or die("db selection failed");

 $result=mysql_query("SELECT * FROM user",$con);//user資料表名稱
 while($row=mysql_fetch_assoc($result)){
 $tmp[]=$row;
 }
 echo json_encode($tmp);
 mysql_close($con);
?>