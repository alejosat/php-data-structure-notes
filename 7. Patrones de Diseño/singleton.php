<?php
class Singleton {
    private static $instancia;

    private function __construct() {}

    public static function getInstancia() {
        if (self::$instancia === null) {
            self::$instancia = new self();
        }
        return self::$instancia;
    }
}

$instancia1 = Singleton::getInstancia();
$instancia2 = Singleton::getInstancia();

var_dump($instancia1 === $instancia2); // true
?>
