<?php


session_start();
if($_SESSION['role']==1){
    require './databaseconfig2.php';
?>




<?php
if(isset($_POST['paraqes'])){
  $name=test_input($_POST['name']);
  $email=test_input($_POST['email']);
  $password=test_input($_POST['password']);

  $query = $pdo->prepare('SELECT * from user WHERE useremail = :email');

  $query->execute(array('email' => htmlspecialchars($_POST['email'] )));
  $numeroEmails=$query->rowCount();
  echo $numeroEmails;
}
function test_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

}
  if($numeroEmails == 0){
  $sql='INSERT INTO user (username,useremail,password) VALUES (:name,:email,:password)';
  $query=$pdo->prepare($sql);
  $query->bindParam('name',$name);
  $query->bindParam('email',$email);
  $query->bindParam('password',$password);
  $query->execute();
}else{
  echo "Emaili qe keni perdorur ekziston ne DB";

}





?>
<div>
<form action="add_users.php" method="post">
  <h2>Add Users</h2>
Name:
<input type="text" name="name" placeholder="Enter your name"/><br>
Email:
<input type="text" name="email" placeholder="Enter your email"/><br>
Password:
<input type="password" name="password"/><br>
<input type="submit" name="paraqes" value="Submit">

</form>
</div>
<?php } else{
  header("Location: ./error.php");
} ?>