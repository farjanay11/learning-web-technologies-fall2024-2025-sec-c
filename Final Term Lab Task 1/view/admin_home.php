<?php
session_start();
if($_SESSION['status'] == true){
$idd = $_REQUEST['id'];
foreach($_SESSION['users'] as $user){
    if ($idd == $user['id']){
        break;
    }
}
?>
    <html>
        <head>
        </head>
            <body>
                
                <table align="center">
                    <tr align="center">
                        <td>
                            <h3>Hello,  <?php echo $user['name']. "!" ?></h3>
                            
                            <a href="profile.php?id=<?php echo $idd ?>">Profile</a> <br>
                            <a href="pass_change.php">Change Password</a> <br>
                            <a href="view_users.php">View Users</a> <br>
                            <a href="logout.php">Logout</a> <br>
                        </td>
                    </tr>
                </table>    
            </body>
    </html>

<?php
}
else{
    header("location:login.html");
}
?>