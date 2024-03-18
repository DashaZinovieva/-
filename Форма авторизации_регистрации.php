<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Экзамен</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
	
      <header>Вход</header>
      <form action="Форма пользователя.php" method="POST">
        <input id="nam" name="Email" type="Email" placeholder="Email">
        <input id="nam" name="Password" type="password" placeholder="Пароль">
        <input id="but" type="submit" type="button" class="button" value="Войти">
      </form>
	  
  <script type="text/javascript"> 
var name=document.getElementById("nam");
var click=document.getElementById("but");
click.onclick=function()
   {
    if(!name.value){alert("Заполните все поля");}
    else {alert("all good");}
   }; 
    <!-- Проверка на пустое поле -->
</script>

      <div class="signup">
        <span class="signup">У вас еще нет аккаунта?
         <label for="check">Зарегистрироваться</label>
        </span>
      </div>
    </div>
    <div class="registration form">
      <header>Регистрация</header>
      <form action="Форма администратора.php" method="POST">
        <input id="nam" name="Name"  type="text" placeholder="Имя">
        <input id="nam" name="Email" type="Email" placeholder="Email">
        <input id="nam" name="Password" type="password" placeholder="Пароль">
        <input id="but" type="submit" type="button" class="button" value="Зарегистрироваться">
      </form>
      <div class="signup">
        <span class="signup">У вас уже есть аккаунт?
         <label for="check">Вход</label>
        </span>
      </div>
    </div>
  </div>
</body>
</html>