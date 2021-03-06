<?php
include "model.php";
$d_t = getDataWhere("transaksi", "id_transaksi", 1);
$d_bs = getDataWhere("booking_service", "id_pemesanan", 1);
$u = getDataWhere("user", "id_user", 1);
$biaya_layanan = 2500;
$voucher = 25000;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="./aset/script/config.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    </style> 
    <title>Detail Pemesanan  (Booking Service)</title>
</head>
<body>
    <div class="box-border border-2 w-96 font-poppins bg-latar">
        <div class="bg-white">
          <img src="aset/Black.png" className="object-contain" />
        </div>
  
        <div class="flex px-6 py-2 bg-white">
            <a href="bookingService.php"><img src="aset/ic_round-chevron-left.png" class="object-contain h-5" /></a>

            <div><span class="px-16 font-black text-md ">Detail Pemesananan</span></div>
        </div>

        <div class="box-border bg-white mt-8 px-6 py-4 text-xs mb-1.5">

            <div class="flex justify-between">
                <span class="text-gray-500">Tanggal pembelian</span>
                <span class="text-gray-700">18 Maret 2022, 10.34 WIB</span>
            </div>
        </div>

        <div class="box-border bg-white px-6 py-4 text-xs mb-1.5">
            <p class="font-semibold text-sm mb-4">Informasi Pelanggan</p>

            <div class="flex gap-x-14 mb-2">
                <p class="text-gray-500">Nama</p>
                <p><?= $u['nama_user'] ?></p>
            </div>

            <div class="flex gap-x-7 mb-2">
                <p class="text-gray-500">Jenis Mobil</p>
                <p>Toyota Avanza 2018</p>
            </div>

            <div class="flex gap-x-12 mb-2">
                <p class="text-gray-500">Alamat</p>
                <p><?= $u['alamat'] ?></p>
            </div>
        </div>

        <div class="box-border bg-white px-6 py-4 mb-0.5">
            <p class="font-semibold text-sm mb-4">Detail Pemesanan</p>

            <div class="flex gap-x-4">
                <img src="aset/servis.png" alt="" class="h-14">

                <div>
                    <p class="text-sm font-semibold"><?= $d_bs['jenis_layanan'] ?></p>
                    <div class="mt-4 text-xs flex justify-between gap-x-16">
                        <div>
                            <p class="text-gray-500 mr-2">Jadwal Service</p>
                        </div>
                        <div class="">
                            <p class=""><?= $d_bs['jadwal_service'] ?></p>
                            <p class="text-right">15.00 WIB</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>

        <div class="box-border bg-white px-6 py-4  text-xs mb-1.5">
            <p class="text-gray-500 mb-2">Catatan Tambahan</p>
            <p>AC saya bukannya mengeluarkan dingin tapi malah mengeluarkan panas udah dari 2 bulan yang lalu </p>
        </div>

        <div class="px-6 pt-12 pb-36">
            <p class="text-center text-sm text-gray-400">
                Booking berhasil! <br> Silahkan datang sesuai jadwal yang dipilih.
            </p>
        </div>
</body>
</html>