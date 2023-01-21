/* 
    Seleccionar el grupo donde se encuentra el trabajador con mayor salario visualizando el nombre del grupo
 */


SELECT g.nombre, MAX(v.sueldo)
FROM vendedor v
INNER JOIN grupo g
ON v.grupo_id = g.id;

