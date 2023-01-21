/* 
    Sacar la media de sueldos entre todos los vendedores por grupo

*/


SELECT g.nombre, AVG(v.sueldo) media
FROM vendedor v
INNER JOIN grupo g
ON v.grupo_id = g.id
GROUP BY v.grupo_id;