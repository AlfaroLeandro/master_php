/* 
    Mostrar listado de clientes id y nombre. Mostrar tambien nro de vendedor y su nombre
 */

SELECT c.id, c.nombre, v.id, v.nombre
FROM cliente c
INNER JOIN vendedor v
ON c.vendedor_id = v.id;

