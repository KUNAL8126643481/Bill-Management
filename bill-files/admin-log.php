<html>
<head>
    <style>
        .container {
    width: 300px;
    margin: 0 auto;
    margin-top: 100px;
    padding: 30px;
    border: 2px solid #ccc;
    border-radius: 5px;
}
.signin ,h2{
    display: inline;
  }
.signin{
    margin-top: -5px;
     padding:5px;
    float: right;
     font-weight: bold;
    font-size: large;
    font-family:monospace;
    background-color: antiquewhite;
    border:1px solid #0056b3;
    border-radius: 10px;
}
.signin:hover{
    background-color: deepskyblue;
}
.signin a{
    text-decoration: none;
}
.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="password"] {
    width: 280px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    width: 300px;
    padding: 10px;
    
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}
table, th,td{
  border:  2px solid yellow;
}

    </style>
    <title>Login Logout Page</title>
    
</head>

 
<body>
    <div class="container">
       <h2>Login</h2>
       <p class="signin"><a href="adminreg.php">Register</a></p><br><br><br>
        <form action="login_process2.php" method="POST">
            <div class="form-group">
                 <label for="email">email:</label>
                <input type="text" id="email" name="email" >

            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" >
            </div>
            <button type="submit" name="submit">Login</button>
        </form>
    </div>
</body>
</html>


 
