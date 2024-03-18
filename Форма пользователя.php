<?php

$host='localhost';
$database='test1';
$userdb='root';
$password='';

 $link=mysqli_connect($host,$userdb,$password,$database) or die ("Ошибка" . mysqli_error($link));
	if(isset($_POST['Email'])&& isset($_POST['Password'])){
	$Email=$_POST['Email'];
	$Password=$_POST['Password'];
	
	$chzapr = mysqli_query($link, "SELECT Name from users where Email ='".$Email."' and Password ='".$Password."'");
    if (mysqli_num_rows($chzapr) > 0) {
        $zapros = mysqli_fetch_assoc($chzapr);

        $_SESSION['zapros'] = [
            "Name" => $zapros['Name']
        ];
		
		echo "Добрый день: ".$_SESSION['zapros']['Name'];

    } else {
		echo  "Не верный логин или пароль!";
    }
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Экзамен</title>
  <link rel="stylesheet" href="style1.css">
  <body>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<script>
$(document).ready(function(){
    $('body').on('click', '.remove', function(){
        if($('.remove').length > 0){
		var result = confirm("Вы уверены, что хотите удалить пользователя?");
if (result) {
            $(this).parents('tr').remove();
        }
		}
    });
}); <!-- удаление строки, вывод модального окна -->
</script>
<div class="container">
<h1 align="center" style="color: white" > Список сотрудников</h1>
  <table>
    <thead>
      <tr>
        <th>Код преподователя</th>
        <th>Фамилия</th>
        <th>Имя</th>
        <th>Отчество</th>
        <th>Дисциплина</th>
		<th>Роль</th>
		  <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Мухина</td>
        <td>Агата</td>
        <td>Васильевна</td>
        <td>Математика</td>
		<td>Преподователь</td>
		<td><button id="img" class="remove"> 
<img src="13.png" alt="" width="21" height="21"> 
		</button></td>
      </tr>
      <tr>
        <td>2</td>
      <td>Савельева</td>
      <td>Камила</td>
      <td>Дмитриевна</td>
      <td>ОБЖ</td>
      <td>Преподователь</td>
	  <td><button id="img" class="remove"> 
<img src="13.png" alt="" width="21" height="21"> 
		</button></td>
      </tr>
      <tr>
        <td>3</td>
       <td>Тихонова</td>
      <td>Юлия</td>
      <td>Кирилловна</td>
      <td>Русский язык</td>
      <td>Преподователь</td>
		<td><button id="img" class="remove"> 
<img src="13.png" alt="" width="21" height="21"> 
		</button></td>
      </tr>
      <tr>
        <td>4</td>
         <td>Романова</td>
      <td>Полина</td>
      <td>Макарова</td>
      <td>ОБЖ</td>
      <td>Преподователь</td>
		<td><button id="img" class="remove"> 
<img src="13.png" alt="" width="21" height="21"> 
		</button></td>
      </tr>
      <tr>
        <td>5</td>
        <td>Савельева</td>
      <td>Камила</td>
      <td>Дмитриевна</td>
      <td>ОБЖ</td>
      <td>Преподователь</td>
		<td><button id="img" class="remove"> 
<img src="13.png" alt="" width="21" height="21"> 
		</button></td>
      </tr>
	     <tr>
        <td>6</td>
        <td>Кузнецов</td>
      <td>Степан</td>
      <td>Арсентьевич</td>
      <td>Английский язык</td>
      <td>Преподователь</td>
		<td><button id="img" class="remove"> 
<img src="13.png" alt="" width="21" height="21"> 
		</button></td>
      </tr>
    </tbody>
  </table>
</div>