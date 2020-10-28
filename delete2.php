<?php
	$connect = mysqli_connect("127.0.0.1", "root", "", "shop");
					//удалить из таблицы контакты где название столбца
	$text_zaprosa = "DELETE FROM products WHERE id = '".$_GET["delete"]."' ";
	mysqli_query($connect, $text_zaprosa);
	header("Location: index.php");

?>
