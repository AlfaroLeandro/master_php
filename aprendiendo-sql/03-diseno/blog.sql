
CREATE TABLE usuario (
    id int auto_increment not null,
    nombre varchar(100) not null,
    apellido varchar(100) not null,
    email varchar(255) not null,
    password varchar(255) not null,
    fecha date not null,
    CONSTRAINT pk_usuario PRIMARY KEY (id),
    CONSTRAINT uq_email UNIQUE(email)
)ENGINE=innoDb;

/*ENGINE-> motor de base de datos a usar, innoDb -> motor por defecto*/
/*respetar la integridad referencial y asegurar que las claves foraneas existan */
/*Si la bd hace mucho INSERT/SELECT -> mejor performance con innoDb*/
/*MyISAM: mayor velocidad en SELECT que innoDb -> aplicaciones con mucho SELECT */
/* ^^ no mantiene integridad referencial -> no sirve usar PK y FK*/

CREATE TABLE categoria (
    id int auto_increment not null,
    nombre varchar(255) not null,
    CONSTRAINT pk_categoria PRIMARY KEY (id)
)ENGINE=innoDb;

CREATE TABLE entrada (
     id int auto_increment not null,
     usuario_id int not null,
     categoria_id int not null,
     titulo varchar(255) not null,
     descripcion MEDIUMTEXT,
     fecha date not null,
     CONSTRAINT pk_entrada PRIMARY KEY (id),
     CONSTRAINT fk_usuario FOREIGN KEY (usuario_id) REFERENCES usuario(id) ON UPDATE CASCADE,
     CONSTRAINT fk_categoria FOREIGN KEY (categoria_id) REFERENCES categoria(id) ON DELETE CASCADE
)ENGINE=innoDb;

/* ON DELETE CASCADE: cuando se borre el registro, que se borre el registro con el que esta relacionado*/
/* ON UPDATE CASCADE: ^^ pero al actualizar*/
/* ON DELETE SET NULL: cuando borro el registro al que apuntaba la clave foranea, que este se ponga en null*/
/* ON DELETE SET DEFAULT: ^^ pero con un valor en particular*/
/* ON DELETE NO ACTION: que no haga nada*/





























