<?php
include "db.php";
$edukasi = mysqli_query($conn, "select * from artikel");
$edukasis = mysqli_fetch_all($edukasi, MYSQLI_ASSOC);
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
    <title>Edukasi</title>
</head>

<body>
    <div class="box-border w-96 font-poppins max-h-full shadow-lg">
        <div class="flex flex-col bg-yellow-400 p-2 rounded-b-lg">
            <div>
                <img src="aset/phone.png" className="p-2">
            </div>
            <div class="flex pb-6">
                <img src="aset/ic_round-chevron-left.png">
                <span class="px-32 font-bold text-lg">Edukasi</span>
            </div>
        </div>
        <div class="flex -mt-6 justify-center">
            <input type="text" class="px-4 py-3 w-72 shadow-md bg-white rounded-full" placeholder="Cari Artikel Terbaru...">
        </div>
        <div class="min-h-screen">
            <div class="grid grid-cols-1 px-6 mt-4">
                <?php
                foreach ($edukasi as $e) {
                    $arry = explode(" ", $e['isi_artikel']);
                    $arry = array_slice($arry, 0, 8);
                    $e['isi_artikel'] = implode(" ", $arry);
                ?>
                    <a href="detail_edukasi.php?id_artikel=<?= $e['id_artikel']?>">
                        <div class="flex bg-whiteshadow-md border-2 border-gray-100 rounded-md mb-2">

                            <div>
                                <img src="./aset/<?= $e['gambar_artikel'] ?>" class="w-52 h-28 object-cover rounded-l-md">
                            </div>
                            <div class="px-2">
                                <h1 class="text-sm font-bold mt-1"><?= $e['nama_artikel'] ?></h1>
                                <p class="text-xs text-gray-600 mt-1">
                                    <?= $e['isi_artikel'] ?>...
                                </p>
                                <p class="text-2xs font-bold mt-3 float-right">Selengkapnya</p>
                            </div>

                        </div>
                    </a>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>