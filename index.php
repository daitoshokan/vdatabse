<?php
$host = "127.0.0.1";
$user = "daitoshokan";
$pass = "";                         
$db = "db";                         
$port = 3306; 

$connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
$query = "SELECT * from users where full_name like '%john%'";
$result = mysqli_query($connection, $query);

if($result->num_rows > 0): ?>
<table>
    <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>City</th>
    <tr>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['full_name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['city']; ?></td>
    </tr>
    <?php endwhile; ?>
</table>
<?php endif;


?>
