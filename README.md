Laravel Meetup Api Demo
=======================

## API en 5 minutos con Laravel 4.1.*, @ Laravel Buenos Aires


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

* Repo Pattern
* Transformations (para bindear respuesta)
* Cache (queries + response)
* Tests! (phpunit o http://frisbyjs.com/)


## Setup

```
git clone https://github.com/j0an/LaravelMeetupApiDemo.git LaravelMeetupApiDemo
vagrant up
vagrant ssh
cd /vagrant
composer install
```

configurar acceso a base de datos (y luego)

```
php artisan migrate --seed
```
