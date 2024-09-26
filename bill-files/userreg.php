<html>
<head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: auto;
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
$name = $fatherNo = $mobileNo = $email = $address = $kiloWatt = $password = "";

if(isset($_POST["submit"])){
    $name = $_POST['name'];
    $fatherNo = $_POST['fatherName'];
     echo $mobileNo = $_POST['mobile'];
     $email = $_POST['email'];
    echo $address = $_POST['address'];
    $kiloWatt = $_POST['kilowatt'];
    $password = $_POST['password'];

    $connection = mysqli_connect("localhost","root","","bill");
    if (!$connection) {
        die("Connection failed: ". mysqli_connect_error());
    }

    $mysqli = "INSERT INTO user_table (name,fatherName,mobileNo,email,address,kiloWatt,password)
    VALUES ('$name','$fatherNo','$mobileNo','$email','$address','$kiloWatt','$password')";

    if (mysqli_query($connection, $mysqli)) {
        echo  "<script> alert('registration successful ');
        window.location.href = 'index.php'; </script>" ;
        
    } else {
        echo "Error: ". $mysqli. "<br>". mysqli_error($connection);
    }
}
?>
<body>
   <div class="container">
    
<div id="registrationSection" >
        <form id="registrationForm" action="" method="POST">
            <h2>User Registration</h2>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="<?php echo  $name?>" required>
            </div>
            <div class="form-group">
                <label for="fatherName">Father's Name</label>
                <input type="text" id="fatherName" name="fatherName" value="<?php echo $fatherNo ?>" required>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile Number</label>
                <input type="text" id="mobile" name="mobile" value="<?php echo $mobileNo ?>" required>
            </div>
            <div class="form-group">
                <label for="email">email</label>
                <input type="text" id="email" name="email" value="<?php echo $email ?>" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" value="<?php echo $address ?>" required>
            </div>
            <div class="form-group">
                <label for="kilowatt">Kilowatt</label>
                <input type="number" id="kilowatt" name="kilowatt" value="<?php echo $kiloWatt ?>" required>
            </div>
            <div class="form-group">
                <label >password</label>
                <input type="password" id="password" name="password" value="<?php echo $password ?>" required>
            </div>
            <div class="form-group">
                <button type="submit" class="user-btn" name="submit" value="submit">Register</button>
            </div>
        </form>
    </div>
    </div> 
</body>
</html>