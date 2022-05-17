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
    <title>Login</title>
</head>

<body>

    <div class="box-border border-2 w-96 font-poppins">

        <div class="yellow bg-primary rounded-b-[180px] pb-24">
            <img src="aset/phone.png" className="p-0">

            <div class="flex justify-center mt-11 h-28">
                <img src="aset/logo.png" className="p-1">

            </div>

        </div>
        <div class="bg-white flex justify-center rounded-t-lg"></div>

        <form method="POST">
            <div class="pr-10 pl-6 mt-14">
                <input class="flex box-border border-2 mt-3 h-10 rounded-lg pl-3 w-80" placeholder="Email" type="email" name="email">
                <input class="flex box-border border-2 mt-3 h-10 rounded-lg pl-3 w-80" placeholder="Password" type="password" name="password">
            </div>

            <div class="flex justify-end mr-10 my-2 text-sm text-gray-600">
                <span class="underline hover:underline-offset-1">Lupa password?</span>
            </div>

            <div class="flex justify-center">
                <button type="submit" name="submit" class="border-2 font-bold bg-yellow-400 w-60 h-10 mt-4 rounded-lg bg-amber-400">Masuk</button>
            </div>
        </form>
        <div class="flex justify-center ml-4 my-2 text-sm text-gray-600 mb-40">
            <span>Belum punya akun?
                <span class="text-yellow-400 underline hover:underline-offset-1">Daftar disini</span></span>
        </div>

    </div>
</body>
<?php 
    if(isset($_POST['submit'])){
        include 'model.php';
        $email = $_POST['email'];
        $password = $_POST['password'];
        $login = login($email, $password);
        if($login){
            header('location: home.php');
        }else{
            echo "<script>alert('Email atau password salah')</script>";
        }
    }
?>
</html>