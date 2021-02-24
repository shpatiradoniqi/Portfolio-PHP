<?php
include './components/header.php';
include_once './businessLogic/userMapper.php';
if (isset($_GET['id'])) {
    $userId = $_GET['id'];
    $mapper = new UserMapper();
    $user = $mapper->getUserByID($userId);
}
?>
<div class='container'>
    <h1>Modifiko perdoruesin</h1>
    <form class="mainForm" action="./businessLogic/editUser.php" method="get">
        <div class="login forms form-style">
            <input type="text" style="display:none;" value=<?php echo $userId; ?> name="id" />
            <label for="">Name:</label>
            <input type="text" name='username' class="input" placeholder="username..." value=<?php echo $user['username']; ?> />
            <label for="">password:</label>
            <input type="text" name='password' class="input" placeholder="password..." value=<?php echo $user['password']; ?> />
            <input id="submit" type="submit" name='login-btn' class="input submit" value="Edit" />
        </div>
    </form>
</div>

<?php
include './components/footer.php';
?>