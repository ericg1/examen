<?php

require_once 'Session.php';
class Articulo
{
    private $id;
    private $precio;
    private $nombre;
    private $cantidad;
    private $subtotal;
    private static $idAux = 7;

    public function __construct($id, $precio, $nombre, $cantidad)
    {
        if ($precio < 0) {
            throw new Exception("el precio no puede ser negativo");
        }
        $this->id       = $id;
        $this->precio   = $precio;
        $this->nombre   = $nombre;
        $this->cantidad = $cantidad;
        $this->subtotal = $precio * $cantidad;

        self::$idAux++;

    }
    public static function listar()
    {
        $singleton = Singleton::getSession();
        $lista     = $singleton->listaPersonas();
        return $lista;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getPrecio()
    {
        return $this->precio;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getCantidad()
    {
        return $this->cantidad;
    }
    public function getSubtotal()
    {
        return $this->subtotal;

    }
};