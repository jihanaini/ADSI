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
    <title>Detail Pemesanan (Booking Service)</title>
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

        <div class="box-border bg-white mt-2 px-6 py-4 text-xs mb-1.5">
            <div class="flex justify-between">
                <span class="text-gray-500">INV/20220318/BLS/995432</span>
                <a href=""><span class="text-primary font-semibold">Lihat invoice </span></a>
            </div>

            <div class="flex justify-between mt-4">
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

        <div class="box-border bg-white px-6 py-4 mb-0.5">
            <p class="font-semibold text-sm mb-4">Rincian Pembayaran</p>
            <div class="text-xs flex justify-between">
                <span class="text-gray-500">Metode Pembayaran</span>
                <span><?= $d_t['metode_pembayaran'] ?></span>
            </div>
        </div>

        <div class="box-border bg-white px-6 pt-4 pb-6 text-xs">
            <div class="flex justify-between mb-3">
                <span class="text-gray-500">Total Harga</span>
                <span>Rp<?= number_format($d_t['total_pembayaran']) ?></span>
            </div>
            <div class="flex justify-between mb-3">
                <span class="text-gray-500">Voucher digunakan</span>
                <span>-Rp<?= number_format($voucher) ?></span>
            </div>
            <div class="flex justify-between mb-3">
                <span class="text-gray-500">Biaya Layanan</span>
                <span>Rp<?= number_format($biaya_layanan) ?></span>
            </div>
            <div class="flex justify-between text-sm font-semibold">
                <span class="">Total Pembayaran</span>
                <span>Rp<?= number_format($biaya_layanan + $d_t['total_pembayaran'] - $voucher) ?></span>
            </div>
        </div>

        <div class="border-box bg-white pb-4 placeholder-opacity-25">
            <div class="box-border bg-white shadow-all px-6 py-4">
                <a href="feedback.php?id_transaksi=<?= $d_t['id_transaksi'] ?>">
                    <div class="bg-primary text-center p-1 h-8 w-full rounded-lg font-semibold text-md">Beri Penilaian</div>
                </a>
            </div>
        </div>
</body>

</html>