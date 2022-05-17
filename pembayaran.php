<?php 
  include "model.php"; 
  $data = getDataWhere("transaksi","id_transaksi",1);
  $biaya_layanan = 2500; 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="./aset/script/config.js"></script>
    <script>
    function changeColor(id)
    {
      // document.getElementById(id).style.color = "#F1571C"; // forecolor
      document.getElementById(id).style.backgroundColor = "#F1571C"; // backcolor
    }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    </style> 
    <title>Pembayaran</title>
  </head>
  <body>
    <div class="box-border border-2 w-96 bg-latar font-poppins">
      <div class="bg-white">
        <img src="aset/Black.png" className="object-contain" />
      </div>

      <div class="flex px-6 py-2 bg-white">
        <a href="checkout.php"><img src="aset/ic_round-chevron-left.png" class="object-contain h-5" /></a>

      <div><span class="px-24 font-black text-md ">Pembayaran</span></div>
    </div>

      <div class="box-border bg-white my-2 px-6 pt-4 pb-12 font-semibold">
        <div class="text-md">Metode Pembayaran</div>
          
            <button onclick="changeColor('method1')" class="w-full" name="b1">
            <div
            class="box-border text-sm flex shadow-md px-6 py-3 rounded-s justify-between mt-6 mb-8" id="method1">
            <div class="flex gap-x-4">
              <img src="aset/GoPay.png" class="h-8" />
              <span class="self-center" name="m1">GO-PAY</span>
            </div>
            <div
              class="rounded-full border-2 border-gray-400 bg-white h-3 self-center p-1"
            ></div>
            </div>
            </button>
            <button href="#" onclick="changeColor('method2')" class="w-full" name="b2">
              <div
              class="box-border text-sm flex shadow-md px-6 py-3 rounded-s justify-between mb-8" id="method2">
              <div class="flex gap-x-4">
                <img src="aset/OVO.png" class="h-7" />
                <span class="self-center" name="m2">OVO</span>
              </div>
              <div
                class="rounded-full border-2 border-gray-400 bg-white h-3 self-center p-1"
              ></div>
            </div>
            </button>
            <button href="#" onclick="changeColor('method3')" class="w-full" name="b3">
              <div
              class="box-border text-sm flex shadow-md px-6 py-3 rounded-s justify-between" id="method3">
              <div class="flex gap-x-4">
                <img src="aset/cod.png" class="h-7" />
                <span class="self-center" name="m3">Bayar di tempat</span>
              </div>
              <div
                class="rounded-full border-2 border-gray-400 bg-white h-3 self-center p-1"
              ></div>
            </div>
            </button>
      </div>

      <div class="box-border bg-white mt-2 px-6 pt-4 pb-4 ">
        <div class="text-md font-semibold">Ringkasan Pembayaran</div>
        <div class="flex justify-between text-gray-600 text-xs font-semibold my-4">
          <span>Total Tagihan</span>
          <span>Rp<?=number_format($data['total_pembayaran'])?></span>
        </div>
        <div class="flex justify-between text-gray-600 text-xs font-semibold">
          <span>Biaya Layanan</span>
          <span>Rp<?= number_format($biaya_layanan)?></span>
        </div> 
      </div>

      <div class="border-box bg-white pb-4 pt-24">
          <div class="box-border bg-white shadow-all px-6 py-4 flex justify-between">
            <div><p class="text-xs font-semibold">Total Pembayaran</p>
                <p class="text-oren font-semibold
                ">Rp<?= number_format($biaya_layanan + $data['total_pembayaran'])?></p>
            </div>
            <button type="submit" name="bayar" class="bg-primary px-4 h-8 w-32 rounded-lg font-semibold">Bayar</button>
        </div>
      </div>
    </div>
  </body>
</html>

<?php 
  if(isset($_POST['bayar']) && (isset($_POST['b1']) || isset($_POST['b2']) || isset($_POST['b3']))) {
    if(isset($_POST['b1'])){
      $method = $_GET['m1']; 
    }else if(isset($_POST['b2'])){
      $method = $_GET['m2'];
    }else if(isset($_POST['b3'])){
      $method = $_GET['m3'];
    }
    $data = array(
      'metode_pembayaran' => $_POST[$method],
    );
    $kirim = insertData("transaksi", $data);
    if ($kirim['status']) {
      echo '<script>window.location="home.html'.$kirim['last_id'].'"</script>';
  } else {
      echo 'gagal' . $kirim['error'];
  }
  }
?>