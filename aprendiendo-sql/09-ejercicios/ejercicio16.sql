/* 
    Listar de clientes atendidos por el vendedor 'David Lopez'
*/

SELECT c.nombre
FROM vendedor v
INNER JOIN cliente c
ON c.vendedor_id = v.id
WHERE v.nombre = 'David'
and v.apellido = 'Lopez';

UPDATE cliente SET vendedor_id = 4 WHERE id=3;
