<?php
include "model.php";
$check = checkLogin();
if(!$check) header("location:login.php");
$user = getDataLogin();
$d = getDataWhere('user', 'id_user', 1);
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
    <title>Booking Service</title>
</head>
<body>
   <div class="box-border border-2 w-96 p-2 font-poppins">
       <img src="aset/Black.png" className="p-0">
       <div class="flex">
            <a href="product.php">
                <img src="aset/ic_round-chevron-left.png">
            </a>
        <span class="px-20 font-bold text-lg">Booking Service</span>
       </div>

       <div class="pr-10 pl-8 mt-14">
            <div class="text-base font-semibold">Pilih layanan service</div>
            <form action="" method="post">
                <div class="flex">
                <div class="mb-3">
                    <select name="jenis_layanan" class="form-select appearance-none
                    block
                    w-72
                    px-3
                    py-1.5
                    h-10
                    text-xs
                    text-gray-400
                    bg-white bg-clip-padding bg-no-repeat
                    border border-2 border-gray-400
                    rounded-lg
                    transition
                    ease-in-out
                    m-0
                    focus:text-black focus:bg-white focus:border-black focus:outline-none" aria-label="Default select example">
                        <option selected>Pilih layanan service</option>
                        <option value="1">Service mesin</option>
                        <option value="2">ganti oli</option>
                    </select>
                </div>
                </div>
            </form>
        </div>

       <div class="pr-10 pl-8 mt-14">
            <div class="text-base font-semibold">Pilih jadwal service</div>
                    <input type="text" class="box-border border-2 w-full mt-2.5 pl-6 h-10 text-sm focus:text-black text-gray-400 rounded-lg" name="jadwal_service" placeholder="yyyy/mm/dd">
                    </input>
            <div class="grid justify-items-stretch text-xs">
                <button class="flex justify-self-end text-red-400 mt-2 font-semibold">Lihat rekomendasi jadwal service</button>
            </div>
        </div>

        <div class="pr-10 pl-8 mt-14">
            <div class="text-base font-semibold">Informasi pelanggan</div>
            <input type="text" class="box-border border-2 w-full mt-2.5 pl-6 h-10 text-sm focus:text-black text-gray-400 rounded-lg" name="nama" placeholder="Nama" value="<?= $d['nama_user'] ?>"></input>
            <input type="text" class="box-border border-2 w-full mt-2.5 pl-6 h-10 text-sm focus:text-black text-gray-400 rounded-lg" name="jenis_kendaraan" placeholder="Jenis Kendaraan" value="<?= $d['jenis_kendaraan']?>"></input>
            <input type="text" class="box-border border-2 w-full mt-2.5 pl-6 h-14 text-sm focus:text-black text-gray-400 rounded-lg" name="alamat" placeholder="Alamat" value="<?= $d['alamat']?>"></input>
       </div>

       
        <div class="flext mt-8 h-14 border-b-2 border-t-2 border-black">
            <div class="flex my-3">
                <img src="aset/Redeem.png" class="ml-9">
                <span class="ml-3 mt-1 text-base">Voucher</span>
                <span class="ml-28 mt-1 text-sm text-gray-600">Pilih Voucher</span>
                <img src="aset/panah samping kanan.png" class="h-4 w-2.5 mt-2 ml-2">
            </div>
        </div>
       
        <div class="pr-10 pl-8 mt-8">
            <div class="text-base font-semibold">Catatan tambahan</div>
            <textarea class="flex box-border border-2 mt-2.5 h-16 w-72 rounded-lg placeholder:text-gray-400 pl-6 text-sm" placeholder="Tulis catatan tambahan disini..." type="text">
</textarea>
       </div>

       <div class="flex pr-10 pl-8">
            <input type="checkbox" value="yes" name="check" class="box-border border-2 w-3.5 h-4 rounded border-yellow-400 mt-4" />
            <span class="text-sm ml-1 mt-3">Data yang saya isikan sudah benar</span>
       </div>

        <form method="POST">
            <button type="submit" name="tambah" class="border-2 w-72 h-10 ml-8 mt-12 rounded-lg bg-primary mb-10 text-center">
            <div class="pt-1">Pesan</div>
        </button>
        </form>

   </div> 
</body>
</html>

<?php

if(isset($_POST['tambah']) && isset($_POST['check'])){
    $data = array(
        'id_pemesanan' => $_GET['id_pemesanan'],
        'jenis_layanan' => $_POST['jenis_layanan'],
        'jadwal_service' => $_POST['jadwal_service']
    );

    $kirim = insertData("booking_service", $data);
     if($kirim['status']){
         echo'<script>window.location="detailpemesanan3.php?id_pemesanan='.$kirim['last_id'].'"</script>';
     }else{
         echo 'gagal'. $kirim['eror'];
     }

}
?>


