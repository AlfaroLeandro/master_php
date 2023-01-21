/* 
    Listar todos los encargos realizados con la marca del coche y el nombre del cliente
 */

SELECT v.marca, c.nombre
FROM encargo e
INNER JOIN vehiculo v
ON e.automovil_id = v.id
INNER JOIN cliente c
ON e.cliente_id = c.id;



