

CREATE VIEW vista_entradas_con_nombres AS
SELECT e.id, e.titulo, u.nombre usuario, c.nombre categoria
FROM entrada e
INNER JOIN usuario u
ON e.usuario_id = u.id
INNER JOIN categoria c
ON e.categoria_id = c.id;

--Usando show tables aparecen las vistas

DROP VIEW entradas_con_nombres;

--llamo a la vista

SELECT * FROM vista_entradas_con_nombres 
WHERE usuario = 'Leandro';
















