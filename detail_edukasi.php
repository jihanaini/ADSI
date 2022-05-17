<?php
include "model.php";
$check = checkLogin();
if(!$check) header("location:login.php");
if(isset($_GET['id_artikel'])){
    $artikel = getDataWhere('artikel', 'id_artikel', $_GET['id_artikel']);
}
else{
    header("location:edukasi.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        /* width */
        div::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        div::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        /* Handle */
        div::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 10px;
        }

        /* Handle on hover */
        div::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="./aset/script/config.js"></script>
    <title>Detail Artikel</title>
</head>

<body>
    <div class="box-border w-96 font-poppins min-h-screen shadow-lg">
        <div class="flex flex-col p-2 rounded-b-lg">
            <div>
                <img src="aset/phone.png" className="p-2">
            </div>
            <div class="flex">
                <a href="edukasi.php">
                    <img src="aset/ic_round-chevron-left.png">
                </a>
            </div>
        </div>
        <div class="flex flex-col p-2 h-screen overflow-auto">
            <h1 class="px-10 py-2 font-bold"><?= $artikel['nama_artikel']?></h1>
            <span class="px-10 py-2 text-xs"><?= $artikel['tanggal_artikel']?></span>
            <img src="./aset/<?= $artikel['gambar_artikel']?>" class="w-72 self-center">
            <p class="px-10 py-2 text-justify text-sm"><?= $artikel['isi_artikel']?></p>
        </div>
    </div>
</body>

</html>