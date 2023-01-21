/* 
    Visualizar las unidades totales vendidades de cada coche a cada cliente mostrando
    nro de prod, nro de cliente y la suma de las unidades
*/

SELECT c.nombre, v.modelo, SUM(cantidad) cantidad_total
FROM encargo e
INNER JOIN cliente c
ON e.cliente_id = c.id
INNER JOIN vehiculo v
ON e.automovil_id = v.id
GROUP BY cliente_id, automovil_id;

