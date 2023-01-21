/* 
    mostrar los 2 clientes con mayor numero de pedidos e indicar cuantos pedidos han hecho

*/

--forma fea

SELECT cliente_id, SUM(cantidad) cantidad
FROM encargo e
GROUP BY cliente_id
ORDER BY cantidad DESC LIMIT 2;


--forma piola

SELECT cliente_id, SUM(cantidad) cantidad
FROM encargo e
GROUP BY cliente_id
HAVING SUM(cantidad) >= ALL (
    SELECT SUM(cantidad) cantidad
    FROM encargo e
    GROUP BY cliente_id
);

