<?php
include "model.php";
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
    <title>Registrasi</title>
</head>
<body>

   <div class="box-border border-2 w-96 font-poppins">
       
<div class="yellow bg-primary">
    <img src="aset/phone.png" className="p-0">
        
       <div class="flex justify-center h-24">
           <img src="aset/logo.png" className="p-1">
    
       </div>

       <br><br>
       </div>
       <div class="bg-white flex justify-center rounded-t-lg -mt-2">
        <span class="px-30 font-bold mt-12 text-3xl">Registrasi</span>
       </div>


        <div class="pr-10 pl-8 mt-14">
                <input
                    class="flex box-border border-2 mt-2.5 ml-3 h-10 w-72 rounded-lg placeholder:text-gray-400 pl-6 text-sm"
                    placeholder="Username" type="text">
                </input>
                <input
                    class="flex box-border border-2 mt-2.5 ml-3 h-10 w-72 rounded-lg placeholder:text-gray-400 pl-6 text-sm"
                    placeholder="Email" type="text">
                </input>
                <input
                class="flex box-border border-2 mt-2.5 ml-3 h-10 w-72 rounded-lg placeholder:text-gray-400 pl-6 text-sm"
                placeholder="Password" type="password">
                </input>
                <div class="">
                <input
                class="flex box-border border-2 mt-2.5 ml-3 h-10 w-72 rounded-lg placeholder:text-gray-400 pl-6 text-sm"
                placeholder="Confirm Password" type="password">
                </input>
                <!-- <a href=""><img src="aset/Eyes.png" alt="" class="place-content-end"></a> -->
                </div>
                
        <div class="flex ml-4 my-2 text-sm text-gray-600">
        <div class="form-check">
            <input class="form-check-input appearance-none h-4 w-4 border-2 border-primary rounded-sm bg-white cursor-pointer mr-2 mt-0.5" type="checkbox" value="" id="flexCheckDefault">
        </div>
        <span>Saya telah membaca dan menyetujui<br>
           <a href=""><span class="text-yellow-400 underline hover:underline-offset-1">Syarat & Ketentuan</span> dan <span class="text-yellow-400 underline hover:underline-offset-1">Kebijakan Privasi.</span></span>
        </div>

    </div> 
</body>
</html>

<?php
if (isset($_POST['submit']) && isset($_POST['check'])) {
    $data = array(
        'username' => $_POST['username'],
        'email' => $_POST['email'],
        'password' => $_POST['password'],
        'confirm_password' => $_POST['password']
    );
    $kirim = insertData("user", $data);
    if ($kirim['status']) {
        echo '<script>window.location="login.php?id_user='.$kirim['last_id'].'"</script>';
    } else {
        echo 'gagal' . $kirim['error'];
    }
}
?>