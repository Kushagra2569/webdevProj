<?php  
 //insert.php  
 $conn=mysqli_connect("localhost","expanyhj_kush","expanse10","expanyhj_emails");
if(!$conn){
    die("could not connect".mysqli_connect_error());
}
else {
    if(isset($_POST["email"]))  
 {
      $email = mysqli_real_escape_string($conn, $_POST["email"]);
      $sql = "INSERT INTO emails_list VALUES ('".$email."')";  
      if(mysqli_query($conn, $sql))  
      {  
           echo "Your Subscription is active";  
      }  
 } 
}
 ?> 