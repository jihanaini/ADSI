<?php
// session_start();
// if($_SESSION['status_login'] != true){
//     echo'<script>window.location="login.php"</script>';
// 
include "db.php";
$id_produk = $_GET['id_produk'];
$ambil_data = mysqli_query($conn, "select * from produk p where id_produk = $id_produk");
$d = mysqli_fetch_object($ambil_data);
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
</head>

<body>
    <div class="box-border border-2 w-96 p-2 font-poppins">
        <img src="aset/Black.png" className="p-0">
        <div class="flex">
            <a href="product.php">
                <img src="aset/ic_round-chevron-left.png">
            </a>
            <span class="px-20 font-bold text-lg">Pembelian Produk</span>
        </div>

        <div class="pr-10 mt-14">
            <div class="ml-8">
                <div class="text-base font-semibold">Informasi produk</div>
                <img src="aset/<?= $d['gambar_produk'] ?>" class="border-1 border-black rounded mt-2.5">
                <div class="text-3xl text-medium mt-2 font-semibold" name="harga">Rp<?= number_format($d['harga_produk']) ?></div>
                <div class="flex mt-2.5">
                    <div class="box-border h-7 w-16 bg-yellow-400 text-center pt-1">50% Off</div>
                    <span class="ml-2 line-through">Rp<?= number_format($d['harga_produk'] * 100 / 50) ?></span>
                </div>
                <div class="text-xl text-medium mt-2 font-semibold"><?= $d['nama_produk'] ?></div>
            </div>
            <div class="mt-8 ml-4 border-t-2 border-black">
                <div class="flex mt-2.5 text-base font-semibold">
                    <div>Stok Produk</div>
                    <span class="ml-28"><?= $d['stok_produk']?></span>
                </div>
                <div class="flex mt-2.5 text-base font-semibold">
                    <div>Merk</div>
                    <span class="ml-40">HSR Wheel</span>
                </div>
                <div class="flex mt-2.5 text-base font-semibold">
                    <div>Tahun Produksi</div>
                    <span class="ml-20 ">2020</span>
                </div>
                <div class="mt-6 text-base font-normal"><?= $d['spesifikasi_produk'] ?></div>
                <button class="text-xs font-semibold mt-2.5">Baca Selengkapnya...</button>
            </div>
            <div class="ml-8">
                <form method="POST">
                    <div class="text-2xl font-semibold mt-9">Beli Produk</div>
                    <div class="flex mt-8">
                        <div class="text-base font-medium">Jumlah Pembelian</div>
                        <input class="box-border border-2 border-black rounded-md h-7 w-9 ml-28 text-center" name="jumlah_pembelian"></input>
                    </div>
                    <div class="text-base font-medium mt-6">Nama Penerima</div>
                    <input class="flex box-border border-2 mt-2.5 h-10 w-72 rounded-lg placeholder:text-gray-400 pl-6 text-sm" placeholder="Jennie Kim..." type="text" name="nama">
                    </input>
                    <div class="text-base font-medium mt-6">Alamat pengiriman</div>
                    <input class="flex box-border border-2 mt-2.5 h-16 w-72 rounded-lg placeholder:text-gray-400 pl-6 text-sm" placeholder="Isi alamat disini..." type="text" name="alamat">
                    </input>
                    <div class="flex">
                        <input type="checkbox" value="yes" name="check" class="box-border border-2 w-3.5 h-4 rounded border-yellow-400 mt-4" />
                        <span class="text-sm ml-1 mt-3">Data yang saya isikan sudah benar</span>
                    </div>

                    <!-- <a href="checkout.html">                 -->
                    <button type="submit" name="submit" class="border-2 w-72 h-10 mt-12 rounded-lg bg-yellow-400 mb-10 text-center font-semibold" name="kirim">
                        <div class="pt-1">Checkout</div>
                    </button>
                    <!-- </a> -->
                </form>
            </div>

        </div>
    </div>
</body>

</html>

<?php
if (isset($_POST['submit']) && isset($_POST['check'])) {
    $data = array(
        'id_produk' => $_GET['id_produk'],
        'id_user' => $user['id_user'],
        'jumlah_pembelian' => $_POST['jumlah_pembelian'],
        'nama_penerima' => $_POST['nama'],
        'alamat_pengiriman' => $_POST['alamat']
    );
    $kirim = insertData("pembelian_produk", $data);
    if ($kirim['status']) {
        echo '<script>window.location="checkout.php?id_pembelian='.$kirim['last_id'].'"</script>';
    } else {
        echo 'gagal' . $kirim['error'];
    }
}

?>