<?php

include_once 'userMapper.php';
include_once 'simpleUserClass.php';
if (isset($_GET['username']) && isset($_GET['username'])) {
    $userId = $_GET['id'];
    $username = $_GET['username'];
    $userpassword = $_GET['password'];
    $simpleUser = new SimpleUser($username, "", 1, 1, $userpassword);
    $mapper = new UserMapper();
    $mapper->edit($simpleUser, $userId);
    header("Location:./website.php");
}
