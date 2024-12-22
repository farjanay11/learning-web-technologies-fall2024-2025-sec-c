<?php
session_start();
if($_SESSION['status'] == true){
$idd = $_REQUEST['id'];

    $conn = mysqli_connect('127.0.0.1', 'root', '', 'check');

    $sql = "select * from first_check where id = $idd";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
?>
    <html>
        <head>
        </head>
            <body>
                
                <table align="center" >
                    <tr align="center">
                        <td>
                            <h3>Hello, <?php echo $name. "!" ?></h3>
                            <a href="profile.php?id=<?php echo $idd ?>">Profile</a> <br>
                            <a href="password_change.php?id=<?php echo $idd ?>">Change Password</a> <br>
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