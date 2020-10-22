<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<?php
		$connect = mysqli_connect("127.0.0.1", "root", "", "shop");
		$text_zaprosa = "SELECT * FROM products";
		// text_query выбрать все из таблицы twits
		// вставить в таблицу в колонках автор, твит, имг и тд
		$zapros = mysqli_query($connect, $text_zaprosa);
		$stroka1 = $zapros->fetch_assoc();
		$stroka2 = $zapros->fetch_assoc();
		$stroka3 = $zapros->fetch_assoc();
		$stroka4 = $zapros->fetch_assoc();
		$stroka5 = $zapros->fetch_assoc();
		$stroka6 = $zapros->fetch_assoc();		
	?>
	<!--header-->
	<div class="col-12 row" style="height:100px;">
		<!--лого-->
		<div class="" style="height:100px; width:100px; margin-left:350px;">
			<img src="img/logo.png" class="rounded-circle w-100">
		</div>




		<!--ссылки-->
		<div class="" style="height:100px;padding-top:35px; margin-left:100px;font-size:18px;">
			<a href="index.php" class="text-dark font-weight-bold">ИНТЕРНЕТ МАГАЗИН</a>
			<a href="" class="text-dark ml-5">КАТАЛОГ</a>
			<a href="" class="text-dark ml-5">О МАГАЗИНЕ</a>
			<a href="" class="text-dark ml-5">НАШИ МАГАЗИНЫ</a>
			<a href="admin.php" class="text-dark ml-5 font-weight-bold">АДМИН ПАНЕЛЬ</a>
		</div>
		<!--иконки-->
		<div style="height:30px;width:30px; margin-top:30px;" class="ml-5">
			<img src="img/search.png" class="w-100">
		</div>
		<div style="height:30px;width:30px; margin-top:30px;" class="ml-2 ">
			<img src="img/korzina.png" class="w-100">
		</div>		
	</div>




	<!--main-->
	<div class=" col-8 mx-auto  mt-5 border-top" style="">
		<p style="font-size:25px;" class="text-center mt-5">Интернет магазин</p>

		<div class="col-3 mx-auto">
			<p style="font-size:25px;" class="text-center border-top mt-2 border-dark">Имбовые вещи</p>
		</div>


		<!--ТОВАРЫ-->
		<!--первая строчка-->

		<div class="row">

			<!--первый товар-->
			<div class=" border ml-4" style="width:400px;">
				<?php
					echo "<img src='".$stroka1["img"]."' class='w-100'>";
					echo "<p style='font-size:25px;' class='text-center'>".$stroka1["title"]."</p>";
					echo "<p style='font-size:15px;' class='text-center'>".$stroka1["description"]."</p>";
					echo "<p class='font-weight-bold text-center' style='font-size:25px;'>".$stroka1["price"]."</p>"
				?>
			</div>
			<!--второй товар-->
			<div class=" border ml-3" style=" width:400px;">
				<?php
					echo "<img src='".$stroka2["img"]."' class='w-100'>";
					echo "<p style='font-size:25px;' class='text-center'>".$stroka2["title"]."</p>";
					echo "<p style='font-size:15px;' class='text-center'>".$stroka2["description"]."</p>";
					echo "<p class='font-weight-bold text-center' style='font-size:25px;'>".$stroka2["price"]."</p>"
				?>				
			</div>
			<!--третий товар-->
			<div class=" border ml-3" style=" width:400px;">
				<?php
					echo "<img src='".$stroka3["img"]."' class='w-100'>";
					echo "<p style='font-size:25px;' class='text-center'>".$stroka3["title"]."</p>";
					echo "<p style='font-size:15px;' class='text-center'>".$stroka3["description"]."</p>";
					echo "<p class='font-weight-bold text-center' style='font-size:25px;'>".$stroka3["price"]."</p>"
				?>				
			</div>
		</div>








		<!--вторая строчка-->

		<div class="row mt-5">

			<!--первый товар-->
			<div class=" border ml-4" style="width:400px;">
				<?php
					echo "<img src='".$stroka4["img"]."' class='w-100'>";
					echo "<p style='font-size:25px;' class='text-center'>".$stroka4["title"]."</p>";
					echo "<p style='font-size:15px;' class='text-center'>".$stroka4["description"]."</p>";
					echo "<p class='font-weight-bold text-center' style='font-size:25px;'>".$stroka4["price"]."</p>"
				?>
			</div>
			<!--второй товар-->
			<div class=" border ml-3" style=" width:400px;">
				<?php
					echo "<img src='".$stroka5["img"]."' class='w-100'>";
					echo "<p style='font-size:25px;' class='text-center'>".$stroka5["title"]."</p>";
					echo "<p style='font-size:15px;' class='text-center'>".$stroka5["description"]."</p>";
					echo "<p class='font-weight-bold text-center' style='font-size:25px;'>".$stroka5["price"]."</p>"
				?>				
			</div>
			<!--третий товар-->
			<div class=" border ml-3" style=" width:400px;">
				<?php
					echo "<img src='".$stroka6["img"]."' class='w-100'>";
					echo "<p style='font-size:25px;' class='text-center'>".$stroka6["title"]."</p>";
					echo "<p style='font-size:15px;' class='text-center'>".$stroka6["description"]."</p>";
					echo "<p class='font-weight-bold text-center' style='font-size:25px;'>".$stroka6["price"]."</p>"
				?>				
			</div>
		</div>		
		
	</div>
</body>
</html>