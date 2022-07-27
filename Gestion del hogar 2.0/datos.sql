use kit_mascotas;

--  -- Mediciones realizadas por sensor de temperatura
INSERT INTO temperaturas VALUES (1, "2022-07-11", "10:05:00", 22.5);
INSERT INTO temperaturas VALUES (2, "2022-07-11", "10:10:00", 24.0);
INSERT INTO temperaturas VALUES (3, "2022-07-11", "10:15:00", 19.8);
INSERT INTO temperaturas VALUES (4, "2022-07-11", "10:20:00", 22.1);
INSERT INTO temperaturas VALUES (5, "2022-07-11", "10:25:00", 17);
INSERT INTO temperaturas VALUES (6, "2022-07-11", "10:30:00", 27);

-- -- Mediciones realizadas por sensor de distancia
INSERT INTO distancias VALUES (9, "2022-07-11",  "10:00:00", 25, "Proximidad");
INSERT INTO distancias VALUES (12, "2022-07-11", "10:10:00", 10, "Apertura Puerta");
INSERT INTO distancias VALUES (13, "2022-07-11", "10:20:00", 15, "Cierre Puerta");
INSERT INTO distancias VALUES (14, "2022-07-11", "10:20:00", 70, "");
INSERT INTO distancias VALUES (15, "2022-07-11", "10:40:00", 30, "Proximidad");

INSERT INTO mascotas VALUES (1,"Peppa", "2013-05-03", "perro");
INSERT INTO mascotas VALUES (2,"Juancho", "2020-03-12", "loro");

INSERT INTO usuarios VALUES ("a4843$#a","Noobmaster696969","pepito","perez","perez","pepito.perez@gamar.cl");
