
/*INSERTAR NUEVOS REGISTROS*/
/*hay que pasar la cantidad de parametros exacta a la cantidad de campos que tiene la tabla*/

INSERT INTO usuarios VALUES(null, "Leandro", "ALFARO", "leandro@leandro.com", "1234", "2023-01-19");
INSERT INTO usuarios VALUES(null, "Antonio", "Aea", "Antonio@Antonio.com", "1234", "2021-10-19");
INSERT INTO usuarios VALUES(null, "vava", "Lopez", "vava@vava.com", "1234", "2019-05-18");

/*Como insertar filas solo con ciertas columnas*/

INSERT INTO usuario(
    email,
    password
)
VALUES (
    'tata@tata.com',
    '1234'
);