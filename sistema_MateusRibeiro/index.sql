CREATE DATABASE sistema_mateusribeiro;

USE sistema_mateusribeiro;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    is_admin TINYINT(1) NOT NULL DEFAULT 0
);

===========================================================
UPDATE usuarios
SET password = '$2y$10$QmJRSqY1xOfeV5ekJHKrlen0OBGKhY1AAIWOJ/sKipkplrQfpyN3y'
WHERE username = 'admin';

===========================================================
USE sistema_MateusRibeiro;

CREATE TABLE clientes(
id INT PRIMARY KEY AUTO_INCREMENT,
responsavel VARCHAR(100) NOT NULL,
nome VARCHAR(100) NOT NULL,
tipo ENUM("CPF","CNPJ") NOT NULL,
documento VARCHAR(20) NOT NULL,
endereco TEXT NOT NULL,
telefone VARCHAR(20) NOT NULL,
email VARCHAR(100) NOT NULL,
data_cadastro DATETIME DEFAULT CURRENT_TIMESTAMP
);
