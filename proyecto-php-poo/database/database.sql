
CREATE DATABASE tienda_master;

use tienda_master;

CREATE TABLE usuarios(
    id              int auto_increment not null,
    nombre          varchar(100) not null,
    apellidos       varchar(255),
    email           varchar(255) not null,
    password        varchar(255) not null,
    rol             varchar(20),
    imagen          varchar(255),
    CONSTRAINT      pk_usuarios PRIMARY KEY(id),
    CONSTRAINT      uq_email UNIQUE(email)
)ENGINE=InnoDb;

INSERT INTO usuarios VALUES(null, "admin", "admin", "admin@admin.com", "admin", "admin", null);

CREATE TABLE categorias(
    id              int auto_increment not null,
    nombre          varchar(100) not null,
    CONSTRAINT      pk_categorias PRIMARY KEY(id)
)ENGINE=InnoDb;

INSERT INTO categorias VALUES(null, "Manga corta");
INSERT INTO categorias VALUES(null, "Tirantes");
INSERT INTO categorias VALUES(null, "Manga larga");
INSERT INTO categorias VALUES(null, "Sudaderas");


CREATE TABLE productos(
    id              int auto_increment not null,
    categoria_id    int not null,
    nombre          varchar(100) not null,
    descripcion     TEXT,
    precio          float(40,2) not null,
    stock           int not null,
    oferta          varchar(2),
    fecha           date not null,
    imagen          varchar(255),
    CONSTRAINT      pk_productos PRIMARY KEY(id),
    CONSTRAINT      fk_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id)
)ENGINE=InnoDb;


CREATE TABLE pedidos(
    id              int auto_increment not null,
    usuario_id      int not null,
    provincia       varchar(100) not null,
    localidad       varchar(100) not null,
    direccion       varchar(255) not null,
    importe         float(40,2) not null,
    estado          varchar(20) not null,
    fecha           date,
    hora            time,
    CONSTRAINT      pk_pedidos PRIMARY KEY(id),
    CONSTRAINT      fk_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id)
)ENGINE=InnoDb;


CREATE TABLE lineas_pedidos (
    id              int auto_increment not null,
    pedido_id       int not null,
    producto_id     int not null,
    CONSTRAINT      pk_lineas_pedidos PRIMARY KEY(id),
    CONSTRAINT      fk_pedido FOREIGN KEY(pedido_id) REFERENCES pedidos(id),
    CONSTRAINT      fk_producto FOREIGN KEY(producto_id) REFERENCES productos(id)
)ENGINE=InnoDb;

