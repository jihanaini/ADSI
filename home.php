<?php
include "model.php";
$check = checkLogin();
if (!$check) {
    header("location:login.php");}
$products = getData("produk");
$user = getDataWhere("user", "id_user", 1);
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
    <title>Home</title>
</head>
<body>
	<div class="box-border border-2 w-96 font-poppins">
		<div class="bg-primary px-2 pb-16 rounded-b-lg">
			<img src="aset/phone.png" className="p-0">
				<div class="flex justify-center h-24">
					<img src="aset/logo.png" className="p-1" class="h-32 w-72">
				</div>
		</div>
		<a href="">
			<div class="flex justify-center -mt-5">
				<img src="aset/saldo.png" alt="" class="justify-center w-82 h-20 mx-2">
				<img src="aset/qr_code.png" alt="" class="justify-center w-20 h-20 mx-2">
			</div>
		</a>
				<br>
		<div class="w-60 h-5 text-4xl font-bold mx-2">
			<h1>Katalog</h1>
		</div>
		<a href="produk.html">
			<div class="w-60 h-5 text-sm font-bold ml-32 mr-2">
				<a href="product.php"><h1 class="float-right">Lihat selengkapnya</h1></a>
			</div>
		</a>
		<div class="grid grid-cols-2 gap-4 mt-2 p-6">
			<?php
			foreach ($products as $p) {
			?>
				<div class="flex flex-col shadow-lg border-2 border-gray-100 rounded-md">
					<a href="beliProduk.php?id_produk=<?=$p['id_produk']?>">
						<div class="flex justify-center">
							<img src="./aset/<?=$p['gambar_produk']?>" class="w-36 h-28 object-cover">
						</div>
						<div class="flex px-3 mt-2">
							<h1 class="text-sm font-bold"><?=$p['nama_produk']?></h1>
						</div>
						<div class="flex px-3 mt-2 mb-3 justify-between">
							<p class="text-2xs text-gray-400 font-medium">Rp<?=number_format($p['harga_produk'])?></p>
							<p class="text-2xs text-gray-500 font-medium">Stok <?=$p['stok_produk']?></p>
						</div>
					</a>
				</div>
			<?php
			}
			?>

		</div>

				<a href="faq.php?id_user=<?=$u['id_user']?>">
					<div class="mb-6 w-60 h-12 text-2xl font-bold mx-2">
						<h1>FAQ</h1>
					</div>
				</a>
				<a href="bookingService.php?id_user=<?=$u['id_user']?>">
					<div class="mb-6 w-60 h-12 text-2xl font-bold mx-2">
						<h1>Booking Service</h1>
					</div>
				</a>
				<a href="customerService.php?id_user=<?=$u['id_user']?>">
					<div class="pt-4 mb-6 w-60 h-12 text-2xl font-bold mx-2">
						<h1>Customer Service</h1>
					</div>
				</a>

			<div class="relative flex justify-between bg-primary py-2 px-6 bottom-0 sticky">
				<a href="home.php"><button><img src="./aset/home.png" class="w-10 opacity-50"></button></a>
				<a href="product.php"><button><img src="./aset/katalog-black.png" class="w-8"></button></a>
				<a href="riwayat.php"><button><img src="./aset/riwayat-black.png" class="w-6 opacity-50"></button></a>
				<a href="profil.php"><button><img src="./aset/profil-black.png" class="w-10 opacity-50"></button></a>
			</div>
		</div>
	</div>
</body>
