<?php
include "model.php";
$check = checkLogin();
if(!$check) header("location:login.php");
$user = getDataLogin();
$d = getDataWhere('user','id_user', '1');
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
    <title>Rekomendasi Jadwal Servis</title>
</head>
<body>
    <div class="box-border border-2 w-96 p-2 font-poppins">
        <img src="aset/Black.png" className="p-0">
        <div class="flex">
         <a href="bookingService.php"><img src="aset/ic_round-chevron-left.png"></a>
         <span class="text-justify px-18 font-bold text-md ml-5 mt-1">Rekomendasi Jadwal Servis</span>
        </div>
        <br>
        <div class="flex justify-center ">
            <div class="flex h-20 w-80 p-5 -mt-1 bg-white shadow-md justify-center rounded-lg">
                <div class="flex grid grid-cols-2 gap-1">
                    <div class="flex w-80 text-sm text-black font-semibold ">Jenis Kendaraan Anda :</div>
                    <br>    
                    <div class="flex w-72 text-md text-primary -mt-2">
                            <span><?= $d['jenis_kendaraan'] ?></span>
                          
                    </div>
                    <div class="ml-28 -mt-2">
                        <button><img src="aset/edit.png"></button>
                        </div>
                </div>    
            </div>
        </div>


        <div class="box-border bg-white mt-0.5 px-6 pt-4 pb-32">
            <br><br><br>
            <p class="text-[14px] text-center mb-3">Apakah Anda ingin memasukkan track tambahan terkait aktivitas kendaraan Anda?</p>
            <form method="post">
            <textarea class="bg-gray-200 rounded p-4 h-32 w-80 text-xs" placeholder="Tuliskan disini..." name="add_info"></textarea>
            
            <div class="mt-4 flex justify-end">
                <!-- <a href="rekomendasi2.php"> -->
                    <button name="submit" type="submit" class="text-center bg-primary w-36 h-8 rounded-lg font-semibold">Lanjutkan</button>
                <!-- </a> -->
            </div>
            </form>
        </div>

    </div>
    
</body>
</html>

<?php
    if(isset($_POST['submit'])){
      
        $add_info = $_POST['add_info'];
        $data = array(
            "id_user"=>$d['id_user'],
            "jenis_kendaraan"=>$d['jenis_kendaraan'],
            "add_info"=>$add_info
        );
        $kirim = insertData("rekomendasi", $data);

        if ($kirim['status']) {
            echo '<script>window.location="rekomendasi2.php"</script>';
        } else {
            echo 'gagal' . $kirim['error'];
        }

    }
?>