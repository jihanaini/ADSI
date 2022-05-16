<?php
include "db.php";

function getData($tabel = "")
{
    global $conn;
    $row = mysqli_query($conn, "select * from $tabel");
    $rows = mysqli_fetch_all($row, MYSQLI_ASSOC);
    return $rows;
}

function getDataWhere($tabel = "", $column = "", $id = null)
{
    global $conn;
    $row = mysqli_query($conn, "select * from $tabel where $column = $id");
    $rows = mysqli_fetch_assoc($row);
    return $rows;
}

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

function deleteDataWhere($tabel = "", $column = "", $id = null)
{
    global $conn;
    $row = mysqli_query($conn, "delete from $tabel where $column = $id");
    return $row;
}

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

function logout(){
    session_start();
    session_destroy();
}

function checkLogin(){
    session_start();
    if(isset($_SESSION["login"])){
        return true;
    }
    else{
        return false;
    }
}

function getDataLogin(){
    return $_SESSION["login"];
}
