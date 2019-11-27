<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM user_mail ORDER BY id DESC");
?>

<html>
<head>    
<link href="style.css" rel="stylesheet" type="text/css">
<title>Webmail System</title>
</head>

<body>
<div id="container">
   <div class="header"><h1>SELAMAT ANDA MASUK KE DALAM WEBMAIL SYSTEM</h1></div>
   <div class="content">
    <a href="tambah.php">Add New User</a><br/><br/>

    <table width='50%' border=1>

    <tr>
        <th>Name</th> 
        <th>Mobile</th> 
        <th>Email</th> 
        <th>Update</th>
    </tr>

    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['mobile']."</td>";
        echo "<td>".$user_data['email']."</td>";     
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td>";
        echo "</tr>";        
    }
    ?>
    </table>  
     </div>
   <div class="footer">
        Copyright &copy;PT. Adisatya, 2019
   </div>
</div>
</body>
</html>