<?php
include "model.php";
if (isset($_GET['id_transaksi'])) {
    $transaksi = getDataWhere('transaksi', 'id_transaksi', $_GET['id_transaksi']);
    $produk = getDataWhere("produk", "id_produk", 1);
} else {
    header("location:detailpemesanan.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="./aset/script/config.js"></script>
    <title>Feedback</title>
</head>

<body>
    <div class="box-border border-2 w-96 font-poppins bg-latar">
        <div class="bg-white">
            <img src="aset/Black.png" className="object-contain" />
        </div>

        <div class="flex px-6 py-2 bg-white">
            <a href="detailpemesanan.php"><img src="aset/ic_round-chevron-left.png" class="object-contain h-5" /></a>

            <div><span class="px-28 font-black text-md ">Feedback</span></div>
        </div>

        <div class="box-border bg-white mt-2 px-10 py-4 flex gap-x-3">
            <img src="./aset/<?= $produk['gambar_produk'] ?>" alt="produk" class="h-12">
            <span class="self-center text-xs"><?= $produk['nama_produk'] ?></span>
        </div>

        <div class="box-border bg-white mt-0.5 px-6 pt-4 pb-32">
            <p class="text-sm font-semibold text-center mb-2">Beri rating untuk pesanan ini</p>
            <!-- <div class="flex justify-center mb-8"><img src="aset/bintang.png" alt="" class="h-12"></div>     -->
            <form class="self-center mb-2 text-center" method="POST">
                <fieldset>
                    <span class="star-cb-group">
                        <input type="radio" id="rating-1" name="rating" value="1" /><label for="rating-1">1</label>
                        <input type="radio" id="rating-2" name="rating" value="2" /><label for="rating-2">2</label>
                        <input type="radio" id="rating-3" name="rating" value="3" /><label for="rating-3">3</label>
                        <input type="radio" id="rating-4" name="rating" value="4" checked="checked" /><label for="rating-4">4</label>
                        <input type="radio" id="rating-5" name="rating" value="5" /><label for="rating-5">5</label>
                    </span>
                </fieldset>
            </form>

            <p class="text-sm font-semibold mb-3">Ada pesan untuk dealer?</p>

            <textarea class="bg-gray-200 rounded p-4 h-32 w-80 text-xs" placeholder="Yuk, berikan ulasanmu tentang produk dan pelayanan yang kamu dapatkan!" name="review"></textarea>

            <div class="mt-20 flex justify-center">
                <button type="submit" name="kirim" class="bg-primary px-8 py-2 rounded-lg w-80 font-semibold">Kirim</button>
            </div>
        </div>
    </div>
</body>

</html>

<?php
if (isset($_POST['kirim'])) {
    $id_feedback = $_POST[$i];
    $rating = $_POST['rating'];
    $isi_review = $_POST['review'];

    $kirim = mysqli_query($conn, "insert into feedback set
    id_feedback = '" . $id_feedback . "',
    rating = '" . $rating . "',
    isi_review = '" . $isi_review . "'
    ");
    $i++;

    if ($kirim) {
        echo '<script>window.location="home.html"</script>';
    } else {
        echo 'gagal' . mysqli_error($conn);
    }
}
