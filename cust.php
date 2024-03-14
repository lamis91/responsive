<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php

include("connection.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $CompanyName=$_POST["company-name"];
    $PersonName=$_POST["person-name"];
    $Address=$_POST["address"];
    $Email=$_POST["email"];
    $PhoneNumber=$_POST["phone-number"];
    $CompanyField=$_POST["company-field"];
    $Countries=$_POST["Countries"];
    $YourOrder=$_POST["yourorder"];
    $HowKnow=$_POST["how-know"];
    $Conditinos=$_POST["Conditinos"];
    $query="insert into customers form values('$CompanyName',' $PersonName','$Address','$Email','$PhoneNumber','$CompanyField','$Countries','$YourOrder','$HowKnow','$Conditinos')";
   mysqli_query($con,$query);
} 

?>
</body>
</html>