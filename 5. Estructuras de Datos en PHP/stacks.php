<?php
class Pila {
    private $elementos = [];

    public function apilar($elemento) {
        array_push($this->elementos, $elemento);
    }

    public function desapilar() {
        return array_pop($this->elementos);
    }

    public function imprimir() {
        foreach (array_reverse($this->elementos) as $elemento) {
            echo $elemento . "<br>";
        }
    }
}

$pila = new Pila();
$pila->apilar("A");
$pila->apilar("B");
$pila->apilar("C");
$pila->imprimir(); // C B A
$pila->desapilar(); // Quita "C"
$pila->imprimir(); // B A
?>
