# 11. Desarrollo de un Proyecto Completo en PHP
Desarrollar un proyecto completo involucra integrar todas las habilidades y conceptos anteriores. Aquí se muestra un ejemplo simplificado de un proyecto que maneja usuarios y publicaciones.

## a. Estructura del Proyecto
- index.php: Archivo principal de la aplicación.
- config.php: Configuraciones generales, como conexión a la base de datos.
- routes.php: Define las rutas y qué controladores manejarán cada ruta.
- controllers/: Carpeta que contiene los controladores.
- models/: Carpeta que contiene los modelos.
- views/: Carpeta que contiene las vistas (si es una aplicación con frontend).

```
/mi_proyecto
    /controllers
        UserController.php
        PostController.php
    /models
        User.php
        Post.php
    /views
        index.php
    config.php
    index.php
    routes.php
```