<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
include_once '../../config/database.php';
include_once '../../models/Users.php';
$database = new Database();
$db = $database->getConnection();
$item = new Users($db);
$data = json_decode(file_get_contents("php://input"));
$item->nama_lengkap = $data->nama_lengkap;
$item->email = $data->email;
$item->password = $data->password;
$item->foto = $data->foto;
$item->pekerjaan = $data->pekerjaan;
$item->posisi = $data->posisi;
if ($item->createUser()) {
    echo json_encode('User created successfully.');
} else {
    echo json_encode('User could not be created.');
}
