<?php
interface Producto {
    public function operacion(): string;
}

class ProductoConcreto1 implements Producto {
    public function operacion(): string {
        return "ProductoConcreto1";
    }
}

class ProductoConcreto2 implements Producto {
    public function operacion(): string {
        return "ProductoConcreto2";
    }
}

abstract class Creador {
    abstract public function factoryMethod(): Producto;

    public function algunaOperacion(): string {
        $producto = $this->factoryMethod();
        return "Creador: " . $producto->operacion();
    }
}

class CreadorConcreto1 extends Creador {
    public function factoryMethod(): Producto {
        return new ProductoConcreto1();
    }
}

class CreadorConcreto2 extends Creador {
    public function factoryMethod(): Producto {
        return new ProductoConcreto2();
    }
}

function clienteCodigo(Creador $creador) {
    echo $creador->algunaOperacion();
}

clienteCodigo(new CreadorConcreto1()); // Creador: ProductoConcreto1
clienteCodigo(new CreadorConcreto2()); // Creador: ProductoConcreto2
?>
