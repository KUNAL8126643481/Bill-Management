<?php
 session_start();
$connection = mysqli_connect("localhost","root","","bill");
if(isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
         $password = $_POST['password'];
$sql = "SELECT * FROM admin_table where email = '$email'";
$result = mysqli_query($connection,$sql);
while ($d = mysqli_fetch_array($result)){
    $id = $d['id'];
   $MAIL = $d['email'];
   $PASSWORD = $d['password'];
   echo $MAIL."<br>";
   echo $PASSWORD."<br>";}
   
   if($email === $MAIL && $password === $PASSWORD ) {

           $_SESSION['Id'] = $id;
            
             header("Location:admin_profile.php");
            exit();
     
        }else {
       
           header("Location: admin-log.php?error=1");
          exit();
        }}else{
   
        header("Location: admin-log.php");
        exit();


}

?>
