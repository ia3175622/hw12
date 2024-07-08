<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

</head>
<body>

<!-- * Выводим на страницу информацию о глобальной переменной $_REQUEST в html формате
* Создаем ассоциативный массив в php, где будут храниться информация переданная в переменную $_REQUEST
* Кодируем ассоциативный массив $arUserInfo в формат json -->
<?php
echo "<pre>";
var_dump($_REQUEST);
echo "</pre>";

$arUserInfo = array("name"=>$_REQUEST['user_name'],"second_name"=>$_REQUEST['user_second_name'],"last_name"=>$_REQUEST['user_last_name'],
"city"=>$_REQUEST['user_city'],"street"=>$_REQUEST['user_street'],"house_number"=>$_REQUEST['user_house_number'],"room_number"=>$_REQUEST['user_room_number']);

$strUserInfo = json_encode($arUserInfo, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
?>

<form action="" method="POST">
		<strong>Ваше имя<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_name" id="user_name" value=""><br>

		<strong>Ваше отчество<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_second_name" id="user_second_name" value=""><br>

		<strong>Ваша фамилия<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_last_name" id="user_last_name" value=""><br>

		<strong>Ваш город<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_city" id="user_city" value=""><br>

		<strong>Ваша улица<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_street" id="user_street" value=""><br>

		<strong>Ваш дом<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_house_number" id="user_house_number" value=""><br>

		<strong>Ваша квартира<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_room_number" id="user_room_number" value=""><br>

		<input type="submit" name="submit" id="submit" value="Отправить">
	</form>

<!-- Выводим рещультат на страницу, использя короткий синтаксис -->
<div id="result">
	<?=$strUserInfo?>
</div>
</body>
</html>