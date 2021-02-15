<h3>Вход</h3>
<?php
    if(!empty($user)){
        $_SESSION['login'] = $user['login'];
        $_SESSION['name'] = $user['name'];
        header('Location: /');
        exit;
    }
?>
<form action="/account/login" method="post">
    <div class="mb-3">
        <label for="login" class="form-label">Логин</label>
        <input type="text" class="form-control" id="login" name="login" value="<?php echo isset($login) ? $login : "" ?>" aria-describedby="loginHelp">
        <div id="loginHelp" class="form-text">Логин для входа</div>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Пароль</label>
        <input type="password" class="form-control" id="password" name="password" value="<?php echo isset($password) ? $password : "" ?>" aria-describedby="passwordHelp">
        <div id="passwordHelp" class="form-text">Пароль для входа</div>
    </div>
	<button type="submit" class="btn btn-primary" name="enter">Вход</button>
</form>