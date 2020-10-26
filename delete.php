<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$connect = mysqli_connect("127.0.0.1", "root", "", "shop");
					//удалить из таблицы контакты где название столбца
	$text_zaprosa = "DELETE FROM products WHERE id = '6' ";
	mysqli_query($connect, $text_zaprosa);

?>



</body>
</html>