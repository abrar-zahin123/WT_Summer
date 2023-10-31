<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="ticket";
$conn=new mysqli ($servername , $username, $password,$dbname);
if ($conn->connect_error ) {die("Connection failed: " . $conn->connect_error);}
else{
if(isset($_POST["submit1"])){
   $sql = "INSERT into table1 values('$_POST[t1]','$_POST[t2]','$_POST[t3]','$_POST[t4]')";
   $result = $conn -> query($sql);
}
if(isset($_POST["submit2"])){
   $sql = "UPDATE table1 SET Price ='$_POST[t3]' where Price ='$_POST[t4]'";
   $result = $conn -> query($sql); 
}
if(isset($_POST["submit3"])){
    $sql="SELECT * FROM table1";
  $result= $conn -> query($sql);
  echo "<table border=1>";
  echo "<tr>";
  echo "<th>"; echo "Serial"; echo "</th>";
  echo "<th>"; echo "Movie name"; echo "</th>";
  echo "<th>"; echo "No. of tickets"; echo "</th>";
  echo "<th>"; echo "Price"; echo "</th>";
  echo "</tr>";

  if($result->num_rows>0){
    while($row=$result->fetch_assoc())
  {
   echo "<tr>";
  echo "<td>"; echo $row ["Serial"]; echo "</td>";
  echo "<td>"; echo $row["Movie name"]; echo "</td>";
  echo "<td>"; echo $row["No. of tickets"]; echo "</td>";
  echo "<td>"; echo $row["Price"]; echo "</td>";
  echo "</tr>";
  }
}
}
if(isset($_POST["submit4"])){
    $sql="SELECT * FROM table1 where Serial='$_POST[t1]'";
   $result= $conn->query($sql);
   echo "<table>";
   echo "<tr>";
   echo "<th>"; echo "Serial"; echo "</th>";
   echo "<th>"; echo "Movie name"; echo "</th>";
   echo "<th>"; echo "No. of tickets"; echo "</th>";
   echo "<th>"; echo "Price"; echo "</th>";
   echo "</tr>";
 if($result->num_rows>0){
   while($row=$result->fetch_assoc())
   {
    echo "<tr>";
   echo "<td>"; echo $row ["Serial"]; echo "</td>";
   echo "<td>"; echo $row["Movie name"]; echo "</td>";
   echo "<td>"; echo $row["No. of tickets"]; echo "</td>";
   echo "<td>"; echo $row["Price"]; echo "</td>";
   echo "</tr>";
   }
}
}
   $conn->close();
}
?>
<?php 

if(isset($_POST["submit1"]))
{
    if(empty($_POST["t1"]))
   {
        echo"Serial can not be empty<br>";
    }
    if(empty($_POST["t2"]))
    {
        echo"Movie name can not be empty<br>";
   }
    if(empty($_POST["t3"]))
    {
        echo"No. of tickets can not be empty<br>";
    }
    if(empty($_POST["t4"]))
    {
        echo"Price can not be empty<br>";
    }
}
?>
<html>
<link rel="stylesheet" href="../css/style.css">
</html>