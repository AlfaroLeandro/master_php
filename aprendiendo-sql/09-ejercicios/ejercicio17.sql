/* 
    Obtener un listado con los encargos realizados por el cliente 'Fruteria Antonia Inc'
 */

SELECT e.id
FROM encargo e
INNER JOIN cliente c
ON e.cliente_id = c.id
WHERE c.nombre = 'Fruteria Antonia Inc';

