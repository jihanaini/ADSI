<?php
include "model.php";
$d_t = getDataWhere("transaksi", "id_transaksi", 1);
$d_p = getDataWhere("produk", "id_produk", 1);
$d_pp = getDataWhere("pembelian_produk", "id_pembelian", 1);
$u = getDataWhere("user", "id_user", 1);
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
    <title>Checkout</title>
</head>

<body>
    <div class="box-border border-2 w-96 font-poppins bg-latar">
        <div class="bg-white">
            <img src="aset/Black.png" className="object-contain" />
        </div>

        <div class="flex px-6 py-2 bg-white">
            <a href="beliProduk.php"><img src="aset/ic_round-chevron-left.png" class="object-contain h-5" /></a>

            <div><span class="px-28 font-black text-md ">Checkout</span></div>
        </div>

        <div class="box-border bg-white mt-2 px-6 py-4 text-xs">
            <span class="font-semibold">Alamat Pengiriman</span>
            <p class="mt-1 text-xs"><?= $u['nama_user'] ?> | <?= $u['no_hp'] ?><br>
                <?= $u['alamat'] ?></p>
        </div>

        <div class="box-border bg-white mt-0.5 px-6 pt-4 pb-5">
            <div class="flex gap-x-4">
                <img src="./aset/<?= $d_p['gambar_produk'] ?>" alt="" class="h-16">

                <div>
                    <p class="text-sm font-semibold"><?= $d_p['nama_produk'] ?></p>
                    <div class="mt-3 text-xs font-semibold flex justify-between">
                        <div><span class="">Rp<?= number_format($d_t['total_pembayaran']) ?></span>
                            <span class="line-through text-gray-500 ml-2">Rp1.000.000</span></div>
                        <span class="text-gray-500">x<?= $d_pp['jumlah_pembelian'] ?></span>
                    </div>
                </div>
            </div>


            <div class="flex justify-between text-xs mt-8">
                <div class="form-check">
                    <input class="form-check-input appearance-none h-4 w-4 border border-black rounded-sm bg-white cursor-pointer mr-2 mt-0.5" type="checkbox" value="" id="flexCheckDefault">
                </div>

                <div>
                    <p class="font-semibold">Proteksi Kerusakan Produk</p>
                    <p class="text-gray-500 mt-0.5">Proses klaim mudah dan instan, berlaku selama 4 bulan </p>
                </div>

                <div class="flex  gap-x-2">
                    <p>Rp10.300</p>
                    <p class="text-gray-500 font-semibold">x1</p>
                </div>
            </div>
        </div>
        <div class="flex justify-between text-xs px-6 py-4 bg-green1 border-green2 border-b-2 border-t-2">
            <div>
                <p class="font-semibold mb-0.5">Bebas Ongkir (Rp0)</p>
                <p class="text-gray-500">Estimasi tiba besok - 23 Apr</p>
            </div>

            <div class="self-center">
                <a href=""><img src="aset/panah samping kanan.png" alt="" class=""></a>
            </div>
        </div>

        <div class="box-border bg-white px-6 py-4 text-xs flex justify-between">
            <div class="flex gap-x-2">
                <img src="aset/pesan.png" alt="" class="h-2.5 mt-0.5">
                <span class="font-semibold">Pesan:</span>
            </div>

            <div>
                <input type="text" placeholder="Silakan tinggalkan pesan..">
            </div>
        </div>

        <div class="box-border bg-white px-6 py-4 mt-0.5 text-sm flex justify-between font-semibold">
            <p class="">Total Pesanan</p>
            <p class="text-oren">Rp<?= number_format($d_t['total_pembayaran']) ?></p>
        </div>

        <div class="box-border bg-white px-6 py-4 my-2 flex justify-between">
            <div class="flex gap-x-3">
                <img src="aset/Redeem.png" alt="" class="h-7">
                <span class="text-sm self-center font-semibold">Voucher</span>
            </div>

            <div class="flex self-center gap-x-2">
                <span class="text-xs text-gray-500">Pilih Voucher</span>
                <a href=""><img src="aset/panah samping kanan.png" alt="" class=""></a>
            </div>
        </div>

        <div class="box-border bg-white px-6 py-4 text-xs text-gray-500 mb-2">
            <div class="flex justify-between mb-3">
                <span>Subtotal produk</span>
                <span>Rp<?= number_format($d_t['total_pembayaran']) ?></span>
            </div>
            <div class="flex justify-between mb-3">
                <span>Subtotal pengiriman</span>
                <span>Rp0</span>
            </div>
            <div class="flex justify-between text-sm font-semibold text-black">
                <span class="">Total Pembayaran</span>
                <span class="text-oren">Rp<?= number_format($d_t['total_pembayaran']) ?></span>
            </div>
        </div>

        <div class="box-border bg-white px-6 py-4 flex justify-between text-sm font-semibold shadow-inner shadow-xl">
            <div>
                <p class="text-xs">Total Pembayaran</p>
                <p class="text-oren">Rp500.000</p>
            </div>

            <a href="pembayaran.php">
                <div class="bg-primary p-2 rounded-lg font-semibold">Pilih Pembayaran</div>
            </a>

        </div>
    </div>
</body>
</html>