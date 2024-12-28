create database MVC_Crud;
use MVC_Crud;


CREATE TABLE cto_clear (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    OLT ENUM('MARAJO', 'SOF', 'VALE', 'ESTANCIA', 'JARDIM 2') DEFAULT NULL,
    pon_slot VARCHAR(255) NOT NULL,
    noc VARCHAR(255) NOT NULL,
    tecnico VARCHAR(255) NOT NULL,
    adicionado VARCHAR(255) DEFAULT NULL,
    retirado VARCHAR(255) DEFAULT NULL,
    motivo TEXT DEFAULT NULL,
    data DATE DEFAULT NULL,
    hora TIME DEFAULT NULL
);

CREATE TABLE incidente (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    nome_switch ENUM('SW-DF100', 'SW-ESTANCIA', 'SW-JARDINS', 'SW-MARAJO', 'SW-PATIO', 'SW-SOF', 'SW-VALE') NOT NULL,
    descricao TEXT DEFAULT NULL,
    status ENUM('Pendente', 'Concluído') NOT NULL,
    data_incidente DATE NOT NULL,
    hora_incidente TIME NOT NULL,
    data_incidente_fim DATE DEFAULT NULL,
    hora_incidente_fim TIME DEFAULT NULL,
    nome_incidente VARCHAR(255) NOT NULL
);

CREATE TABLE users (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    is_master TINYINT(1) DEFAULT 0
);



