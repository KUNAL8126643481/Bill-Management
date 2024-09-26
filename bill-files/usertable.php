<html>
    <head>
        <style>
            h1{
                text-align: center;
            }
            table,td{
                border:1px solid black;
                
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
                <td>password</td>
            </tr>
<?php
         while($r = mysqli_fetch_array($result)){
         ?>
        
            <tr>
                <td><?php echo  $r['id'] ?></td><br>
                <td><?php echo  $r['name'] ?></td><br>
                <td><?php echo  $r['fatherName'] ?></td><br>
                <td><?php echo  $r['mobileNo'] ?></td><br>
                <td><?php echo  $r['address'] ?></td><br>
                <td><?php echo  $r['kiloWatt'] ?></td><br>
                <td><?php echo  $r['password'] ?></td><br>
               
            </tr>
            <?php  
         }?>
         </table>
         
        
    </body>
</html>