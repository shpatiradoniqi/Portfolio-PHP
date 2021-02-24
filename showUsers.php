<?php
session_start();
if($_SESSION['role']==1){
    require './databaseconfig2.php';

    


$query=$pdo->query('SELECT * FROM user');
$user=$query->fetchAll();
?>

<div>
<a href="add_users.php">Add new users</a>
<table>
    <thead>
        <tr>
        <th>Name</th>
        <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($user as $perdoruesit): ?>
        <tr>
        <td><?php echo $perdoruesit['username']; ?></td>
        <td><?php echo $perdoruesit['useremail']; ?></td>
       
        </tr>
        <?php endforeach; ?>
    </tbody>                   
</table>

</div>

<?php } else{
  header("Location: ./error.php");
} ?>