/* 
    Visualizar los apellidos de los vendedores, su fecha de alta y su nro de grupo
    Ordenados por la fecha de alta de > a <. Mostrar los ultimos 4
 */

SELECT apellido, fecha_alta, grupo_id
FROM vendedor
ORDER BY fecha_alta DESC 
LIMIT 4;