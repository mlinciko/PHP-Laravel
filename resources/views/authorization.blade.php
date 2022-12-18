<?php
  // include("controllers/utils/Utils.controller.php");
  // $utils = new Utils();

  // //проверяем авторизован ил пользователь
  // $utils->checkSession();
  // //для динамического обновления названия страницы
  // $title = $utils->definePageTitle();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/null-style.css">
  <link rel="stylesheet" href="../css/form-style.css">
  <link rel="stylesheet" href="../css/main.css">
  <title><?php //echo $title; ?></title>
</head>

<body style="background: url('http://localhost:8081/images/main.jpg') 0 0 no-repeat; background-size: cover;">
<div style="width:150px; text-align:center; position: absolute; margin: 20px 0;">
    <a style="color:#fff;" href="/">На главную страницу</a>
  </div>
<div class="container">
<form action="/authorization/controllers/signin/signin.php" method="post">
  <div class="title">Авторизация</div>
  <label for="login">Логин</label>
  <input id="login" type="text" name="login" placeholder="Введите логин">
  <label for="password">Пароль</label>
  <input id="password" type="password" name="password" placeholder="Введите пароль">
  <div class="alert">
    <?php
    if (!empty($_SESSION['alert'])){
       echo $_SESSION['alert'];
      unset($_SESSION['alert']);
    }
    ?>
  </div>
  <input type="submit" id="submit" value="Войти">
  <div class="reg">Ещё нет аккаунта? <a href="/authorization/index.php?action=reg">Зарегистрироваться</a></div>
</form>
  </div>
  <!-- скрипт для проверки валидности формы регистрации -->
  <script src="assets/js/validate-reg.js"></script>
</body>

</html>
