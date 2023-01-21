/* 
 Obtener los vendedores con 2 o mas clientes
 */

SELECT vendedor_id, COUNT(*) cantidad_clientes
FROM cliente
GROUP BY vendedor_id
HAVING COUNT(*) >= 2;

