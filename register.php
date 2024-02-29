<?php
$servername="localhost";
$username="root";
$password="";
$dbname="student";
$conn =mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die('could not connect'.mysqil_connect_error());
}
echo'successfully connected<br>';
$stmt=$conn->prepare("INSERT INTO user(username,password) VALUES(?,?)");
$stmt->bind_param("ss",$u,$p);
$u=$_POST["user"];
$p=$_POST["pass"];
$stmt->execute();
echo"record successfully";
$stmt->close();
$conn->close();
header("refresh:4;url=homepage.html");
?>
