<?php
session_start();


try {
    $pdo = new PDO("mysql:host=localhost;dbname=sistema_MateusRibeiro",'root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro ao conectar com o banco: " . $e->getMessage());
}
// Configurações de sistema
define('BASE_URL','/sistema_MateusRibeiro');
define('UPLOAD_DIR',__DIR__ . '/../assets/uploads/');

// funções úteis
function sanitize($data) {
return htmlspecialchars(trim($data),ENT_QUOTES, 'UTF-8');
}
function redirect($url){
    header("Location: " . $url);
    exit;
}
?>