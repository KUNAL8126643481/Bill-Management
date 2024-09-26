<html>
<head>
    <style>
      body{
        background-color:rgb(185, 239, 255);
      }
        .container {
    width:fit-content;
    margin:  auto;
    margin-top: 100px;
    padding: 0 30px;
    background-color: rgb(209, 206, 206);
    border: 2px solid #ccc;
    border-radius: 15px;
    box-shadow: 0px 0px 17px black;
}
.loginlogo{
  text-align: center;
  font-size:40px;
}
.form-group {
    margin-bottom: 20px;
}
form p{
  font-size: large;
}
a{
  
  text-decoration: none;
}


 /* table*/
 table{
  
  border-radius: 30px;
  padding-bottom: 15px;
  background-color: white;
  box-shadow: 0px 0px 11px;

 }
 th,td{
  border-bottom:1px solid grey;
 }
td img{
  width: 90%; ;
  height: 200px;
  /* margin-left: 5%;
  margin-top: 10px; */
  margin:10px 5% 10px 5%;
  border-radius: 30px;
  box-shadow: 0px 0px 11px black;
}
.out-btn{
margin-bottom: 10px;
padding: 2px 8px;
border-radius: 20px;
box-shadow: 0px 0px 7px black;
}


    </style>
    <title>Login Logout Page</title>
    
</head>
<body >
  <?php
  $connection = mysqli_connect("localhost","root","","bill");
  session_start();
  if(!$_SESSION['Id']){
  header("Location: index.php");
        exit();
		}else{
  $id = "";
  $id = $_SESSION['Id'];
  ?>
    <div class="container">
       
       <?php
       
       $sql = "SELECT * FROM user_table where id = '$id' ";
       $result = mysqli_query($connection,$sql);
       ?><?php
       while ($d = mysqli_fetch_array($result)){
            ?>
         
    
       <table>
     
        <tr>
          <th>ID</th>
           <td><?php echo $d['id'];?></td> 
        </tr>
        <tr>
          <th>Name</th>
          <td><?php echo $d['name'];?></td>
        </tr>
        <tr>
          <th>fathername</th>
          <td><?php echo $d['fatherName'];?></td>
       </tr>
        <tr>
          <th>Mobile</th>
          <td><?php echo $d['mobileNo'];?></td>
        </tr>
        <tr>
          <th>email</th>
          <td><?php echo $d['email'];?></td>
        </tr>
          <th>Address</th>
          <td><?php echo $d['address'];?></td>
        </tr>
        <tr>
          <th>kiloWatt</th>
          <td><?php echo $d['kiloWatt'];?></td>
        </tr>
      
        <tr>
          <th>Password</th>
          <td><?php echo $d['password'];?></td>
        </tr>
        

       </table><br><br>
       
      <?php } ?>
      <button ><a href="viewbill.php?id=<?php echo $id ?>">View bill</a></button>

    
    <form action="logout2.php" method="post" >
    <input class="out-btn" type="submit" value="Logout" name="submit">
    </form>



    
    </div>
		<?php } ?>
</body>
</html>

