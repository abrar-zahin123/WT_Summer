<?php
include("../Model/db.php");
if(isset($_REQUEST["Submission"])){
    $validdes="";
    $validpl="";
    $validpic="";
    $nameerr="";
    $lnameerr="";
    $validateemail="";
    $validatepass="";
    $fname=$_REQUEST["fname"];
    $lname=$_REQUEST["lname"];
    $age=$_REQUEST["age"];
    $email=$_REQUEST["Email"];
    $pass=$_REQUEST["pass"];
  

    if(empty($fname))
{
    //echo "You haven't entered your first name!";
    $nameerr="You haven't entered your first name!";
    echo "<br>";
}
else
{
    if (!preg_match("/^[a-zA-Z-' ]*$/",$fname))
    {
        echo "Please remove numeric numbers from your first name!";
        echo "<br>";
    }
    else
    {
        echo "Your first name is: ".$fname;
        echo "<br>";
    }
}


if(empty($lname))
{
    $lnameerr="You haven't entered your last name!";
    echo "<br>";
}
else
{
    if (!preg_match("/^[a-zA-Z-' ]*$/",$lname))
    {
        echo "Please remove numeric numbers from your last name!";
        echo "<br>";
    }
    else
    {
        echo "Your last name is: ".$lname;
        echo "<br>";
    }
}
    
    
if (empty($email) || !preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',$email))
{
    $validateemail="Please enter a valid email .";
    echo "Invalid email";
    echo "<br>";
}
else
{
    echo "Your email is ".$email;
    echo "<br>";
}

 



    
    if(strlen($pass)<8){
        $validatepass="Password length must be more than 8 characters.";
        echo "Password must be more than 8 characters<br>";
        
    }
    else{
        echo "Password is valid<br>";
    }

    if(isset($_REQUEST["designation"])){
        $validdes=$_REQUEST["designation"];	

    }
    else{  
        echo "Please select a Designation<br>";
    }
    if(isset($_FILES["myfile"]["name"])){
        $validpic=$_FILES["myfile"]["name"];	

    }
    else{  
        echo "Please select a picture<br>";
    }

    if(isset($_REQUEST["P_Language"])){
        $validpl=$_REQUEST["P_Language"];	

    }
    else{  
        echo "Please select a Language<br>";
    }
    if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"../uploads/".$_FILES["myfile"]["name"]))
    {
        echo "File has been uploaded<br>";

        
    }
    else{
        echo "File uploading error!<br>";
    }
    if(empty($fname)||empty($lname)||empty($age)||empty(isset($_REQUEST["designation"]))||empty($_REQUEST["P_Language"])||empty($email)||empty($pass)||empty($validpic)){
        echo "Please fill up all the fields";
    }
     else{
        $mydb=new db();
        $myconn=$mydb->opencon();
        $mydb->insertuser($fname,$lname,$age,$validdes,$validpl,$email,$pass,$validpic,"employee",$myconn);

     }
    
}

?>