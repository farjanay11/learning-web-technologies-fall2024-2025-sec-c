<?php
    session_start();
    require_once("../model/user_model.php");
    $result = show_users();
?>
<html>
<head>
    <title>View Users</title>
</head>
<body>
        <h1 align="center">Users Details</h1>
        <h3 align="center">Search(Enter user name)<input type="text" id="search" onkeyup="search_user1()"></h3>
        <table border=1 cellspacing="0" align="center" width="50%" id="table">
            <tr align="center">
                <th>Employer Name</th>
                <th>Company Name</th>
                <th>Contact No.</th>
                <th>User Name</th>
                <th>Password</th>
                <th colspan="2">Action</th>
            </tr>

            <?php 
                 while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr align="center">                          
                <td><?php echo $row['ename']; ?></td>
                <td><?php echo $row['cname']; ?></td>
                <td><?php echo $row['number']; ?></td>
                <td><?php echo $row['uname']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td>
                    <a href="edit_user.php?uname=<?php echo $row['uname']?>"> EDIT </a> 
                </td>
                <td>
                <button onclick='delete_user(event, "<?php echo $row['uname']; ?>")'> DELETE </button>  
                    
                </td>
                <?php } ?>
            </tr>
                <tr align="center">
                <td colspan="7">
                    <a href="home.php"> Go Home </a> 
                </td>
                </tr>
        </table>

        <p id="display"></p>

    <script src="../asset/js/view_user.js"></script>

</body>
</html>