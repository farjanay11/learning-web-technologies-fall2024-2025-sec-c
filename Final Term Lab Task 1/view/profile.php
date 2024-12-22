<?php
session_start();
require_once('../model/usermodel.php');
if($_SESSION['status'] == true){
$idd = $_REQUEST['id'];

    $user_info = user_info($idd);
    $name = $user_info['name'];
    $id = $user_info['id'];
    $email = $user_info['email'];
?>
    <html>
        <head>
        </head>
            <body>
                
                <table align="center" >
                    
                
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
                        <a href="user_homepage.php?id=<?php echo $id?>">Go home</a>
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