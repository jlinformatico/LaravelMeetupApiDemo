Laravel Meetup Api Demo
=======================

## API en _(mas o menos)_ 10 minutos con Laravel 4.1.*, @ Laravel Buenos Aires


### Pasos

1. Setup Laravel (install + configs)
2. Generar Migrations & Seeds
3. Crear Models
4. Crear relationships
5. Crear controllers (index/show)
6. Crear routes => resources => Nestear con un prefix
7. Crear ApiController y agregar metodo response()
8. Generar Auth HTTP via filters.php (migration + seed de users, Auth::basic('username'))

### Que sigue/falta?
* Aplicar Repo Pattern
* Transformations (bindear respuesta)
* Tests! (phpunit y/o http://frisbyjs.com/ y/o https://www.runscope.com/)

### Funciones para v2.
* Rate limits (hint Cache::add('key', 0, 60); Cache::increment('key');)
* Crear post (POST /v1/api/post {data})
* Update de post (PUT /v1/api/post/{id} {data})
* Borrado de post (DELETE /v1/api/post/{id})
* CUD de autores
* CUD de comentarios
* Cache (queries + response)
* Explode error codes (201, 403, 401, etc)


## Setup

```
git clone https://github.com/j0an/LaravelMeetupApiDemo.git LaravelMeetupApiDemo
cd LaravelMeetupApiDemo
vagrant up
vagrant ssh
cd /vagrant
composer install
```
Configurar base de datos en app/config/database.php, tocar vHosts de apache, y...
```
php artisan migrate --seed
```



## Documentacion

### Autenticación

La API usa autenticación basica de HTTP para todos los request. Es necesario pasarle un user/password valido (que se encuentran en la table "users" de la base de datos)

Para probar su funcionamiento se puede usar este comando.

`curl -u "user1:1234" http://localapidomain.dev/api/v1/post`

### Formato de respuesta

La API devuelve siempre formato JSON (o JSONP si se le pasa un callback en la url  ?callback=JSON_CALLBACK)


### Codigos de resupuesta

* **200:** Request OK
* **404:** Model not found

## API Endpoints

### GET /api/v1/post

Todos los posts

### GET /api/v1/post/{id}

Post by ID

### GET /api/v1/author

Todos los autores

### GET /api/v1/author/{id}

Autor by ID

### GET /api/v1/comment

Todos los comentarios

### GET /api/v1/comment/{id}

Comentario by ID
