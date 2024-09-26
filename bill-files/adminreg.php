<head>
    <style>
        body {
            background-image: url(https://i0.wp.com/www.studentprojects.live/wp-content/uploads/2021/07/electricitybill.png?fit=1920%2C1080&ssl=1);
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #666;
        }

        input[type="text"], input[type="password"], input[type="number"], input[type="email"] {
            width: calc(100% - 20px);
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 4px;
            color: #fff;
            transition: background-color 0.3s ease;
        }

        .admin-btn {
            background-color: #28bd2d; 
        }

        .user-btn {
            background-color: #007bff; 
        }

        .register-btn {
            background-color: #f39c12; 
        }

        button:hover {
            opacity: 0.8;
        }
    </style>
</head>

<?php
$adminRegName =  $adminRegEmail = $adminRegMobile= $adminRegAddress = $adminRegpassword = "";
if(isset($_POST['adminregister'])){
  $adminRegName = $_POST['adminRegName'];
  $adminRegMobile = $_POST['adminRegMobile'];
 $adminRegEmail = $_POST['adminRegEmail'];
 $adminRegAddress = $_POST['adminRegAddress'];
 $adminRegpassword = $_POST['adminRegpassword'];
}

$connection = mysqli_connect("localhost","root","","bill");
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['adminregister'])){
$mysqli = "INSERT INTO admin_table (id,name,mobile,email,address,password)
VALUES ('','$adminRegName','$adminRegMobile','$adminRegEmail','$adminRegAddress','$adminRegpassword')";
if (mysqli_query($connection, $mysqli)) {
     echo  "<script> alert('registration successful ');
        window.location.href = 'index.php'; </script>" ;
    } else {
        echo "Error: " . $mysqli . "<br>" . mysqli_error($connection);
    }}
?>
<html>
<body>
    <div class="container">
<div id="adminRegistrationSection" >
        <form id="adminRegistrationForm" method="POST" action="">
            <h2>Admin Registration</h2>
            <div class="form-group">
                <label for="adminRegName">Name</label>
                <input type="text" id="adminRegName" name="adminRegName" value="<?php  echo $adminRegName ?>" required>
            </div>
            <div class="form-group">
                <label for="adminRegMobile">Mobile Number</label>
                <input type="text" id="adminRegMobile" name="adminRegMobile" value="<?php echo $adminRegMobile ?>"required>
            </div>
            <div class="form-group">
                <label for="adminRegEmail">Email</label>
                <input type="email" id="adminRegEmail" name="adminRegEmail"  value="<?php echo $adminRegEmail ?>" required>
            </div>
            <div class="form-group">
                <label for="adminRegAddress">Address</label>
                <input type="text" id="adminRegAddress" name="adminRegAddress" value="<?php echo  $adminRegAddress?>"required >
            </div>
            <div class="form-group">
                <label for="adminRegpassword">password</label>
                <input type="password" id="adminRegpassword" name="adminRegpassword"  value="<?php echo $adminRegpassword ?>" required>
            </div>
            <div class="form-group">
                <button type="submit" class="admin-btn" name="adminregister" value="adminregister">Register</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>