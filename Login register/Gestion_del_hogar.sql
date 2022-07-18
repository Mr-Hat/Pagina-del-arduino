CREATE DATABASE Gestion_del_hogar;

use Gestion_del_hogar;

CREATE TABLE usuarios(
contraseña varchar(20),
nombre_usuario varchar(20),
nombre varchar(100),
apellido_paterno varchar(100),
apellido_materno varchar(100),
correo varchar(100),
PRIMARY KEY (nombre_usuario)
);

