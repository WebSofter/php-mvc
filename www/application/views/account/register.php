<h3>Регистрация</h3>
<form id="account-form"  action="/account/register" method="POST">
	<div class="mb-3">
        <label for="name" class="form-label">Имя</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo $name ?>" aria-describedby="nameHelp">
        <div id="nameHelp" class="form-text">Имя</div>
    </div>
    <div class="mb-3">
        <label for="login" class="form-label">Логин</label>
        <input type="text" class="form-control" id="login" name="login" value="<?php echo $login ?>" aria-describedby="loginHelp">
        <div id="loginHelp" class="form-text">Логин для входа</div>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Пароль</label>
        <input type="password" class="form-control" id="password" name="password" value="<?php echo $password ?>" aria-describedby="passwordHelp">
        <div id="passwordHelp" class="form-text">Пароль для входа</div>
    </div>
    <div class="mb-3">
        <label for="passwordRet" class="form-label">Повтор пароля</label>
        <input type="password" class="form-control" id="passwordRet" name="passwordRet" value="<?php echo $passwordRet ?>" aria-describedby="passwordRetHelp">
        <div id="passwordRetHelp" class="form-text">Повтор пароля для входа</div>
    </div>
	<input type="submit" onclick="form_submit()"  class="btn btn-primary" name="register" value="Регистрация"/>
</form>

<script type="text/javascript">
  function form_submit() {
      setTimeout(() => {
          //$("#register-form").trigger('reset');
      }, 500);
    //
   }    
</script>