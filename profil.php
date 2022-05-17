<?php
include "model.php";
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
    <title>Profil User</title>
</head>

<body>
    <div class="box-border border-2 w-96 font-poppins">
        <div class="flex flex-col bg-yellow-400 p-2 rounded-b-lg">
            <div>
                <img src="aset/phone.png" className="p-2">
            </div>
            <div class="text-center pb-10">
                <span class="font-bold text-2xl">Profil User</span>
            </div>
        </div>
        <div class="flex justify-center -mt-5">
            <div class="h-44 w-80 -mt-3 bg-white shadow-md rounded-lg pt-3">
                <div class="flex justify-center">
                    <img src="aset/profile.png" alt="">
                </div>
                <div class="ml-48 -mt-10">
                    <a href=""><img src="aset/editfoto.png" alt="" class=""></a>
                </div>

                <div class="flex justify-center mt-4">
                    <p class="text-center text-[9px] h-5 w-28 rounded-md bg-primary shadow-md border-1 px-3">User ID:
                        800000001
                    </p>
                </div>
            </div>
        </div>


        <div class="flex grid grid-cols-2 gap-1 p-8">
            <div class="flex text-sm text-gray-400 font-semibold">Nama</div>
            <br>
            <div class="flex justify-between w-72 ml-5 text-sm text-black">
                <span>Jennie Kim</span>
                <a href=""><span class="text-primary">Ubah</span></a>
            </div>
        </div>

        <div class="flex grid grid-cols-2 pt-0 p-8 -mt-4">
            <div class="flex text-sm text-gray-400 font-semibold">Username</div>
            <br>
            <div class="flex justify-between w-72 ml-5 text-sm text-black">
                <span>iamkimjennie</span>
                <a href=""><span class="text-primary">Ubah</span></a>
            </div>
        </div>

        <div class="flex grid grid-cols-2 pt-0 p-8 -mt-4">
            <div class="flex text-sm text-gray-400 font-semibold">No.Handphone</div>
            <br>
            <div class="flex justify-between w-72 ml-5 text-sm text-black">
                <span>081234567890</span>
                <a href=""><span class="text-primary">Ubah</span></a>
            </div>
        </div>

        <div class="flex grid grid-cols-2 pt-0 p-8 -mt-4">
            <div class="flex text-sm text-gray-400 font-semibold">Email</div>
            <br>
            <div class="flex justify-between w-72 ml-5 text-sm text-black">
                <span>jennie.kim@gmail.com</span>
                <a href=""><span class="text-primary">Ubah</span></a>
            </div>
        </div>

        <div class="flex grid grid-cols-2 pt-0 p-8 -mt-4">
            <div class="flex text-sm text-gray-400 font-semibold">Password</div>
            <br>
            <div class="flex justify-between w-72 ml-5 mt-1 text-sm text-black">
                <div class="rounded-full border-2 border-black h-3 bg-black p-1"></div>
                <div class="rounded-full -ml-28 border-2 border-black h-3 bg-black p-1"></div>
                <div class="rounded-full -ml-28 border-2 border-black h-3 bg-black p-1"></div>
                <div class="rounded-full -ml-28 border-2 border-black h-3 bg-black p-1"></div>
                <div class="rounded-full -ml-28 border-2 border-black h-3 bg-black p-1"></div>
                <div class="rounded-full -ml-28 border-2 border-black h-3 bg-black p-1"></div>
                <div class="rounded-full -ml-28 border-2 border-black h-3 bg-black p-1"></div>
                <div class="rounded-full -ml-28 border-2 border-black h-3 bg-black p-1"></div>
                <a href=""><span class="text-primary">Ubah</span></a>
            </div>
        </div>

        <div class="flex grid grid-cols-2 pt-0 p-8 -mt-4">
            <div class="flex text-sm text-gray-400 font-semibold">Alamat</div>
            <br>
            <div class="flex justify-between w-72 ml-5 text-sm text-black">
                <span>Jl. in aja dulu No. 3, Kota Malang, Provinsi Jawa Timur</span>
                <a href=""><span class="text-primary">Ubah</span></a>
            </div>
        </div>

        <div class="flex grid grid-cols-2 pt-0 p-8 -mt-4">
            <div class="flex text-sm text-gray-400 font-semibold">Jenis Kelamin</div>
            <br>
            <div class="flex justify-between w-72 ml-5 text-sm text-black">
                <span>Perempuan</span>
                <a href=""><span class="text-primary">Ubah</span></a>
            </div>
        </div>

        <div class="flex grid grid-cols-2 pt-0 p-8 -mt-4">
            <div class="flex text-sm text-gray-400 font-semibold">Jenis Kendaraan</div>
            <br>
            <div class="flex justify-between w-72 ml-5 text-sm text-black">
                <span>Daihatsu Ayla Putih 2015</span>
                <a href=""><span class="text-primary">Ubah</span></a>
            </div>
        </div>

        <div class="relative flex justify-between bg-primary py-2 px-6 bottom-0 sticky">
            <button><img src="./aset/home.png" class="w-10 opacity-50"></button>
            <button><img src="./aset/katalog-black.png" class="w-8 opacity-50"></button>
            <button><img src="./aset/riwayat-black.png" class="w-6 opacity-50"></button>
            <button><img src="./aset/profil-black.png" class="w-10"></button>
        </div>
    </div>
</body>

</html>

<?php
<input ...... value="<?=$get['nama_user']?>"/>
?>