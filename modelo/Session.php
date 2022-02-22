<?php
session_start();
require_once 'producto.php';
class Session
{
    private function __construct()
    {}

    public static function getSession()
    {
        $lista = [];
        if (!isset($_SESSION['lista'])) {
            $lista = [0 => new Articulo(5, 25, "harina", 5),
                1 => new Articulo(7, 30, "azucar", 3),
                2 => new Articulo(8, 90, "aceite", 1)];
            $_SESSION['lista'] = serialize($lista);
            $_SESSION['id']    = 6;
        }
        return new Session();
    }

    public function listar()
    {
        $lista = unserialize($_SESSION['lista']);
        return $lista;
    }

    public function vaciar()
    {
        unset($_SESSION['lista']);
    }

};