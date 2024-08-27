<?php

class Nodo {
    public $dato;
    public $siguiente;

    public function __construct($dato) {
        $this->dato = $dato;
        $this->siguiente = null;
    }
}

class ListaEnlazada {
    private $cabeza;

    public function __construct() {
        $this->cabeza = null;
    }

    public function agregar($dato) {
        $nuevoNodo = new Nodo($dato);
        if ($this->cabeza === null) {
            $this->cabeza = $nuevoNodo;
        } else {
            $actual = $this->cabeza;
            while ($actual->siguiente !== null) {
                $actual = $actual->siguiente;
            }
            $actual->siguiente = $nuevoNodo;
        }
    }

    public function imprimir() {
        $actual = $this->cabeza;
        while ($actual !== null) {
            echo $actual->dato . " -> ";
            $actual = $actual->siguiente;
        }
        echo "null<br>";
    }
}

$lista = new ListaEnlazada();
$lista->agregar(1);
$lista->agregar(2);
$lista->agregar(3);
$lista->imprimir(); // 1 -> 2 -> 3 -> null
?>
