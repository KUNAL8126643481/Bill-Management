<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill Management</title>
    <link rel="stylesheet" href="styles.css">
    <style>
       
        body {
            
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
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
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
            background-color: #4CAF50; 
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

      
        #userProfileSection {
            display: none;
            padding: 20px;
            background-color: #f5f5f5;
            border-radius: 8px;
            text-align: center;
        }

        #userProfileSection img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            margin-bottom: 20px;
        }

        #userProfileSection h2 {
            margin-bottom: 10px;
        }

       
    </style>
</head>
<body>
<div class="container">
    <h1>Bill Management System</h1>
    <div id="loginSection">
        <form id="loginForm">
            <h2>Login</h2>
            <div class="form-group">
                <button type="button" class="admin-btn"><a href="admin-log.php">Login as Admin</a></button>
                <button type="button" class="user-btn">Login as User</button>
            </div>
        </form>
    </div>

   

    <div id="userWelcomeSection" style="display:none;">
        <h2>User Login</h2>
        <form id="userLoginForm"  action="login_process3.php" method="POST">
            <div class="form-group">
                <label >email</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label >Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit" class="user-btn" name="submit">Login</button>
            </div>
            <div class="form-group">
                <button type="button" class="register-btn user-register-btn" ><a href="userreg.php">Register</a></button>
            </div>
        </form>
    </div>

   

    

    
</div>

<script>
    const loginSection = document.getElementById('loginSection');
    const userWelcomeSection = document.getElementById('userWelcomeSection');
    

    document.querySelector('.user-btn').addEventListener('click', () => {
        loginSection.style.display = 'none';
        userWelcomeSection.style.display = 'block';
    });

  
</script>
</body>
</html>

