<?php
include "model.php";
$check = checkLogin();
if(!$check) header("location:login.php");
$user = getDataLogin();
$d = getDataWhere('transaksi', 'id_transaksi', '1');
$d2 = getDataWhere('produk', 'id_produk', '1');
$d3 = getDataWhere('feedback', 'id_feedback', '1');
$d4 = getDataWhere('pembelian_produk', 'id_pembelian', '1');
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
    <title>Riwayat Pesanan</title>
</head>

<body>
    <div class="box-border w-96 font-poppins max-h-full">
        <div class="flex flex-col bg-yellow-400 p-2 rounded-b-lg">
            <div>
                <img src="aset/phone.png" className="p-2">
            </div>
            <div class="text-center pb-10">
                <span class="font-bold text-2xl">Riwayat Pesanan</span>
            </div>
        </div>

        <!-- <div class="grid grid-cols-1 gap-4 mt-1 p-6">
            <div class="flex flex-col justify-center border-2 border-gray-100 shadow-md rounded-md p-3">
                <div class="flex justify-between">
                    <p class="ml-3 text-[9px] font-semibold mb-2 p-2">20 April 2022</p>
                    <div class="flex flex-row h-7">
                        <p class="text-2xs font-medium shadow-md px-2 pt-[6px] bg-primary rounded-md border">Sedang dikirim</p>
                        <a href=""><img src="aset/titik3.png" alt="" class="ml-3 mt-1.5"></a>
                    </div>
                </div>
                <div class="flex gap-x-6 mt-4">
                    <div class="">
                        <img src="aset/product-img.png" alt="" class="flex h-16 ml-2">
                    </div>
                    <div>
                        <p class="text-xs font-semibold">Velg ban mobil Toyota Avanza/Gold</p>
                        <div class="mt-3 text-xs font-semibold flex justify-between">
                            <div><span class="text-gray-400">1 barang</span></div>
                            <span class="mr-4 text-black text-[9px]"><br><br>Total pesanan : Rp.500.000</span>

                        </div>
                    </div>
                </div>
                <hr class="mt-2">
                <div class="flex justify-between mt-3">
                    <div class="text-center p-1 text-gray-300 bg-gray-100 w-36 h-8 shadow-md rounded-lg">Beri Penilaian</div>
                    <button class="text-center bg-primary w-36 h-8 shadow-md rounded-lg">Selesai</button>
                </div>
            </div>
        </div> -->

            <div class="grid grid-cols-1 gap-4 -mt-6 p-6">
                <div class="flex flex-col justify-center border-2 border-gray-100 shadow-md rounded-md p-3">
                    <div class="flex justify-between">
                        <p class="ml-3 text-[9px] font-semibold mb-2 p-2"><?=date("d F Y", strtotime($d['tgl_transaksi']))?></p>
                        <div class="flex flex-row h-7">
                            <p class="text-2xs font-medium shadow-md px-2 pt-[6px] bg-green-400 rounded-md border">Selesai</p>
                            <a href=""><img src="aset/titik3.png" alt="" class="ml-3 mt-1.5"></a>
                        </div>
                    </div>
                    <div class="flex gap-x-6 mt-4">
                        <div class="">
                            <img src="aset/product-img.png" alt="" class="flex h-16 ml-2">
                        </div>
                        <div>
                            <p class="text-xs font-semibold"><?= $d2['nama_produk'] ?></p>
                            <div class="mt-4 text-xs font-semibold flex justify-between">
                                <div><span class="text-gray-400"><?= $d4['jumlah_pembelian'] ?> barang</span></div>
                                <span class="mr-4 text-black text-[9px]"><br><br>Total pesanan : </span>
                                <span class="mr-4 mt-8 text-black text-[9px]"><?= $d2['harga_produk'] ?><br><br></span>

                            </div>
                        </div>
                    </div>
                    <hr class="mt-2">
                    <div class="flex justify-between mt-3">
                        <a href= "feedback.php?id_feedback=<?= $d3['id_feedback']?>"><button class="text-center text-black bg-white w-36 h-8 shadow-md rounded-lg">Beri Penilaian</button></a>
                        <a href= "beliProduk.php?id_produk=<?= $d2['id_produk']?>"><button class="text-center bg-primary w-36 h-8 shadow-md rounded-lg">Beli Lagi</button></a>
                    </div>
                </div>
            </div>
<!-- 
        <div class="grid grid-cols-1 gap-4 -mt-6 p-6">
            <div class="flex flex-col justify-center border-2 border-gray-100 shadow-md rounded-md p-3">
                <div class="flex justify-between">
                    <p class="ml-3 text-[9px] font-semibold mb-2 p-2">18 April 2022</p>
                    <div class="flex flex-row h-7">
                        <p class="text-2xs font-medium shadow-md px-2 pt-[6px] bg-green-400 rounded-md border">Selesai</p>
                        <a href=""><img src="aset/titik3.png" alt="" class="ml-3 mt-1.5"></a>
                    </div>
                </div>
                <div class="flex gap-x-6 mt-4">
                    <div class="">
                        <img src="aset/product-img.png" alt="" class="flex h-16 ml-2">
                    </div>
                    <div>
                        <p class="text-xs font-semibold">Velg ban mobil Toyota Avanza/Gold</p>
                        <div class="mt-3 text-xs font-semibold flex justify-between">
                            <div><span class="text-gray-400">1 barang</span></div>
                            <span class="mr-4 text-black text-[9px]"><br><br>Total pesanan : Rp.500.000</span>

                        </div>
                    </div>
                </div>
                <hr class="mt-2">
                <div class="flex justify-between mt-3">
                    <div class="text-center p-2 text-gray-300 bg-gray-100 w-44 h-8 shadow-md rounded-lg text-[12px]">Penilaian Telah Diberikan</div>
                    <button class="text-center bg-primary w-28 h-8 shadow-md rounded-lg">Beli Lagi</button>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-4 -mt-6 p-6">
            <div class="flex flex-col justify-center border-2 border-gray-100 shadow-md rounded-md p-3">
                <div class="flex justify-between">
                    <p class="ml-3 text-[9px] font-semibold mb-2 p-2">17 April 2022</p>
                    <div class="flex flex-row h-7">
                        <p class="text-2xs font-medium shadow-md px-2 pt-[6px] bg-red-400 rounded-md border">Dibatalkan</p>
                        <a href=""><img src="aset/titik3.png" alt="" class="ml-3 mt-1.5"></a>
                    </div>
                </div>
                <div class="flex gap-x-6 mt-4">
                    <div class="">
                        <img src="aset/product-img.png" alt="" class="flex h-16 ml-2">
                    </div>
                    <div>
                        <p class="text-xs font-semibold">Velg ban mobil Toyota Avanza/Gold</p>
                        <div class="mt-3 text-xs font-semibold flex justify-between">
                            <div><span class="text-gray-400">1 barang</span></div>
                            <span class="mr-4 text-black text-[9px]"><br><br>Total pesanan : Rp.500.000</span>

                        </div>
                    </div>
                </div>
                <hr class="mt-2">
                <div class="flex justify-between mt-3">
                    <p class="ml-1 text-[11px] font-semibold mb-2 p-2">Dibatalkan Anda</p>
                    <button class="text-center bg-primary w-36 h-8 shadow-md rounded-lg">Beli Lagi</button>
                </div>
            </div>
        </div> -->

        
		<div class="relative flex justify-between bg-primary py-2 px-6 bottom-0 sticky">
			<a href="home.php"><button><img src="./aset/home.png" class="w-10 opacity-50"></button></a>
			<a href="product.php"><button><img src="./aset/katalog-black.png" class="w-8"></button></a>
			<a href="riwayat.php"><button><img src="./aset/riwayat-black.png" class="w-6 opacity-50"></button></a>
			<a href="profil2.php"><button><img src="./aset/profil-black.png" class="w-10 opacity-50"></button></a>
		</div>
	
    </div>
</body>

</html>

