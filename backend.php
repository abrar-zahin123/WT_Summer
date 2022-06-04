<?php
$fname = $_REQUEST["firstname"];
$lname = $_REQUEST["lastname"];

if(strlen($fname)<4){
    echo"Your name is too short<br>";
}else{
    echo"Your name is".$fname;
}

if(strlen($lname)<4){
    echo"Your name is too short<br>";
}
else{
    echo"Your name is".$lname;
}
if(isset ($_REQUEST["radio1"] ) ||isset ($_REQUEST["radio2"] ) || isset ($_REQUEST["radio3"] ))
{
   echo "Designation is selected<br>" ;
}
else 
{
    echo "Please select a designation<br>";
}
if(isset($_REQUEST["preferred language"]))
{
    $_preferredlanguage=$_REQUEST["preferred language"];
    echo"You have selected preferred language<br>";
}
else{
    echo "Please select a preferred language<br>";
}
if(empty($_REQUEST["mail"]))
{
    echo"Enter your email<br>";
}
else {
    echo "Your email is not empty<br>";
}
if(is_numeric($_REQUEST["password"]))
{
    echo"Your password is perfect<br>";
}
else 
{
    echo "Please enter a password containing numeric value<br>";
}