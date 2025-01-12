<?php
require_once('../model/user_model.php');
    $uname = $_REQUEST['uname'];
    $user_info = user_info($uname);
    $ename = $user_info ['ename'];
    $cname = $user_info['cname'];
    $number = $user_info['number'];
    $password = $user_info['password'];
?>

<html>
    <head>
        <title>Update User Details</title>
    </head>

    <body>

    <table align="center" border="1" cellspacing="0">
    <form action="../controller/edit_user_check.php" method="POST">
        <tr align="center">
            <td align="center" colspan="2"><b> Edit User's Details</b></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input type="text" readonly value="<?php echo $uname ?>" name="old_username" id="old_name"></td>
        </tr>
        <tr>
            <td>New Username</td>
            <td><input type="text"  name="new_username" id="new_username1"></td>
        </tr>
        <tr>
        <tr>
            <td>Password</td>
            <td><input type="text" disabled value="<?php echo $password ?>"></td>
        </tr>
        <tr>
            <td>New Password</td>
            <td><input type="text"  name="new_password" id="new_password1"></td>
        </tr>
        <tr>
            <td rowspan="2" align="center"><input type="submit" value="Submit" name="submit"> &nbsp; &nbsp; &nbsp;<input type="reset" value="Reset" name="reset"></td>
        </tr>
        </form>
    </table>
    <p id="display"></p>
    <script src="../asset/js/edit_user.js"></script>
        
       
    </body>
</html>