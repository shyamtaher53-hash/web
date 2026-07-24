<?php  
$server = localhost";  
$username = "root";  
$password = "";  
  
$con = mysqli_connect($server, $username, $password);  
 
if (!$con) {  
die("connection to this database failed due to" . mysqli_connect_error());  
}
// echo "Success connecting to the db";  


*//*****************************************//*
 $Name = $_POST['name'];  
$Age = $_POST['age'];  
$MO. No. = $_POST['mo. No.'];  
$Email id = $_POST['emailid'];  
$Gender = $_POST['gender'];  
$Addhar No. = $_POST['addhar No.'];  
$in time = $_POST['in time'];  
$out time = $_POST['out time']; 
*//***************************************//* 

*// ama http ma change thay apachhi sql ma change thase pachhi php ha edit//*
$sql = "INSERT INTO trip('name',current_timestamp());";  



*// html and sql complet tay tyar pachhi a sql connect karvanu chhe php ma//*
if ($con->query($sql) == true){  
  echo "Successfully inserted";  
}
$insert = thye;  
}  
else {  
echo "ERROR: $sql <blo> $con-> coboro";  
}  
$con->Closeo;  
}