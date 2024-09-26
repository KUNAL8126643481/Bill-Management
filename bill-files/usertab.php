<html>
    <head>
        <style>
            h1{
                text-align: center;
            }
            table,td{
                border:1px solid black;
            }
            body {
                background-image: url('background_image.jpg'); /* replace with your image URL */
                background-size: cover;
                background-repeat: no-repeat;
                font-family: Arial, sans-serif;
               
            }
            
            td {
                padding: 10px;
                text-align: center;
            }
            button a {
  text-decoration: none;
}
            button {
                background-color: #4CAF50;
                color: #ffffff;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }
            button:hover {
                background-color: #3e8e41;
            }
        </style>
    </head>
    <body>
         <h1>userdata table</h1> 
         <?php
         $connection = mysqli_connect("localhost","root","","bill");
         $mysql = "SELECT * FROM user_table";
         $result = mysqli_query($connection,$mysql);?>
         <table style="width:100%">
            <tr>
                <td>id</td>
                <td>name</td>
                <td>fatherName</td>
                <td>mobile</td>
                <td>address</td>
                <td>kiloWatt</td>
                <td>Create Bill</td>
            </tr>
<?php
         while($r = mysqli_fetch_array($result)){
        ?>
        
            <tr>
                <td><?php echo  $r['id']?></td>
                <td><?php echo  $r['name']?></td>
                <td><?php echo  $r['fatherName']?></td>
                <td><?php echo  $r['mobileNo']?></td>
                <td><?php echo  $r['address']?></td>
                <td><?php echo  $r['kiloWatt']?></td>
                <td><button ><a href="createbill.php?id=<?php echo  $r['id']?>">  create bill</a></button></td> 
            </tr>
            <?php  
         }?>
         </table>
         
        
    </body>
</html>