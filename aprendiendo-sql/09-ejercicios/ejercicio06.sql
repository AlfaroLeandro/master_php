/*
visualizar el nombre y los apellidos de los vendedores en una misma columna y 
su fecha de registro y que dia de la semana que era cuando se registraron
*/

SELECT CONCAT(nombre,' ', apellido) nya, CONCAT(fecha_alta, ' ', DAYNAME(fecha_alta)) 'fecha alta | dia de la semana'
FROM vendedor;