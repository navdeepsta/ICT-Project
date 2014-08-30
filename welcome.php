<html>
<body>
<h1 align = "center">BMI Calculator</h1>
 
<form action="welcome.php" method="post">
Height: <input type="text" name="name"><br>
Weight: <input type="text" name="weight"><br>
<input type="submit">
</form>
 
<?php
if(($_POST["name"] == null) ||($_POST["weight"]==null))
{
echo "One or both of the fields are missing!";
}
 
else
 {
  echo "The Height of the person is"." - ".$_POST["name"]."cm"."<br>";
  echo "Weight is"." - ".$_POST["weight"]."</br>";
  $height = $_POST["name"]/100;
       $weight = $_POST["weight"];
        
       $bmi = $weight / ($height * $height);
        
       echo "BMI:".$bmi;
  }
 ?>
        
 
</body>
</html>
