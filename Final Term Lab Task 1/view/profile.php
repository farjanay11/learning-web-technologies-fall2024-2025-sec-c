<?php
session_start();
require_once('../model/usermodel.php');
if($_SESSION['status'] == true){
$idd = $_REQUEST['id'];
// foreach($_SESSION['users'] as $user){
//     if ($idd == $user['id']){
//         break;
//     }
// }
    $user_info = user_info($idd);
    $name = $user_info['name'];
    $id = $user_info['id'];
    $email = $user_info['email'];
?>
    <html>
        <head>
            <title>Home Page</title>
        </head>
            <body>
                
                <table align="center" border="1" cellspacing="0" width="300px" height="300px">
                    
                
                <tr align="center">
                    <td colspan="2">Profile</td>
                </tr>
                <tr align="center">
                    <td>Id</td>
                    <td><?php echo $id  ?></td>
                </tr>
                <tr align="center">
                    <td>Name</td>
                    <td><?php echo $name ?></td>
                </tr>
                <tr align="center">
                    <td>Email</td>
                    <td><?php echo $email ?></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <a href="user_home.php?id=<?php echo $id?>">Go Home</a>
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