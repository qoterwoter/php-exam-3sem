<div>
	<h3>Вход в панель управления</h3>
	<form action="?controller=user&action=auth" method="POST">
	<p>
		<span>Логин:</span>
		<input name="login" type="text" required>
	</p>
	<p>
		<span>Пароль:</span>
		<input name="pass" type="password" required>
	</p>
	<? if($_GET['error'])
		print('Не верный логин или пароль.') ?>
	<p><input type="submit" value="Войти"></p>
	</form>
</div>