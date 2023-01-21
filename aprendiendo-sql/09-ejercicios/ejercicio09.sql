/*
Mostrar todos los vendedores del grupo nro 2 ordenados por salariod de > a <
*/

SELECT * 
FROM vendedor
WHERE grupo_id=2
ORDER BY sueldo DESC;