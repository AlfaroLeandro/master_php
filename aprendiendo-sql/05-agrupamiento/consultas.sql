--Contar la cantidad de entradas de cada categoria

SELECT COUNT(titulo), categoria_id FROM entrada GROUP BY categoria_id;

--Contar la cantidad de entradas de cada categoria >= 4 titulos

SELECT COUNT(titulo), categoria_id FROM entrada 
GROUP BY categoria_id 
HAVING COUNT(titulo) >=4;

/* FUNCIONES DE AGRUPAMIENTO

    COUNT
    AVG
    MAX
    MIN
    SUM
*/

--Media de cuantas entradas tengo por categoria

SELECT AVG(id) FROM entrada;