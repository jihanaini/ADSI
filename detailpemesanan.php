<?php 
    include "model.php";
    $d_t = getDataWhere("transaksi", "id_transaksi", 1);
    $d_p = getDataWhere("produk", "id_produk", 1); 
    $d_pp = getDataWhere("pembelian_produk", "id_pembelian", 1); 
    $u = getDataWhere("user", "id_user", 1);
    $biaya_layanan = 2500;
    $ongkir = 0;  
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
    <title>Detail Pemesanan</title>
</head>
<body>
    <div class="box-border border-2 w-96 font-poppins bg-latar">
        <div class="bg-white">
          <img src="aset/Black.png" className="object-contain" />
        </div>
  
        <div class="flex px-6 py-2 bg-white">
            <a href="riwayat.html"><img src="aset/ic_round-chevron-left.png" class="object-contain h-5" /></a>

            <div><span class="px-16 font-black text-md ">Detail Pemesananan</span></div>
        </div>

        <div class="box-border bg-white mt-2 px-6 py-4 text-xs mb-1.5">
            <div class="flex justify-between">
                <span class="text-gray-500">INV/20220318/MPL/985432</span>
                <a href=""><span class="text-primary font-semibold">Lihat invoice </span></a>
            </div>

            <div class="flex justify-between mt-4">
                <span class="text-gray-500">Tanggal pembelian</span>
                <span class="text-gray-700"><?= $d_t['tgl_transaksi']?></span>
            </div>
        </div>
<!-- 18 Maret 2022, 10.34 WIB -->
        <div class="box-border bg-white px-6 py-4 text-xs mb-1.5">
            <p class="font-semibold text-sm mb-4">Informasi Pengiriman</p>

            <div class="flex gap-x-16 mb-2">
                <p class="text-gray-500">Kurir</p>
                <p>Instant - GoSend</p>
            </div>

            <div class="flex gap-x-12 mb-2">
                <p class="text-gray-500">No Resi</p>
                <p>GK-11-56761281</p>
            </div>

            <div class="flex gap-x-12 mb-2">
                <p class="text-gray-500">Alamat</p>
                <p><?= $u['nama_user']?> | <?= $u['no_hp']?> <br>
                <?= $u['alamat']?> </p>
            </div>
        </div>

        <div class="box-border bg-white px-6 py-4 mb-0.5">
            <p class="font-semibold text-sm mb-4">Detail Produk</p>

            <div class="flex gap-x-4">
                <img src="./aset/<?=$d_p['gambar_produk']?>" alt="" class="h-16">

                <div>
                    <p class="text-sm font-semibold"><?=$d_p['nama_produk']?></p>
                    <div class="mt-4 text-xs font-semibold flex justify-between">
                        <div>
                            <span class="line-through text-gray-500 mr-2">Rp1.000.000</span>
                            <span class="">Rp<?=number_format($d_t['total_pembayaran'])?></span>
                        </div>
                        <span class="text-gray-500"><?=$d_pp['jumlah_pembelian']?> x</span>
                    </div>
                </div>
            </div>  
        </div>

        <div class="box-border bg-white px-6 py-4 font-semibold text-sm flex justify-between mb-1.5">
            <span >Total Harga</span>
            <span>Rp<?=number_format($d_t['total_pembayaran'])?></span>
        </div>

        <div class="box-border bg-white px-6 py-4 mb-0.5">
            <p class="font-semibold text-sm mb-4">Rincian Pembayaran</p>
            <div class="text-xs flex justify-between">
                <span class="text-gray-500">Metode Pembayaran</span>
                <span>Bayar di Tempat</span>
            </div>
        </div>

        <div class="box-border bg-white px-6 pt-4 pb-6 text-xs">
            <div class="flex justify-between mb-3">
                <span class="text-gray-500">Total Harga</span>
                <span>Rp<?=number_format($d_t['total_pembayaran'])?></span>
            </div>
            <div class="flex justify-between mb-3">
                <span class="text-gray-500">Total Ongkos Kirim</span>
                <span>Rp<?=number_format($ongkir)?></span>
            </div>
            <div class="flex justify-between mb-3">
                <span class="text-gray-500">Biaya Layanan</span>
                <span>Rp<?=number_format($biaya_layanan)?></span>
            </div>
            <div class="flex justify-between text-sm font-semibold">
                <span class="">Total Pembayaran</span>
                <span>Rp<?= number_format($biaya_layanan+$ongkir+$d_t['total_pembayaran'])?></span>
            </div>
        </div>

        <div class="border-box bg-white pb-4 placeholder-opacity-25">
            <div class="box-border bg-white w-full shadow-all px-6 py-4">
              <a href="feedback.php?id_transaksi=<?= $d_t['id_transaksi']?>">
                  <div class="bg-primary text-center p-1 h-8 w-full rounded-lg font-semibold text-md">Beri Penilaian</div> 
                </a>
          </div>
    </div>
</body>
</html>