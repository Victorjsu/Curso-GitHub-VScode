<?php
/**
 * Calcula el precio con IVA.
 * @param float $precio Precio sin IVA.
 * @param int $iva Porcentaje de IVA.
 * @return float Precio final.
 */
function precioConIva($precio, $iva) {
    return $precio * (1 + $iva / 100);
}

/**
 * Calcula el precio con IVA.
 * @param float $precio Precio del producto.
 * @param int $descuento Porcentaje del descuento del producto.
 * @return float Precio final.
 */
function descuantoVictor($precio, $descuento) {
    return $precio - ($precio * ($descuento / 100))
}
?>