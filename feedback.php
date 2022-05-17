<?php 
    include "db.php"; 
    
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
    <title>Feedback</title>
</head>
<body>
    <div class="box-border border-2 w-96 font-poppins bg-latar">
        <div class="bg-white">
          <img src="aset/Black.png" className="object-contain" />
        </div>
  
        <div class="flex px-6 py-2 bg-white">
            <a href=""><img src="aset/ic_round-chevron-left.png" class="object-contain h-5" /></a>

          <div><span class="px-28 font-black text-md ">Feedback</span></div>
        </div>

        <div class="box-border bg-white mt-2 px-10 py-4 flex gap-x-3">
            <img src="aset/product-img.png" alt="produk" class="h-12">
            <span class="self-center text-xs">Velg ban mobil Toyota Avanza/Gold</span>
        </div>

        <div class="box-border bg-white mt-0.5 px-6 pt-4 pb-32">
            <p class="text-sm font-semibold text-center mb-4">Beri rating untuk pesanan ini</p>
            <div class="flex justify-center mb-8"><img src="aset/bintang.png" alt="" class="h-12"></div>    
            <p class="text-sm font-semibold mb-3">Ada pesan untuk dealer?</p>

            <textarea class="bg-gray-200 rounded p-4 h-32 w-80 text-xs" placeholder="Yuk, berikan ulasanmu tentang produk dan pelayanan yang kamu dapatkan!"></textarea>

            <div class="mt-20 flex justify-center">
                <button class="bg-primary px-8 py-2 rounded-lg w-80 font-semibold">Kirim</button>
            </div>
            
        </div>
    </div>
</body>
</html>