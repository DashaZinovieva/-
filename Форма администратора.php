<?php
$host='localhost';
$database='test1';
$userdb='root';
$password='';

 $link=mysqli_connect($host,$userdb,$password,$database) or die ("Ошибка" . mysqli_error($link));
	if(isset($_POST['Name'])&& isset($_POST['Email'])&& isset($_POST['Password'])){
	$Name=$_POST['Name'];
	$Email=$_POST['Email'];
	$Password=$_POST['Password'];
	
		if($Name && $Email && $Password){
		$query="insert into users(Name,Email,Password) values('$Name','$Email','$Password')";
		$result=mysqli_query($link,$query) or die ("Ошибка" . mysqli_error($link));
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
<h1 align="center" style="color: white" > Список студентов</h1>
  <table>
    <thead>
      <tr>
        <th>Код студента</th>
        <th>Фамилия</th>
        <th>Имя</th>
        <th>Отчество</th>
        <th>Преподователь</th>
		<th>Группа</th>
		  <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Попов</td>
        <td>Иван</td>
        <td>Михайлович</td>
        <td>А.М.Жуковская</td>
		<td>ИС1-11</td>
		<td><button id="img" class="remove"> 
<img src="13.png" alt="" width="21" height="21"> 
		</button></td>
      </tr>
      <tr>
        <td>2</td>
        <td>Сидоров</td>
        <td>Петр</td>
        <td>Иванович</td>
        <td>А.М.Жуковская</td>
		<td>ИС1-11</td>
		<td><button id="img" class="remove"> 
<img src="13.png" alt="" width="21" height="21"> 
		</button></td>
      </tr>
      <tr>
        <td>3</td>
        <td>Умнов</td>
        <td>Сергей</td>
        <td>Александрович</td>
        <td>М.В.Сорокина</td>
		 <td>ИС1-42</td>
		<td><button id="img" class="remove"> 
<img src="13.png" alt="" width="21" height="21"> 
		</button></td>
      </tr>
      <tr>
        <td>4</td>
        <td>Светлов</td>
        <td>Владислав</td>
        <td>Петрович</td>
        <td>М.В.Сорокина</td>
		<td>ИС1-42</td>
		<td><button id="img" class="remove"> 
<img src="13.png" alt="" width="21" height="21"> 
		</button></td>
      </tr>
      <tr>
        <td>5</td>
        <td>Целиков</td>
        <td>Евгений</td>
        <td>Владимирович</td>
        <td>М.В.Сорокина</td>
		<td>ИС1-42</td>
		<td><button id="img" class="remove"> 
<img src="13.png" alt="" width="21" height="21"> 
		</button></td>
      </tr>
    </tbody>
  </table>
</div>