<?php

/*
 * Tiene q tener 1 funcion
 * La func debe validar un email con filter_var
 * *recoger una var por get y validarla
 * *mostrar el rtdo
 */

function validar_email($email) {
    return isset($email) && filter_var($email, FILTER_VALIDATE_EMAIL);
}


