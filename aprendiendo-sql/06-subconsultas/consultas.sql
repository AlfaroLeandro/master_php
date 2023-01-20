
INSERT INTO usuario VALUES(null, 'Micho', 'asdsa', 'email@loco.com', 'asd123', CURDATE());

-- Mostrar los usuarios que no tienen entradas

SELECT * FROM usuario u WHERE 
u.id IN(
    SELECT e.usuario_id FROM entrada e
);



--valido cosas en la subconsulta
SELECT * FROM usuario u WHERE 
u.id IN(
    SELECT e.usuario_id FROM entrada e
    WHERE YEAR(u.fecha)>2019
);


--Sacar usuarios q tengan alguna entrada que en su titulo hable de GTA

SELECT * 
FROM usuario u 
WHERE u.id IN(
    SELECT e.usuario_id 
    FROM entrada e
    WHERE e.titulo like "%GTA%"
);

--todas las entradas en concreto pasandole una categoria -> accion

SELECT *
FROM entrada
WHERE categoria_id =
(
    SELECT id
    FROM categoria
    WHERE nombre like '_cci_n'
);

--Mostrar las categorias con 3 o mas entradas

SELECT *
FROM categoria
WHERE id = ANY
(
    SELECT categoria_id
    FROM entrada
    GROUP BY categoria_id
    HAVING COUNT(titulo) >=3
);

--Mostrar los usuarios que sacaron una entrada un martes
--En SQL la semana empieza el DOMINGOOOOOOOOO
SELECT *
FROM usuario
WHERE id = ANY
(
    SELECT e.usuario_id
    FROM entrada e
    WHERE DAYOFWEEK(e.fecha) = 3
);

--Mostrar al usuario que saco mas entradas

INSERT INTO entrada VALUES(null, 1, 3, 'Novedades de FIFA 23', 'Review de FIFA 23', CURDATE());


SELECT *
FROM usuario u
WHERE u.id IN
(
    SELECT usuario_id
    FROM entrada
    GROUP BY usuario_id
    HAVING COUNT(id) >= ALL
        (
            SELECT COUNT(id)
            FROM entrada
            GROUP BY usuario_id
        )
);

-- mostrar las categorias sin entradas

SELECT *
FROM categoria
WHERE id NOT IN
(
    SELECT categoria_id
    FROM entrada
);
