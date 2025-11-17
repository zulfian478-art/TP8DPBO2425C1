<?php
// Router Utama MVC

// Default controller dan method
$controller = isset($_GET['c']) ? $_GET['c'] : 'kaprodi';
$method     = isset($_GET['m']) ? $_GET['m'] : 'index';
$id         = isset($_GET['id']) ? $_GET['id'] : null;

// Path controller
$controllerFile = "../app/controllers/" . ucfirst($controller) . "Controller.php";

// Jika file controller tidak ditemukan
if (!file_exists($controllerFile)) {
    die("Controller '$controller' tidak ditemukan!");
}

// Load controller yang sesuai
require_once $controllerFile;

// Nama class controller
$controllerName = ucfirst($controller) . "Controller";

// Buat objek controller
$ctrl = new $controllerName();

// Cek apakah method ada
if (!method_exists($ctrl, $method)) {
    die("Method '$method' tidak ditemukan pada controller '$controllerName'");
}

// Jalankan controller + method
($id !== null) ? $ctrl->$method($id) : $ctrl->$method();
