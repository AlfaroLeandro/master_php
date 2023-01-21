/*
    Visualizar todos los cargos de los vendedores y el numero de vendedores que estan 
    en ese cargo
*/

SELECT cargo, COUNT(*) cantidad
FROM vendedor v
GROUP BY cargo;