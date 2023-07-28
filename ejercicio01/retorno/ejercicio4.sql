Copy code
CREATE TABLE ventas(
    id_venta INT AUTO_INCREMENT PRIMARY KEY,
    id_cliente INT NOT NULL,
    Fecha_venta TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    Total_venta INT NOT NULL,
    ---LLAMA LA PRIMARY KEY DE OTRA TABLA EN ESTE CASO CLIENTE
    FOREIGN KEY (id_cliente) REFERENCES Cliente(id_cliente)
);

CREATE TABLE det_ventas(
    id_detalle INT AUTO_INCREMENT PRIMARY KEY,
    id_venta INT NOT NULL,
    id_producto INT NOT NULL,
    cantidad INT NOT NULL,
    Precio_unitario INT NOT NULL,
    FOREIGN KEY (id_venta) REFERENCES ventas(id_venta)
);
--ALTER TABLE det_ventas ADD FOREIGN KEY (id_producto) REFERENCES productos(id_producto);
---Agrega despues de la tabla estar lista -LLAMA LA PRIMARY KEY DE OTRA TABLA
CREATE TABLE productos(
    id_producto INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    Descripcion VARCHAR(50) NOT NULL,
    Precio INT NOT NULL
    );

---DATOS DE TABLA CLIENTE
    INSERT INTO Cliente (Nombre, Apellido, Direccion, Telefono, Correo_Electronico) VALUES
('Ana', 'Gómez', '456', '3001234567', 'ana@example.com'),
('Pedro', 'López', '789', '3109876543', 'pedro@example.com'),
('María', 'Martínez', '987', '3204567890', 'maria@example.com'),
('Carlos', 'Rodríguez', '654', '3012345678', 'carlos@example.com'),
('Laura', 'Hernández', '321', '3145678901', 'laura@example.com'),
('Luis', 'García', '567', '3156789012', 'luis@example.com'),
('Sofía', 'Díaz', '234', '3167890123', 'sofia@example.com'),
('Javier', 'Sánchez', '789', '3178901234', 'javier@example.com'),
('Marta', 'Romero', '876', '3189012345', 'marta@example.com'),
('Andrés', 'Fernández', '567', '3190123456', 'andres@example.com'),
('Carolina', 'Gutiérrez', '123', '3223456789', 'carolina@example.com'),
('Pablo', 'Ramírez', '456', '3234567890', 'pablo@example.com'),
('Valentina', 'Reyes', '654', '3245678901', 'valentina@example.com'),
('Gabriel', 'Ortiz', '321', '3256789012', 'gabriel@example.com'),
('Daniela', 'Vargas', '876', '3267890123', 'daniela@example.com'),
('Hugo', 'Silva', '234', '3278901234', 'hugo@example.com'),
('Isabella', 'Molina', '789', '3289012345', 'isabella@example.com'),
('Sebastián', 'Chávez', '567', '3290123456', 'sebastian@example.com'),
('Natalia', 'Guerrero', '123', '3006543210', 'natalia@example.com');

    ----datos de la tabla ventas 
    INSERT INTO ventas (id_cliente, Total_venta) VALUES
    -> (1, 100),
    -> (2, 200),
    -> (3, 150),
    -> (4, 300),
    -> (1, 250),
    -> (5, 120),
    -> (2, 180),
    -> (6, 400),
    -> (7, 210),
    -> (3, 350),
    -> (8, 230),
    -> (9, 500),
    -> (10, 270),
    -> (1, 180),
    -> (11, 320),
    -> (12, 280),
    -> (13, 190),
    -> (2, 400),
    -> (14, 220),
    -> (15, 310),
    -> (4, 290),
    -> (16, 360),
    -> (3, 180),
    -> (17, 150),
    -> (18, 280);
    --- datos tabla det_ventas
    mysql> INSERT INTO det_ventas (id_venta, id_producto, cantidad, Precio_unitario) VALUES
    -> (1, 2, 5, 2000),
    -> (2, 3, 3, 1500),
    -> (3, 1, 2, 1800),
    -> (4, 4, 4, 2200),
    -> (5, 5, 1, 3000),
    -> (6, 2, 3, 2000),
    -> (7, 1, 2, 1800),
    -> (8, 4, 5, 2200),
    -> (9, 5, 2, 3000),
    -> (10, 3, 4, 1500),
    -> (11, 1, 1, 1800),
    -> (12, 2, 3, 2000),
    -> (13, 5, 2, 3000),
    -> (14, 4, 4, 2200),
    -> (15, 3, 1, 1500),
    -> (16, 1, 2, 1800),
    -> (17, 2, 5, 2000),
    -> (18, 4, 3, 2200),
    -> (19, 5, 2, 3000),
    -> (20, 3, 1, 1500),
    -> (21, 1, 3, 1800),
    -> (22, 2, 4, 2000),
    -> (23, 4, 2, 2200),
    -> (24, 5, 5, 3000),
    -> (25, 3, 3, 1500),
    -> (26, 1, 2, 1800);