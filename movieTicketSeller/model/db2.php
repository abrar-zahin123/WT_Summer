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
    $sql="INSERT into table2 values('$_POST[t1]','$_POST[t2]','$_POST[t3]','$_POST[t4]','$_POST[t5]','$_POST[t6]')";
    $result = $conn -> query($sql);
 }
 if(isset($_POST["submit2"])){
    $sql="DELETE from table2 where fname='$_POST[t1]'";
    $result = $conn -> query($sql);
 }
 if(isset($_POST["submit3"])){
    $sql ="SELECT * FROM table2";
    $result = $conn -> query($sql);
    echo "<table border=1>";
    echo "<tr>";
    echo "<th>"; echo "fname"; echo "</th>";
    echo "<th>"; echo "lname"; echo "</th>";
    echo "<th>"; echo "age"; echo "</th>";
    echo "<th>"; echo "address"; echo "</th>";
    echo "<th>"; echo "email"; echo "</th>";
    echo "<th>"; echo "password"; echo "</th>";
    echo "</tr>";
  
    if($result->num_rows>0){
    while($row=$result->fetch_assoc())
    {
     echo "<tr>";
    echo "<td>"; echo $row ["fname"]; echo "</td>";
    echo "<td>"; echo $row["lname"]; echo "</td>";
    echo "<td>"; echo $row["age"]; echo "</td>";
    echo "<td>"; echo $row["address"]; echo "</td>";
    echo "<td>"; echo $row["email"]; echo "</td>";
    echo "<td>"; echo $row["password"]; echo "</td>";
    echo "</tr>";
    }
} else{
    echo "0 results";
}
 }
$conn->close();
 
 }
?>
<html>
<link rel="stylesheet" href="../css/style.css">
</html>
<?php
if(isset($_POST["submit1"]))
{
    if(empty($_POST["t1"]))
   {
        echo"First name can not be empty<br>";
    }
    if(empty($_POST["t2"]))
    {
        echo"Last name can not be empty<br>";
   }
    if(empty($_POST["t3"]))
    {
        echo"Age can not be empty<br>";
    }
    if(empty($_POST["t4"]))
    {
        echo"Address can not be empty<br>";
    }
    if(isset ($_REQUEST["radio1"] ) ||isset ($_REQUEST["radio2"] ))
{
   echo "Gender is selected<br>" ;
}
else 
{
    echo "Please select your gender<br>";
}
if(isset ($_REQUEST["checkbox1"] ) ||isset ($_REQUEST["checkbox2"] ))
{
   echo "Preferred movie type is selected<br>" ;
}
else 
{
    echo "Please select your preferred movie type<br>";
}
if(empty($_POST["t5"]))
    {
        echo"Email can not be empty<br>";
    }
    if(empty($_POST["t6"]))
    {
        echo"Password can not be empty<br>";
    }
    if(empty($_POST["rpassword"]))
    {
        echo"Re-type password can not be empty<br>";
    }
}
?>