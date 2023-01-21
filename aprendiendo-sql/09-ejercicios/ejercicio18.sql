/* 
    Listar los clientes que han hecho algun encargo del automovil 'Mercedes Ranchera'
 */

SELECT e.cliente_id
FROM encargo e
INNER JOIN vehiculo v
ON e.automovil_id = v.id
WHERE v.modelo = 'Mercedes Ranchera';
