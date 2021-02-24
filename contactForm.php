<?php 

if(isset($_POST['submit'])){
    $name=$_POST['user_name'];
    $subject=$_POST['subject'];
    $addresa=$_POST['user_Adsress'];
    $telefoni=$_POST['user_number'];
    $mailFrom=$_POST['user_eamil'];
    $message=$_POST['mesazhi'];

    $mailTo="shpatiradoniqi@gmail.com";
    $headers="From".$mailFrom;
    $txt="You have recived an e-mail from".$name."\n\n".$message;

mail($mailTo,$subject,$txt,$headers);
header("Location:./contacts.php?mailsend");



}






?>