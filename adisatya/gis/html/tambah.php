<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css">
    <title>Add Users</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="tambah.php" method="post" name="tambah" >
        <table width="16%" border = "0" position ="center">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name" placeholder="Name" required></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" placeholder="Email" required></td>
            </tr>
            <tr> 
                <td>Mobile</td>
                <td><input type="text" name="mobile" placeholder="No. Telepon" required></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Submit"></td>
            </tr>
        </table>
    </form>

    <?php
   // include database connection file
   include_once("config.php");
 
   // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        
        // Insert user data into table
        $result=  mysqli_query($mysqli, "INSERT INTO user_gis(name, mobile, email) VALUES ('$name', '$mobile', '$email')");
        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>