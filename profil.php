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
    <title>Profil User</title>
</head>

<body>
    <div class="box-border border-2 w-96 font-poppins">
        <div class="flex flex-col bg-yellow-400 p-2 rounded-b-lg">
            <div>
                <img src="aset/phone.png" className="p-2">
            </div>
            <div class="text-center pb-10">
                <span class="font-bold text-2xl">Profil User</span>
            </div>
        </div>
        <div class="flex justify-center -mt-5">
            <div class="h-44 w-80 -mt-3 bg-white shadow-md rounded-lg pt-3">
                <div class="flex justify-center">
                    <img src="aset/profile.png" alt="">
                </div>

                <div class="flex justify-center ">
                    <p class="text-center text-[9px] h-5 w-28 rounded-md bg-primary shadow-md border-1 px-3">User ID:
                        800000001
                    </p>
                </div>
            </div>
        </div>

        <form method="post">
        <div class="flex grid grid-cols-2 gap-1 p-8">
            <div class="flex text-sm text-gray-400 font-semibold">Nama</div>
            <br>
            <div class="flex justify-between w-72 ml-5 text-sm text-black">
                <input type="text" class="box-border border-2 w-80 mt-2.5 pl-6 h-8 text-sm focus:text-black text-gray-400 rounded-lg" name="nama" placeholder="Kim Jennie" value="<?php echo $d->nama_user?>"></input>
            </div>
        </div>

        <div class="flex grid grid-cols-2 pt-0 p-8 -mt-4">
            <div class="flex text-sm text-gray-400 font-semibold">Username</div>
            <br>
            <div class="flex justify-between w-72 ml-5 text-sm text-black">
                <input type="text" class="box-border border-2 w-80 mt-2.5 pl-6 h-8 text-sm focus:text-black text-gray-400 rounded-lg" name="username" placeholder="iamkimjennie" value="<?php echo $d->username?>"></input>
            </div>
        </div>

        <div class="flex grid grid-cols-2 pt-0 p-8 -mt-4">
            <div class="flex text-sm text-gray-400 font-semibold">No.Handphone</div>
            <br>
            <div class="flex justify-between w-72 ml-5 text-sm text-black">
                <input type="text" class="box-border border-2 w-80 mt-2.5 pl-6 h-8 text-sm focus:text-black text-gray-400 rounded-lg" name="no_hp" placeholder="081234567890" value="<?php echo $d->no_hp?>"></input>
            </div>
        </div>

        <div class="flex grid grid-cols-2 pt-0 p-8 -mt-4">
            <div class="flex text-sm text-gray-400 font-semibold">Email</div>
            <br>
            <div class="flex justify-between w-72 ml-5 text-sm text-black">
                <input type="text" class="box-border border-2 w-80 mt-2.5 pl-6 h-8 text-sm focus:text-black text-gray-400 rounded-lg" name="email" placeholder="jennie.kim@gmail.com" value="<?php echo $d->email?>"></input>
            </div>
        </div>

        <div class="flex grid grid-cols-2 pt-0 p-8 -mt-4">
            <div class="flex text-sm text-gray-400 font-semibold">Password</div>
            <br>
            <div class="flex w-72 ml-5 mt-1 text-sm text-black">
                <input type="password" class="box-border border-2 w-80 mt-2.5 pl-6 h-8 text-sm focus:text-black text-gray-400 rounded-lg" name="password" placeholder="" value="rahasia <?php echo $d->password?>"></input>
                <!-- <span class="rounded-full mr-0.5 border-2 border-black h-3 bg-black p-1"></span>
                <span class="rounded-full mr-0.5 border-2 border-black h-3 bg-black p-1"></span>
                <span class="rounded-full mr-0.5 border-2 border-black h-3 bg-black p-1"></span>
                <span class="rounded-full mr-0.5 border-2 border-black h-3 bg-black p-1"></span>
                <span class="rounded-full mr-0.5 border-2 border-black h-3 bg-black p-1"></span>
                <span class="rounded-full mr-0.5 border-2 border-black h-3 bg-black p-1"></span>
                <span class="rounded-full mr-0.5 border-2 border-black h-3 bg-black p-1"></span>
                <span class="rounded-full mr-0.5 border-2 border-black h-3 bg-black p-1"></span> -->
            </div>
        </div>

        <div class="flex grid grid-cols-2 pt-0 p-8 -mt-4">
            <div class="flex text-sm text-gray-400 font-semibold">Alamat</div>
            <br>
            <div class="flex justify-between w-72 ml-5 text-sm text-black">
                <textarea type="text" class="box-border border-2 w-80 mt-2.5 pl-6 h-12 text-sm focus:text-black text-gray-400 rounded-lg" name="alamat" placeholder="Jl. in aja dulu No. 3, Kota Malang, Provinsi Jawa Timur" value="<?php echo $d->alamat?>"></textarea>
            </div>
        </div>

        <div class="flex grid grid-cols-2 pt-0 p-8 -mt-4">
            <div class="flex text-sm text-gray-400 font-semibold">Jenis Kelamin</div>
            <br>
            <div class="flex justify-between w-72 ml-5 text-sm text-black">
                <input type="text" class="box-border border-2 w-80 mt-2.5 pl-6 h-8 text-sm focus:text-black text-gray-400 rounded-lg" name="jenis_kelamin" placeholder="Perempuan" value="<?php echo $d->jenis_kelamin?>"></input>
            </div>
        </div>

        <div class="flex grid grid-cols-2 pt-0 p-8 -mt-4">
            <div class="flex text-sm text-gray-400 font-semibold">Jenis Kendaraan</div>
            <br>
            <div class="flex justify-between w-72 ml-5 text-sm text-black">
                <input type="text" class="box-border border-2 w-80 mt-2.5 pl-6 h-8 text-sm focus:text-black text-gray-400 rounded-lg" name="jenis_kendaraan" placeholder="Daihatsu Ayla Putih 2015" value="<?php echo $d->jenis_kendaraan?>"></input>
            </div>
        </div>

        <div class="flex justify-center mb-5">
            <button name="submit" type="submit" class="border-2 font-bold bg-yellow-400 w-60 h-10 rounded-lg bg-amber-400">Update Profil</button>
            </div>

    </form>
        <div class="relative flex justify-between bg-primary py-2 px-6 bottom-0 sticky">
        <a href="home.php"><button><img src="./aset/home.png" class="w-10 opacity-50"></button></a>
				<a href="product.php"><button><img src="./aset/katalog-black.png" class="w-8"></button></a>
				<a href="riwayat.php"><button><img src="./aset/riwayat-black.png" class="w-6 opacity-50"></button></a>
				<a href="profil.php"><button><img src="./aset/profil-black.png" class="w-10 opacity-50"></button></a>
        </div>
    </div>
</body>

</html>

<?php
    if(isset($_POST['submit'])){
      
        $nama = $_POST['nama_user'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $no_hp = $_POST['no_hp'];
        $alamat = $_POST['alamat'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $jenis_kendaraan = $_POST['jenis_kendaraan'];
        
        $update = mysqli_query($conn, "UPDATE user SET 
            nama_user = '".$nama_user."',
            username = '".$username."',
            email = '".$email."',
            no_hp = '".$no_hp."',
            alamat = '".$alamat."',
            jenis_kelamin = '".$jenis_kelamin."',
            jenis_kendaraan = '".$jenis_kendaraan."' ")
    }
?>