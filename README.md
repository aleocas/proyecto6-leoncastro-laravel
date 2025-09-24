# Proyecto 6: API RESTful de Blog con PHP y Laravel

## Descripción del proyecto

Este proyecto consiste en el diseño e implementación de una **API RESTful HTTP** para la gestión de artículos de un blog y sus comentarios asociados. La aplicación permite realizar operaciones CRUD tanto sobre los **artículos** como sobre sus **comentarios**, manteniendo una estructura clara de relaciones entre entidades.

El desarrollo se ha llevado a cabo en **dos versiones** completamente funcionales:

- **Versión 1**: Implementación en **PHP puro** - no subida
- **Versión 2**: Implementación en **Laravel**

Ambas versiones permiten interactuar con la API mediante herramientas como **HTTPie** o **Guzzle**, devolviendo respuestas estructuradas en formato **JSON**, 
cumpliendo los estándares REST.

---

## Modelo de datos

### Artículo (`articulos`)
- `id`: Identificador único
- `titulo`: Título del artículo
- `contenido`: Cuerpo del artículo
- `fecha_publicacion`: Fecha y hora de publicación (ISO 8601)
- `autor`: Nombre del autor

### Comentario (`comentarios`)
- `id`: Identificador único
- `contenido`: Texto del comentario
- `fecha_publicacion`: Fecha y hora de publicación
- `autor`: Nombre del autor del comentario
- `articulo_id`: Clave foránea (asociado a un artículo)

> Relación: **1 artículo → N comentarios**

---

## Tecnologías utilizadas

- PHP 8.x
- Laravel 10.x
- MySQL / MariaDB
- Guzzle (cliente HTTP)
- HTTPie (para pruebas de terminal)
- Composer
- Artisan (para migraciones y seeders)

---

## Funcionalidades del servicio web

### Artículos

| Método | Ruta                          | Acción                             |
|--------|-------------------------------|------------------------------------|
| GET    | `/articulos`                  | Ver todos los artículos            |
| POST   | `/articulos`                  | Crear un nuevo artículo            |
| GET    | `/articulos/{id}`             | Ver un artículo específico         |
| PATCH  | `/articulos/{id}`             | Editar parcialmente un artículo    |
| DELETE | `/articulos/{id}`             | Eliminar un artículo               |

### Comentarios

| Método | Ruta                                         | Acción                                     |
|--------|----------------------------------------------|--------------------------------------------|
| GET    | `/comentarios`                               | Ver todos los comentarios                  |
| GET    | `/comentarios/{id}`                          | Ver un comentario específico               |
| POST   | `/articulos/{id}/comentarios`                | Añadir un comentario a un artículo         |
| GET    | `/articulos/{id}/comentarios`                | Ver comentarios de un artículo específico  |
| PUT    | `/comentarios/{id}`                          | Editar completamente un comentario         |
| DELETE | `/comentarios/{id}`                          | Eliminar un comentario                     |

---

## Pruebas con HTTPie

# Ver todos los artículos
https GET http://aleocas.alwaysdata.net/proyecto6/public/api/articulos

# Crear un nuevo artículo
https POST http://aleocas.alwaysdata.net/proyecto6/public/api/articulos \
  titulo='Título de ejemplo' \
  contenido='Contenido del artículo' \
  fecha_publicacion='2023-03-15T08:00:00' \
  autor='Nombre Autor'

# Ver un artículo por ID
https GET http://aleocas.alwaysdata.net/proyecto6/public/api/articulos/4

# Ver todos los comentarios
https GET http://aleocas.alwaysdata.net/proyecto6/public/api/comentarios

# Añadir comentario a un artículo
https POST http://aleocas.alwaysdata.net/proyecto6/public/api/articulos/6/comentarios \
  contenido='Comentario nuevo' \
  fecha_publicacion='2023-03-16T10:00:00' \
  autor='Comentarista'

# Ver comentarios de un artículo
https GET http://aleocas.alwaysdata.net/proyecto6/public/api/articulos/6/comentarios

# Editar comentario por completo
https PUT http://aleocas.alwaysdata.net/proyecto6/public/api/comentarios/5 \
  contenido='Comentario actualizado'

# Eliminar comentario
https DELETE http://aleocas.alwaysdata.net/proyecto6/public/api/comentarios/5

# Eliminar artículo
https DELETE http://aleocas.alwaysdata.net/proyecto6/public/api/articulos/4
