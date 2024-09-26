<?php

$conn = new mysqli("localhost","root","","bill");
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

$id = $_GET['id'];

$sql = "SELECT * FROM user_table WHERE id = $id";
$result = $conn->query($sql);

while($user =  mysqli_fetch_array($result) ){
      $ID = $user['id'] ;
     $unit = $user['unit'] ;
       $amount = $user['amount'] ;
}


$pay = $remain =  "";
if(isset($_POST['paybill'])){
    $pay = $_POST['pay'];
    if(!empty($pay)){
        if($pay>$amount){
            echo "<script> alert('paying amount is more than bill')</script>";
        }else{
      $remain = $amount - $pay;

    $update = "UPDATE user_table SET amount = '$remain' WHERE id = $id";
    if(mysqli_query($conn,$update)){
        echo "<script> alert('you bill paid successfully and remain balance is $remain');
        window.location.href = 'viewbill.php?id=$id'; </script>";
    }
    else{echo" update failed can't be succsessful";}
    }}
    else{
         $remain = $amount;
    }   

}
?>
<style>
    /* Global Styles */
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: 'Open Sans', sans-serif;
        background-color: #f7f7f7;
    }

    h1 {
        color: #333;
        text-align: center;
        margin-bottom: 20px;
        font-weight: bold;
        font-size: 24px;
    }

    /* Form Styles */
    form {
        max-width: 500px;
        margin: 40px auto;
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    table{
        color:white;
    }

    label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
        color: #666;
    }

    input[type="number"] {
        width: 100%;
        height: 40px;
        margin-bottom: 20px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="number"]:focus {
        border-color: #aaa;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    /* Button Styles */
    button[type="submit"] {
        background-color: #009688;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #00796b;
    }

    button[type="submit"]:active {
        background-color: #00796b;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    /* Additional Styles */
    .container {
        max-width: 800px;
        margin: 40px auto;
        padding: 20px;
    }

    .bill-details {
        background-image: url('blue.webp'); /* Add background image */
        background-size: cover;
        background-position: center;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 10px;
        color: white; /* Change text color to white */
    }

    .bill-details td {
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }

    .bill-details td:last-child {
        border-bottom: none;
    }
</style>

<body>
  <div class="container">
    <h1>Pay Bill</h1>
    <div class="bill-details">
      <table>
        <tr>
          <td>User ID:</td>
          <td><?php echo $ID?></td>
        </tr>
        <tr>
          <td>Units Consumed:</td>
          <td><?php echo $unit?></td>
        </tr>
        <tr>
          <td>Amount:</td>
          <td><?php echo $amount?></td>
        </tr>
        <tr>
          <td>Remaining Bill:</td>
          <td><?php echo $remain?></td>
        </tr>
      </table>
    </div>
    <form action="" method="POST">
      <label for="pay">Pay Now:</label>
      <input type="number" name="pay" value="<?php  echo $pay?>"/><br>
      <button type="submit" name="paybill">Pay Bill</button>
    </form>
     