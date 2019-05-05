<!DOCTYPE html>
<html>
<head>
    <title>Блочная вёрстка</title>
<link href="{{ URL::asset('css/welcome.css') }}" rel="stylesheet">
</head>
<body>
<div id="container">
	<div id="header">
	<h2>header (шапка сайта)</h2>
	</div>
		 
	<div id="navigation">
	<h2>Блок навигации</h2>
	</div>
		 
	<div id="sidebar">
	<h2>Левая панель</h2>
	</div>
		 
	<div id="content">
	<h2>Основной контент страницы</h2>
        <button type = "button" name = "button1" style = "width: 80px; height:50px;">
			<b>Кнопка 1</b>
		</button><br><br>
		<button type = "button" name = "button3" style = "width: 80px; height:50px;">
			<i>Кнопка 3</i>
		</button><br><br>

<?php
if (@$_REQUEST['submit']) echo "Кнопка нажата!"
?>
<form action="<?=$_SERVER['SCRIPT_NAME']?>">
<select name="Item[]" size=5 multiple>
<option>Чай
<option>Кофе
<option>Молоко
<option>Ветчина
<option>Сыр
</select>
<input type="submit" name="submit" value="Go!">
</form>
	</div>
		 
	<div id="clear">
		 
	</div>
							   
	<div id="footer">
	<h2>footer (низ сайта)</h2>
	</div>
</div>
</body>
</html>
