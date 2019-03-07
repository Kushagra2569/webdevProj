<?php  
  
$UID = $_GET["u"]; 
 $conn=mysqli_connect("localhost","expanyhj_kush","expanse10","expanyhj_emails");
if(!$conn){
    die("could not connect".mysqli_connect_error());
}
else {
    $sql = "INSERT INTO uidtest VALUES ('".$UID."')";  
      if(mysqli_query($conn, $sql))  
      {  
           echo "Record added Successfully";  
      } 
    
}
 ?> 