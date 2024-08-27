<?php
class MiExcepcionPersonalizada extends Exception {
    public function errorMensaje() {
        return "Error en la línea {$this->getLine()} en el archivo {$this->getFile()}: {$this->getMessage()}";
    }
}

try {
    throw new MiExcepcionPersonalizada("Esto es un mensaje de excepción personalizado.");
} catch (MiExcepcionPersonalizada $e) {
    echo $e->errorMensaje();
}
?>
