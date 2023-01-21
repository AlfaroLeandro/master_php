/*
8. visualizar todos los vh cuya marca exista la letra a y que empiecen por f
y cuyo modelo empiece por f 
*/

SELECT *
FROM vehiculo
WHERE LOWER(marca) like "f%a%"
and LOWER(modelo) like "f%";
