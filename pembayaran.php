<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="./aset/script/config.js"></script>
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
        <a href=""><img src="aset/ic_round-chevron-left.png" class="object-contain h-5" /></a>

      <div><span class="px-24 font-black text-md ">Pembayaran</span></div>
    </div>

      <div class="box-border bg-white my-2 px-6 pt-4 pb-12 font-semibold">
        <div class="text-md">Metode Pembayaran</div>
        <a href="">
          <div
        class="box-border text-sm flex shadow-md px-6 py-3 rounded-s justify-between mt-6 mb-8">
        <div class="flex gap-x-4">
          <img src="aset/GoPay.png" class="h-8" />
          <span class="self-center">GO-PAY</span>
        </div>
        <div
          class="rounded-full border-2 border-gray-400 bg-white h-3 self-center p-1"
        ></div>
        </div>
        </a>
        <a href="">
          <div
          class="box-border text-sm flex shadow-md px-6 py-3 rounded-s justify-between mb-8">
          <div class="flex gap-x-4">
            <img src="aset/OVO.png" class="h-7" />
            <span class="self-center">OVO</span>
          </div>
          <div
            class="rounded-full border-2 border-gray-400 bg-white h-3 self-center p-1"
          ></div>
        </div>
        </a>
        <a href="">
          <div
          class="box-border text-sm flex shadow-md px-6 py-3 rounded-s justify-between">
          <div class="flex gap-x-4">
            <img src="aset/cod.png" class="h-7" />
            <span class="self-center">Bayar di tempat</span>
          </div>
          <div
            class="rounded-full border-2 border-gray-400 bg-white h-3 self-center p-1"
          ></div>
        </div>
        </a>
      </div>

      <div class="box-border bg-white mt-2 px-6 pt-4 pb-4 ">
        <div class="text-md font-semibold">Ringkasan Pembayaran</div>
        <div class="flex justify-between text-gray-600 text-xs font-semibold my-4">
          <span>Total Tagihan</span>
          <span>Rp500.000</span>
        </div>
        <div class="flex justify-between text-gray-600 text-xs font-semibold">
          <span>Biaya Layanan</span>
          <span>Rp2.500</span>
        </div> 
      </div>

      <div class="border-box bg-white pb-4 pt-24">
          <div class="box-border bg-white shadow-all px-6 py-4 flex justify-between">
            <div><p class="text-xs font-semibold">Total Pembayaran</p>
                <p class="text-oren font-semibold
                ">Rp502.500</p>
            </div>
            <button class="bg-primary px-4 h-8 w-32 rounded-lg font-semibold">Bayar</button>
        </div>

      </div>
    </div>
  </body>
</html>
