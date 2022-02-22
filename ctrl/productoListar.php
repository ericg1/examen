<?php

require_once '../modelo/Producto.php';
require_once '../modelo/Session.php';

$session  = Session::getSession();
$lista    = $session->listar();
$totalPro = 0;
$total    = 0;
for ($i = 0; $i < count($lista); $i++) {
    $Pro = $lista[$i];
    $totalPro += floatval($Pro->getSubtotal());
}
$total = $totalPro * 1.22;
require_once '../vistas/productosListar.php';