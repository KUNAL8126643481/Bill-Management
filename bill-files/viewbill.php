<html>
    <head>
    <?php


$conn = new mysqli("localhost","root","","bill");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];

$sql = "SELECT * FROM user_table WHERE id = $id";
$result = $conn->query($sql);

while($user =  mysqli_fetch_array($result) ){
      $ID = $user['id'] ;
      $unit = $user['unit'] . "<br>";
    $amount = $user['amount'] . "<br>";

}

$conn->close();
?>

<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
  }

  h1 {
    text-align: center;
    color: #333;
  }

  form {
    width: 50%;
    margin: 40px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  label {
    display: block;
    margin-bottom: 10px;
  }

  td {
    padding: 10px;
  }

  button[type="submit"] {
    background-color: #4CAF50;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  button[type="submit"]:hover {
    background-color: #3e8e41;
  }
</style>
    </head>

<body>
  <h1>Generate Bill</h1>
  <form action="" method="POST">
    <label for="user_id">User ID:</label>
    <td><?php echo $ID ?></td><br><br>
    
    <label for="units">Units Consumed:</label>
    <td><?php echo $unit ?></td><br><br>
    
    <label for="amount">Amount:</label>
    <td><?php echo $amount ?></td><br><br>
    
    <button type="submit"><a href="paybill.php?id=<?php echo $ID ?>">pay Bill</a></button>
  </form>
</body>
</html>