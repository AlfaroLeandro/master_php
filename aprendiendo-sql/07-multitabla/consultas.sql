
--mostrar las entradas con el nombre del usuario, y el nombre de la categoria

SELECT e.id, e.titulo, u.nombre usuario, c.nombre categoria
FROM entrada e 
JOIN usuario u
ON e.usuario_id = u.id 
JOIN categoria c
ON e.categoria_id = c.id;

-- mostrar el nombre de las categorias y cuantas entradas tienen

SELECT c.nombre ,v1.cantidad
FROM (
    SELECT e.categoria_id, COUNT(e.id) cantidad
    FROM entrada e
    GROUP BY e.categoria_id
) v1
JOIN categoria c
ON c.id = v1.categoria_id;

--/*/*/* otra forma */

SELECT c.nombre, COUNT(e.id) 
FROM categoria c, entrada e
WHERE e.categoria_id = c.id
GROUP BY e.categoria_id;

-- mostrar el email de los usuarios y cuantas entradas tienen

SELECT u.email ,v1.cantidad
FROM (
    SELECT e.usuario_id, COUNT(e.id) cantidad
    FROM entrada e
    GROUP BY e.usuario_id
) v1
JOIN usuario u
ON u.id = v1.usuario_id;

--/*/*/* otra forma */

SELECT u.email, COUNT(e.id)
FROM usuario u, entrada e
WHERE e.usuario_id = u.id
GROUP BY e.usuario_id;


-- ###      INNER JOIN  ###

SELECT e.id, e.titulo, u.nombre, c.nombre
FROM entrada e
INNER JOIN usuario u
ON e.usuario_id = u.id
INNER JOIN categoria c
ON e.categoria_id = c.id;

-- ###      RIGHT JOIN    ###

INSERT INTO categoria VALUES(null, 'plataformas');

UPDATE categoria SET nombre='plataforma' WHERE nombre='plataformas';

SELECT c.nombre, COUNT(e.id)
FROM entrada e
INNER JOIN categoria c
ON e.categoria_id = c.id
GROUP BY e.categoria_id;

--^^ Plataforma no aparece ya que no tiene registros en entrada

--hago el right join

SELECT c.nombre, COUNT(e.id)
FROM entrada e
RIGHT JOIN categoria c
ON e.categoria_id = c.id
GROUP BY e.categoria_id;

-- ahora tomo en cuenta a plataforma por mas que en entrada no tiene registros

--CONSULTA EQUIVALENTE USANDO LEFT JOIN ^^

SELECT c.nombre, COUNT(e.id)
FROM categoria c
LEFT JOIN entrada e
ON e.categoria_id = c.id
GROUP BY e.categoria_id;
