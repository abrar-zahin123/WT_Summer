<?php
session_start();
$error=0;
if(isset($_POST["login"]))
{
    if((empty($_POST["name"])) && (empty($_POST["password"])))
    {
        echo"username and password can not be empty";
    }
    
    else
    {
        $jsondata=file_get_contents("../data/data.json");
        $phpdata=json_decode($jsondata);
        foreach($phpdata as $myobj)
        {
            if(($_POST["name"]==$myobj->username)&&($_POST["password"]==$myobj->password))
            {
                $_SESSION["name"]=$_POST["name"];
                $_SESSION["password"]=$_POST["password"];
                header("Location:../view/identity.php");
            }
            else{
                $error=1;
            }  
            
        }
        if($error==1)
            {
                echo"Invalid input";
            }   
    }
}

?>