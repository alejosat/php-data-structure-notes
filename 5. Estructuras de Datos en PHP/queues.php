<?php
class Cola {
    private $elementos = [];

    public function encolar($elemento) {
        array_push($this->elementos, $elemento);
    }

    public function desencolar() {
        return array_shift($this->elementos);
    }

    public function imprimir() {
        foreach ($this->elementos as $elemento) {
            echo $elemento . "<br>";
        }
    }
}

$cola = new Cola();
$cola->encolar("A");
$cola->encolar("B");
$cola->encolar("C");
$cola->imprimir(); // A B C
$cola->desencolar(); // Quita "A"
$cola->imprimir(); // B C
?>
