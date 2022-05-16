<?php
include "db.php";
$product = mysqli_query($conn, "select * from produk");
$products = mysqli_fetch_all($product, MYSQLI_ASSOC);
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
    <title>Product</title>
</head>

<body>
    <div class="box-border w-96 font-poppins max-h-full">
        <div class="flex flex-col bg-yellow-400 p-2 rounded-b-lg">
            <div>
                <img src="aset/phone.png" className="p-2">
            </div>
            <div class="text-center pb-10">
                <span class="font-bold text-2xl">Katalog Produk</span>
            </div>
        </div>
        <div class="flex -mt-8 justify-center">
            <input type="text" class="px-4 py-3 w-72 shadow-md bg-white rounded-full" placeholder="Cari Produk Rekomendasi...">
        </div>
        <div class="min-h-screen">
            <div class="grid grid-cols-2 gap-4 mt-2 p-6">
                <?php
                foreach ($products as $p) {
                ?>
                    <div class="flex flex-col shadow-lg border-2 border-gray-100 rounded-md">
                        <a href="beliProduk.php?id_produk=<?= $p['id_produk']?>">
                            <div class="flex justify-center">
                                <img src="./aset/<?= $p['gambar_produk'] ?>" class="w-36 h-28 object-cover">
                            </div>
                            <div class="flex px-3 mt-2">
                                <h1 class="text-sm font-bold"><?= $p['nama_produk'] ?></h1>
                            </div>
                            <div class="flex px-3 mt-2 mb-3 justify-between">
                                <p class="text-2xs text-gray-400 font-medium">Rp<?= number_format($p['harga_produk']) ?></p>
                                <p class="text-2xs text-gray-500 font-medium">Stok <?= $p['stok_produk'] ?></p>
                            </div>
                        </a>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="relative flex justify-between bg-primary py-2 px-6 bottom-0 sticky">
            <button><img src="./aset/home.png" class="w-10 opacity-50"></button>
            <button><img src="./aset/katalog-black.png" class="w-8"></button>
            <button><img src="./aset/riwayat-black.png" class="w-6 opacity-50"></button>
            <button><img src="./aset/profil-black.png" class="w-10 opacity-50"></button>
        </div>
    </div>
</body>

</html>