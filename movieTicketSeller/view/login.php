<?php
    setcookie('username','Abrar',time()+3600);
?>

<html>
<link rel="stylesheet" type="text/css" href="../css/style.css">
    <head>
        <title>
            Movie ticket sales 
</title>
<script type="text/javascript">
    function preventBack(){window.history.forward()};
    setTimeout("preventBack()",0);
    window.onunload=function(){null;}
    </script>
    <script>  
function validateform(){  
var name=document.myform.name.value;  
var password=document.myform.password.value;  
  
if (name==null || name==""){  
  alert("Name can't be blank");  
  return false;  
}else if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }  
}  
</script> 
</head>
<body><table><table align="center">
    <th><td><h1>Welcome to Movie Ticket Sales</h1></th></tr>
    

<form name= "myform" method="POST" action="../control/loginbackend.php"onsubmit="return validateform()">

<table align="center">  
    <h1 align="center"> 
<img src="../view/movieticket.jpg" alt="movie ticket"></h1>         
<tr align="center"><td><td> Username: <input type="test"name="name"></td></td></tr>
            <tr align="center"><td><td> Password: <input type="password"name="password"></td></td></tr>
            
                
                
             <tr><td><td> <input type="submit"name="login"class="button"value="login"></td></td>
</form>
<form action="../view/register.php"method="POST">
                <td><input type="submit"name="signup"class="button"value="signup"></td></tr><br>

</form>
</table>
</body>
</html>

