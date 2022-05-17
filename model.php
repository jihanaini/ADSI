<?php
include "db.php";

//ngambil semua data di tabel, $tabel adalah nama tabel yang ingin diambil datanya
//ex : getData("produk");
//berarti dia ngambil semua data dari tabel produk
function getData($tabel = "")
{
    global $conn;
    $row = mysqli_query($conn, "select * from $tabel");
    $rows = mysqli_fetch_all($row, MYSQLI_ASSOC);
    return $rows;
}

//ngambil data di tabel yang sesuai sama kondisi, $tabel adalah nama tabel yang ingin diambil datanya, $colum adalah nama kolom kondisi, $value adalah isi kondisi
//ex : getData("produk", "id_produk", "1");
//berarti dia ngambil data dari tabel produk yang punya id produk = 1
function getDataWhere($tabel = "", $column = "", $id = null)
{
    global $conn;
    $row = mysqli_query($conn, "select * from $tabel where $column = $id");
    $rows = mysqli_fetch_assoc($row);
    return $rows;
}

//nambahin satu data di tabel, $tabel adalah nama tabel, $data adalah array data yang ingin dimasukkan
//ex :
//$data = array(
//    "nama_produk" => "Baju",
//    "harga_produk" => "10000",
//)
//insertData("produk", $data);
//berarti dia nambahin data di tabel produk dengan isi dari array $data
function insertData($tabel = "", $data = [])
{
    global $conn;
    $columns = implode(", ", array_keys($data));
    $values  = "'".implode("', '", array_values($data))."'";
    $row = mysqli_query($conn, "INSERT INTO $tabel($columns) VALUES ($values)");
    if($row) {
        return array('status' => true, 'last_id'=> mysqli_insert_id($conn));
    } else {
        return array('status' => false, 'error' => mysqli_error($conn));
    }
}

//menghapus data di tabel, $tabel adalah nama tabel, $column adalah nama kolom kondisi, $value adalah isi kondisi
//ex : deleteData("produk", "id_produk", "1");
//berarti dia ngehapus data dari tabel produk yang punya id_produk = 1
function deleteDataWhere($tabel = "", $column = "", $id = null)
{
    global $conn;
    $row = mysqli_query($conn, "delete from $tabel where $column = $id");
    return $row;
}

//buat login
//ex : login("admin", "admin");
function login($email = "", $password = "")
{
    global $conn;
    $row = mysqli_query($conn, "select * from user where email = '$email' and password = '$password'");
    $rows = mysqli_fetch_assoc($row);
    if ($rows) {
        session_start();
        $_SESSION["login"] = $rows;
        return true;
    } else {
        return false;
    }
}

//buat logout
function logout(){
    session_start();
    session_destroy();
}

//buat ngecek apakah udah login atau belom
function checkLogin(){
    session_start();
    if(isset($_SESSION["login"])){
        return true;
    }
    else{
        return false;
    }
}

//buat ngambil data login
function getDataLogin(){
    return $_SESSION["login"];
}

// function getDataJoin($tabel1 = "", $tabel2 = "", $tabel3 = "", $column = "", $id = null)
// {
//     global $conn;
//     $row = mysqli_query($conn, "select * from $tabel1 inner join $table2  
//     on $table1.$id = $table2.$id join $table2 on $table2.$id = $table3.$id ");
//     $rows = mysqli_fetch_assoc($row);
//     return $rows;
// }