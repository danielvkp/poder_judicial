# Proyecto

## Requerimientos

- php >= 7.3

## Instalacion

Clonar Proyecto
```
git clone https://github.com/danielvkp/poder_judicial.git
```

Instalar Dependencias via Composer
```
$ composer install
```

Copiar Configuarcion del Entorno .env
```
$ cp .env
```

Generar la llave de la aplicación
```
$ php artisan key:generate
```

Migrar y Poblar la Base de Datos
```
$ php artisan migrate

$ php artisan db:seed
```

```
user:admin@admin.com
pass:admin
```

Para reiniciar la base de datos e incluir el usuario administrador
```
$ php artisan migrate:fresh --seed
```
## Consideraciones

- no he puesto validaciones para registrar usuarios

- todo funciona solo por relaciones, por lo que si cambio el valor de un producto una vez hecha la factura, tomara el valor de la ultima edicion

- no he puesto validaciones para no eliminar productos sin que las relaciones se vean afectadas

- en el menu el admin acceder a los 2 primeros items, lista de facturas y lista Productos

- el usuario solo puede acceder a comprar.
