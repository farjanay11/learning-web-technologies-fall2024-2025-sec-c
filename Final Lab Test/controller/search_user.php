<?php 
require_once("../model/user_model.php");
$search=$_REQUEST['search'];
$result1 = show_users();

echo "<tr align='center'>
                <th>Employer Name</th>
                <th>Company Name</th>
                <th>Number</th>
                <th>User Name</th>
                <th>Password</th>
                <th colspan='2'>Action</th>
            </tr>";

while ($row = mysqli_fetch_assoc($result1)) {
        if (strpos($row['uname'], $search) !== false) {
            echo "
                <tr align='center'>                          
                <td>{$row['ename']}</td>
                <td>{$row['cname']}</td>
                <td>{$row['number']}</td>
                <td>{$row['uname']}</td>
                <td> {$row['password']}</td>
                <td>
                    <a href='../view/edit_user.php?name={$row['uname']}'> Update </a> 
                </td>
                <td>
                <a href='../view/delete_user.php?name={$row['uname']}'> Delete </a>  
                </td>
                <?php } ?>
            </tr>
            ";
        }
    }
   


?>

<html>
    <body>
    <a href="home.php">Back</a>
    </body>
</html>