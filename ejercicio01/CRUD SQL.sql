-- hemos utilizado estas palabras reservadas;;;
-- CREATE DATABASE (para crear una nueva BD
 CREATE DATABASE <db>;
 --SHOW DATABASE (para visualizar las BD creadas)
 SHOW DATABASES;
 -- USE (para hacer uso de una BD específica)
 USE <db>;
 -- SHOW TABLES (para visualizar las tablas creadas en la BD usada)
SHOW TABLES;
CREATE TABLE Cliente(
     id_cliente INT AUTO_INCREMENT PRIMARY KEY,
     Nombre VARCHAR(50) NOT NULL,
     Apellido VARCHAR(50) NOT NULL,
     Direccion INT NOT NULL,
     Telefono INT NOT NULL,
     Correo_Electronico VARCHAR(50) NOT NULL
     );
