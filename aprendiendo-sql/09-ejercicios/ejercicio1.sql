
/*
1. Diseñar y crear la base de datos de un concesionario

*/

CREATE DATABASE IF NOT EXISTS concesionario;

USE concesionario;

CREATE TABLE vehiculo (
    id int auto_increment not null,
    modelo varchar(100) not null,
    marca  varchar(100),
    precio int not null,
    stock int not null, 
    CONSTRAINT pk_vehiculo PRIMARY KEY (id)
)ENGINE=InnoDB;

--stock int not null not null,

CREATE TABLE grupo (
    id int auto_increment not null,
    nombre varchar(100) not null,
    ciudad varchar(100),
    CONSTRAINT pk_grupo PRIMARY KEY (id)
)ENGINE=InnoDB;

CREATE TABLE vendedor (
    id int auto_increment not null,
    grupo_id int not null,
    jefe int,
    nombre varchar(100) not null,
    apellido varchar(100),
    cargo varchar(50),
    fecha_alta date,
    sueldo float(20,2),
    comision float(10,2),
    CONSTRAINT pk_vendedor PRIMARY KEY (id),
    CONSTRAINT fk_grupo FOREIGN KEY (grupo_id) REFERENCES grupo(id),
    CONSTRAINT fk_jefe FOREIGN KEY (jefe) REFERENCES vendedor(id)
)ENGINE=InnoDB;

CREATE TABLE cliente (
    id int auto_increment not null,
    vendedor_id int,
    nombre varchar(150) not null,
    ciudad varchar(100),
    gastado float(50,2),
    fecha_alta date,
    CONSTRAINT pk_cliente PRIMARY KEY (id),
    CONSTRAINT fk_vendedor FOREIGN KEY (vendedor_id) REFERENCES vendedor(id)
)ENGINE=InnoDB;

CREATE TABLE encargo (
    id int auto_increment not null,
    cliente_id int not null,
    automovil_id int not null,
    cantidad int,
    fecha date,
    CONSTRAINT pk_encargo PRIMARY KEY (id),
    CONSTRAINT fk_cliente FOREIGN KEY (cliente_id) REFERENCES cliente(id)
)ENGINE=InnoDB;

