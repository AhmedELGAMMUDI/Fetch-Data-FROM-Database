<?php
include_once('connect.php');
$query="select * from student";
$result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table align="center" border="1px" style="width:700px; line-height:30px;">
    <tr>
    <th colspan="4"><h2>studnet Record</h2></th>
    </tr>
    <t>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Country</th>
    </t>
    <?php
    while($rows=mysqli_fetch_assoc($result)){
         ?>   
         <tr>
            <td><?php echo $rows['ID']; ?></td>
            <td><?php echo $rows['Name']; ?></td>
            <td><?php echo $rows['Email']; ?></td>
            <td><?php echo $rows['Country']; ?></td>
         </tr> 
         <?php 
    }
        ?>
    
    </table>
</body>
</html>