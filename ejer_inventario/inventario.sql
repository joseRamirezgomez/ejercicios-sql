CREATE DATABASE inventario_almacen;
USE inventario_almacen;
---tabla 1
CREATE TABLE Categorias(
    -> id_categorias INT AUTO_INCREMENT PRIMARY KEY,
    -> Nombre VARCHAR(50) NOT NULL,
    -> Descripcion VARCHAR(50) NOT NULL
    -> );
    ---- add datos a la tabla 1 
INSERT INTO Categorias(Nombre, Descripcion) VALUES
--tabla 2
 CREATE TABLE Productos(
    id_productos INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(50) NOT NULL,
    Descripcion VARCHAR(200) NOT NULL,
    Precio DECIMAL(10, 2) UNSIGNED NOT NULL CHECK (Precio >= 0),
    Cant_disponible BIGINT NOT NULL,
    id_categorias INT NOT NULL
 );
 -- add datos 
 INSERT INTO Productos(Nombre, Descripcion, Precio, Cant_disponible, id_categorias) VALUES
('televisor', 't.v 70" led', '5000000', '4', '3');
--- agregar la llave foranea a una tabla
ALTER TABLE Entradas ADD FOREIGN KEY (id_productos) REFERENCES Productos(id_productos);
 --tabla3
 CREATE TABLE Entradas(
    id_entrdas INT AUTO_INCREMENT PRIMARY KEY,
    id_productos INT NOT NULL,
    Cantidad BIGINT NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
 );

 -- add datos tabla3 
 INSERT INTO Entradas(id_productos, Cantidad) VALUES
 ('2', '5');

 --TABLA 4
CREATE TABLE Provedores(
    id_provedores INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(50) NOT NULL,
    Email VARCHAR(50) UNIQUE NOT NULL,
    Telefono BIGINT UNIQUE NOT NULL,
    id_productos INT NOT NULL
);

--tabla 5
CREATE TABLE Salidas(
    id_salidas INT AUTO_INCREMENT PRIMARY KEY,
    id_productos INT NOT NULL,
    Cantidad BIGINT NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

