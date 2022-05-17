<?php
include "model.php";
$check = checkLogin();
if(!$check) header("location:login.php");
$f = getData($tabel = "faq");
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
	<title>FAQ</title>
</head>
<body>
	<div class="box-border border-2 w-96 font-poppins">
		<div class="flex flex-col bg-primary p-2 rounded-b-lg">
            <div>
                <img src="aset/phone.png" className="p-2">
            </div>
			<div class="mx-35 float-right">
				<br>
				<a href=""> <img src="aset/logo.png" alt="" id="hamb-nav">
				</a>
				<br>
			</div>
			<div class="font-bold text-4xl text-center">
				<h1> Frequently Asked Question </h1>
				<br>
			</div>
        </div>
		<div class="flex -mt-8 justify-center">
            <input type="text" class="px-4 py-3 w-72 shadow-md bg-white rounded-full"
                placeholder="Cari Berdasarkan Keyword">
        </div>
		<br>
	<div class="container">
		<div class="contents">
			</div>
			<div class="">
				<div class="flex">
					<button class="text-sm h-30 rounded-full bg-primary border-solid border-black border-2 px-4 font-bold ml-4 mr-2">Sparepart</button>
					<button class="text-sm h-30 rounded-full bg-primary border-solid border-black border-2 px-4 font-bold mx-2">Transaksi</button>
					<button class="text-sm h-30 rounded-full bg-primary border-solid border-black border-2 px-4 font-bold mx-2">Lokasi</button>
				</div>
			</div>
			<br>
			<div class="ml-10">
				<details open>
					<summary class="w-380 text-md font-bold pl-3 mb-2 text-left relative cursor-pointer" ><?php $f['question']?></summary>
					<div class="faq_content">
						<p class="pl-3 pr-2"><?php $f['answer']?></p>
					</div>
				</details>
				<details open>
					<summary class="w-380 text-md font-bold pl-3 pt-10 mb-2 text-left relative cursor-pointer">Bagaimana cara membooking service?</summary>
					<div class="faq_content">
						<p class="pl-3 pr-2">Pilih menu booking service.</p>
					</div>
				</details>
				<details open>
					<summary class="w-380 text-md font-bold pl-3 pt-10 mb-2 text-left relative cursor-pointer">Bagaimana cara melakukan pembelian produk?</summary>
					<div class="faq_content">
						<p class="pl-3 pr-2">Pilih produk pada katalog sparepart, lalu pilih metode pembayaran.</p>
					</div>
				</details>
				
			</div>
			<div class="relative flex justify-between w-96 bg-primary py-2 px-6 bottom-0 sticky">
			<a href="home.php"><button><img src="./aset/home.png" class="w-10 opacity-50"></button></a>
			<a href="product.php"><button><img src="./aset/katalog-black.png" class="w-8"></button></a>
			<a href="riwayat.html"><button><img src="./aset/riwayat-black.png" class="w-6 opacity-50"></button></a>
			<a href="profil.html"><button><img src="./aset/profil-black.png" class="w-10 opacity-50"></button></a>
			</div>
		</div>
	</div>
</body>
</html>