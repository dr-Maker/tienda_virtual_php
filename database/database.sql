CREATE DATABASE db_tienda_virtual;
USE db_tienda_virtual

CREATE TABLE usuarios( 
id int not null AUTO_INCREMENT, 
nombre varchar(100) not null, 
apellidos varchar(255) not null,
email varchar(255) not null, 
pass varchar(255) not null, 
rol varchar(20) not null, 
imagen varchar(255) not null, 
PRIMARY KEY(id) 
)

INSERT INTO usuarios VALUES(NULL, 'Admin', 'Admin', 'admin@admin.com', 'contraseña', 'admin', null);

CREATE TABLE categorias(
id int(255) auto_increment not null, 
nombre varchar(100) not null, 
PRIMARY KEY(id) 
)

INSERT INTO categorias VALUES(null, 'Manga corta');
INSERT INTO categorias VALUES(null, 'Tirantes');
INSERT INTO categorias VALUES(null, 'Manga larga');
INSERT INTO categorias VALUES(null, 'Sudaderas');

CREATE TABLE productos
(
id              int(255) auto_increment not null,
categoria_id    int(255) not null,
nombre          varchar(100) not null,
descripcion     text,
precio          float(100,2) not null,
stock           int(255) not null,
oferta          varchar(2),
fecha           datetime not null,
imagen          varchar(255),
PRIMARY KEY(id),
FOREIGN KEY (categoria_id)  REFERENCES categorias(id)
)


CREATE TABLE pedidos(
id              int(255) auto_increment not null,
usuario_id      int(255) not null,
provincia       varchar(100) not null,
localidad       varchar(100) not null,
direccion       varchar(255) not null,
coste           float(200,2) not null,
estado          varchar(20) not null,
fecha           date,
hora            time,
PRIMARY KEY(id),
FOREIGN KEY(usuario_id) REFERENCES usuarios(id)
)

CREATE TABLE lineas_pedidos(
id              int(255) auto_increment not null,
pedido_id       int(255) not null,
producto_id     int(255) not null,
unidades        int(255) not null,
PRIMARY KEY(id),
FOREIGN KEY(pedido_id) REFERENCES pedidos(id),
FOREIGN KEY(producto_id) REFERENCES productos(id)
)


