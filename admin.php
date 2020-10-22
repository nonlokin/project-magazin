<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

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
	<!--инпуты-->
	<div class="col-4 mx-auto border-top pt-5">
		<h1 class="text-center">Добавить товар</h1>
		<form action="insert.php" method="GET">
			<input type="" name="title" class="form-control mt-5" placeholder="Название">
			<input type="" name="desc" class="form-control mt-2" placeholder="Описание">
			<input type="" name="img" class="form-control mt-2" placeholder="Картинка">
			<input type="" name="price" class="form-control mt-2" placeholder="Цена">
			<button class="btn bg-success mt-2 text-white" style="margin-left:230px;">Добавить товар</button>
		</form>
	</div>
</body>
</html>