<?php
$servername ="localhost";
$username ="root";
$password="";
$dbname="student";
$conn =new mysqli($servername,$username,$password,$dbname);
if(!$conn){
die('could not connect:'.mysqli_connect_error());
}
echo'connected successfully<br/>';
$u=$_POST["user"];
$p=$_POST["pass"];
$sql = "SELECT username,password FROM user where username='{$u}'";
$result = $conn->query($sql);

if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    if($row["username"]==$u && $row["password"]==$p)
   {
     echo "You have been successfully validate";
}
else
{
echo "Credenttials Wrong,Try again";
}
}
}
else
{
 echo "user name given was not exist";
}
$conn->close();
 header("refresh:4;url=homepage.html");
?>