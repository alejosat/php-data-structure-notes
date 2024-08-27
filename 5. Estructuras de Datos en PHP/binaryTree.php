<?php
class Nodo {
    public $dato;
    public $izquierdo;
    public $derecho;

    public function __construct($dato) {
        $this->dato = $dato;
        $this->izquierdo = null;
        $this->derecho = null;
    }
}

class ArbolBinario {
    private $raiz;

    public function __construct() {
        $this->raiz = null;
    }

    public function insertar($dato) {
        $nuevoNodo = new Nodo($dato);
        if ($this->raiz === null) {
            $this->raiz = $nuevoNodo;
        } else {
            $this->insertarNodo($this->raiz, $nuevoNodo);
        }
    }

    private function insertarNodo($nodo, $nuevoNodo) {
        if ($nuevoNodo->dato < $nodo->dato) {
            if ($nodo->izquierdo === null) {
                $nodo->izquierdo = $nuevoNodo;
            } else {
                $this->insertarNodo($nodo->izquierdo, $nuevoNodo);
            }
        } else {
            if ($nodo->derecho === null) {
                $nodo->derecho = $nuevoNodo;
            } else {
                $this->insertarNodo($nodo->derecho, $nuevoNodo);
            }
        }
    }

    public function imprimirEnOrden($nodo = null) {
        if ($nodo === null) {
            $nodo = $this->raiz;
        }
        if ($nodo->izquierdo !== null) {
            $this->imprimirEnOrden($nodo->izquierdo);
        }
        echo $nodo->dato . "<br>";
        if ($nodo->derecho !== null) {
            $this->imprimirEnOrden($nodo->derecho);
        }
    }
}

$arbol = new ArbolBinario();
$arbol->insertar(5);
$arbol->insertar(3);
$arbol->insertar(7);
$arbol->insertar(4);
$arbol->imprimirEnOrden(); // 3 4 5 7
?>
