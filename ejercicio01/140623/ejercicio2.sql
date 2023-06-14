--crear base de datos
CREATE DATABASE comercial;
-- se llama la BD
USE comercial;
--se crea la primer tabla
CREATE TABLE oficinas(
    -> id_oficina INT AUTO_INCREMENT PRIMARY KEY,
    -> Ciudad VARCHAR(50) NOT NULL,
    -> Telefono INT UNSIGNED UNIQUE NOT NULL,
    ->  Dirección INT NOT NULL,
    -> Departamento INT UNSIGNED UNIQUE NOT NULL,
    -> Pais VARCHAR(50) NOT NULL,
    -> Creado TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    -> );
