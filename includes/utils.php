<?php

/**
 * Esta funcion formatea una cadena en un formato de numero
 * telefonico valido para Mexico
 * 
 * @param string $telefono
 * @return string $telefonoFormateado
 */

function glassePhoneNumber($telefono)
{
    // Eliminar cualquier caracter que no sea un número
    $telefono = preg_replace('/[^0-9]/', '', $telefono);

    // Verificar la longitud del número de teléfono
    if (strlen($telefono) == 10) {
        // Formatear como xx xxxx xxxx
        $telefonoFormateado = substr($telefono, 0, 2) . ' ' . substr($telefono, 2, 4) . ' ' . substr($telefono, 6, 4);
        return $telefonoFormateado;
    } else {
        // Si la longitud no es válida, devolver el número sin formato
        return $telefono;
    }
}
