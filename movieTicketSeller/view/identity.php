
<html>
<link rel="stylesheet" href="../css/style.css">
   <head>
   <title>Welcome</title>
   
    </script>
   
    </head>
    <body>
    
   
   <h1  > Welcome</h1>
   <div class="container">
   <form name="form" action="../model/db1.php"  method="POST">
   <div class="font"> Enter Sl.</div>
            <input type="text" name="t1" >
            
     
            <div class="font">Enter Movie name</div>
      <input type="text" name="t2">
      
      
      <div class="font">Enter no. of tickets </div>
      <input type="text" name="t3">
      
      
      <div class="font">Enter Price</div>
      <input type="text" name="t4"><br>
            

   <input type="submit"name="submit1"value="insert">
   <input type="submit"name="submit2"value="update">
   <input type="submit"name="submit3"value="display">
   <input type="submit"name="submit4"value="search">
</table>
</form>
</div>
<a href = "../view/login.php">logout</a>

</body>
    </html>
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
    