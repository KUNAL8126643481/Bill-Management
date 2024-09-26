<html>
<head>
    <style>
    body {
    background-color: #f5f5f5;
    font-family: 'Open Sans', sans-serif; 
    margin: 0;
    padding: 0;
}

.container {
    width: 350px;
    margin: 40px auto;
    background-color: #fff; 
    border: 1px solid #ddd; 
    border-radius: 10px; 
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

table {
    border-collapse: collapse; /* remove default border spacing */
    width: 100%; /* make the table full width */
    margin-bottom: 20px; /* add some margin to the table */
}

th, td {
    border-bottom: 1px solid #ddd; /* light gray border */
    padding: 15px; /* add some padding to the table cells */
    text-align: left; /* left align the text */
}

th {
    background-color: #f7f7f7; /* light gray background */
    font-weight: bold; /* bold font */
}

td input[type="number"] {
    width: 100%; /* make the input full width */
    padding: 10px; /* add some padding to the input */
    border: 1px solid #ccc; /* light gray border */
    border-radius: 5px; /* rounded corners */
    font-size: 16px; /* increase font size */
}

td button[type="submit"] {
    background-color: #4CAF50; /* green background */
    color: #fff; /* white text */
    padding: 10px 20px; /* add some padding to the button */
    border: none; /* remove default border */
    border-radius: 5px; /* rounded corners */
    cursor: pointer; /* change cursor to pointer */
}

td button[type="submit"]:hover {
    background-color: #3e8e41; /* darker green background on hover */
}

.out-btn {
    margin-bottom: 10px; /* add some margin to the button */
    padding: 2px 8px; /* add some padding to the button */
    border-radius: 20px; /* rounded corners */
    box-shadow: 0 0 7px rgba(0, 0, 0, 0.1); /* subtle shadow */
    background-color: #ff9900; /* orange background */
    color: #fff; /* white text */
    border: none; /* remove default border */
    cursor: pointer; /* change cursor to pointer */
}

.out-btn:hover {
    background-color: #ff6600; /* darker orange background on hover */
}

/* add some animation to the button on hover */
.out-btn:hover {
    transform: scale(1.1); /* scale the button up */
    transition: 0.3s; /* smooth transition */
}
    </style>
    <title>create bill page</title>
    
</head>
<body >
<div id="createBill">
    <h1>create bill page</h1>
  <?php
  $connection = mysqli_connect("localhost","root","","bill");
  $id = "";
   $id = $_GET['id'];
   
  ?>
    
       
       <?php
       $amount = "";
       if(isset($_POST['create_amount'])){
         $unit =$_POST['unit'];
      
      if($unit== ""){
        $amount = $unit;
      }
       elseif($unit< 50){
      echo $amount = 5*  $unit;
       }
       else if($unit >= 50 && $unit < 70){
      $amount = $unit * 7;
    }
    else{
       $amount = $unit * 9;
    }
}
if(isset($_POST['submit'])){
 
  $unit =$_POST['unit'];
 
 if($unit== ""){
   $amount = $unit;
 }
  elseif($unit< 50){
 echo $amount = 5*  $unit;
  }
  else if($unit >= 50 && $unit < 70){
 $amount = $unit * 7;
}
else{
  $amount = $unit * 9;
}


 echo  $unit =$_POST['unit'];
 $name =$_POST['name'];
 echo $amount;
  $mysqli = "UPDATE user_table SET unit = '$unit', amount = '$amount' WHERE id = $id";
  if(mysqli_query($connection,$mysqli)){
    echo "<script> alert('bill create successfully  paying amount is $amount');
    window.location.href = 'usertab.php'; </script>";
   
  }
}
 
 $sql = "SELECT * FROM user_table where id = '$id' ";
       $result = mysqli_query($connection,$sql);
       ?><?php
       while ($d = mysqli_fetch_array($result)){
        $name =$d['name'];
        $kiloWatt = $d['kiloWatt'];
            ?>
         
         <form action="" method="POST">
  <table>
    <tr>
      <th>ID</th>
      <td><?php echo $d['id']; ?></td>
    </tr>
    <tr>
      <th>Name</th>
      <td><?= $d['name']; ?></td>
    </tr>
    <tr>
      <th>Address</th>
      <td><?= $d['address']; ?></td>
    </tr>
    <tr>
      <th>KiloWatt</th>
      <td><?= $d['kiloWatt']; ?></td>
    </tr>
    <tr>
      <th>Unit</th>
      <td><input type="number" name="unit" value="<?= $unit ?>"></td>
    </tr>
    <tr>
      <th>Amount</th>
      <td><?= $amount ?></td>
      <td><button type="submit" name="create_amount">Create Amount</button></td>
    </tr>
  </table>
  <br><br>
  <input type="submit" name="submit" value="Create Bill">
</form>
      <?php }
      
    
      ?>



    
    </div>
</body>
</html>

