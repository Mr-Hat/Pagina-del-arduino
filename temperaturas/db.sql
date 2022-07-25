CREATE DATABASE kit_mascotas;

USE kit_mascotas;

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



