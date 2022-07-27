CREATE DATABASE Gestion;

USE Gestion;

CREATE TABLE temperaturas (
  id_medicion integer,
  fecha date,
  hora time,
  temperatura numeric(6,2),
  primary key(id_medicion)
);

CREATE TABLE distancias(
  id_medicion integer,
  fecha date,
  hora time,
  dist numeric(6,2), 
  evento varchar(50) default null,  
  primary key (id_medicion)
);

CREATE TABLE mascotas(
  id int NOT NULL AUTO_INCREMENT,
  nombre varchar(50),
  fecha_nac date,
  especie varchar(50),
  PRIMARY KEY (id)
);

CREATE TABLE usuarios(
  contraseña varchar(20),
  nombre_usuario varchar(20),
  nombre varchar(100),
  apellido_paterno varchar(100),
  apellido_materno varchar(100),
  correo varchar(100),
  PRIMARY KEY (contraseña)
);



