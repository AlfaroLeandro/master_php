
/*#RENOMBRAR TABLA#*/

ALTER TABLE usuario RENAME TO usuarios_renom;

ALTER TABLE usuarios_renom RENAME TO usuario;


/*#Cambiar el nombre de un atributo#*/

ALTER TABLE usuario CHANGE password pass varchar(255) not null;

/*# Modicificar columna sin cambiar su nombre*/

ALTER TABLE usuario MODIFY apellido char(50) not null;

/*# Añadir columna*/

ALTER TABLE  usuario ADD website varchar(100) not null;

/*# Añadir restriccion a columna*/
/* UNIQUE -> Hace que el campo email en este caso no se pueda repetir*/
ALTER TABLE usuario ADD CONSTRAINT uq_email UNIQUE(email);

/*# Borrar una columna #*/

ALTER TABLE usuario DROP website;





























