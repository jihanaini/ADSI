<?php
include "model.php";
$check = checkLogin();
if(!$check) header("location:login.php");
$user = getDataLogin();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
	</style>
	<script src="https://cdn.tailwindcss.com"></script>
	<script src="./aset/script/config.js"></script>
	<title>Customer Service</title>
</head>

<body>
	<div class="box-border border-2 w-96 font-poppins">
		<div class="flex flex-col bg-primary px-2 pb-12 rounded-b-lg">
			<div>
				<img src="aset/phone.png" className="p-2">
			</div>
			<div class="flex">
				<a href="home.php"><<img src="aset/ic_round-chevron-left.png"></a>
				<span class="px-20 font-bold text-lg">Customer Service</span>
			</div>
		</div>
		<div class="flex justify-center mb-5">
			<div class="flex h-44 w-72 -mt-5 bg-white justify-center rounded-lg">
				<img src="aset/customerService.png" alt="">
			</div>
		</div>
		<div class="font-bold text-center mb-2">
			<h2>Kami siap melayani anda!</h2>
		</div>
		<div>
			<a href="">
				<div class="flex justify-center mb-2">
					<div class="w-52 h-10 bg-primary rounded text-center font-bold px-4 py-2">
						<h1> METODE </h1>
					</div>
				</div>
			</a>
			<a href="">
				<div class="flex justify-center mb-2">
				<div class="flex py-2 border-2 border-black w-52 h-10 text-sm rounded text-center font-bold px-4 py-2 ">
					<img src="aset/telepon.png" alt="" class="w-6 h-6">
					<h1 class="ml-2">Panggilan Suara</h1>
				</div>
			</div>
			</a>
			<a href="">
				<div class="flex justify-center mb-2">
				<div class="flex py-2 border-2 border-black w-52 h-10 text-sm rounded text-center font-bold px-4 py-2 ">
					<img src="aset/email.png" alt="" class="w-6 h-6">
					<h1 class="ml-2">Email</h1>
				</div>
			</div>
			<a href="">
				<div class="flex justify-center mb-20">
				<div class="flex py-2 border-2 border-black w-52 h-10 text-sm rounded text-center font-bold px-4 py-2 ">
					<img src="aset/chat.png" alt="" class="w-6 h-6">
					<h1 class="ml-2">Live Chat</h1>
				</div>
		</div>
	</div>
	<div class="relative flex justify-between w-96 bg-primary py-2 px-6 bottom-0 sticky">
			<a href="home.php"><button><img src="./aset/home.png" class="w-10 opacity-50"></button></a>
			<a href="product.php"><button><img src="./aset/katalog-black.png" class="w-8"></button></a>
			<a href="riwayat.html"><button><img src="./aset/riwayat-black.png" class="w-6 opacity-50"></button></a>
			<a href="profil.html"><button><img src="./aset/profil-black.png" class="w-10 opacity-50"></button></a>
	</div>
</body>

</html>