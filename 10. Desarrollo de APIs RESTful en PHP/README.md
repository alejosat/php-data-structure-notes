# 10. Desarrollo de APIs RESTful en PHP
Las APIs RESTful permiten que diferentes aplicaciones se comuniquen entre sí a través de HTTP. PHP es muy utilizado para desarrollar este tipo de APIs, especialmente con frameworks como Laravel.

## a. Fundamentos de REST
REST (Representational State Transfer) es un estilo de arquitectura que sigue los principios de:

### Recursos: Todo en una API RESTful es un recurso (usuarios, productos, etc.) y se accede a ellos mediante URLs.
### Métodos HTTP: Se utilizan métodos HTTP estándar para operar sobre los recursos:
- GET: Obtener un recurso.
- POST: Crear un nuevo recurso.
- PUT: Actualizar un recurso existente.
- DELETE: Eliminar un recurso.

### Stateless: Cada solicitud es independiente y no mantiene estado entre ellas.

## b. Creación de una API Simple en PHP

## c. Autenticación en APIs RESTful
Para proteger una API, se pueden implementar varios métodos de autenticación, como:

- API Keys: Claves que los clientes envían con cada solicitud.
- OAuth: Un estándar para delegar acceso seguro a los recursos.
- JWT (JSON Web Tokens): Tokens que el cliente envía en el encabezado de la solicitud.