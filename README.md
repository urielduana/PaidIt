# PaidIt

Descripción del proyecto.

## Requisitos previos

- PHP 8.1 o superior
- Composer
- MySQL

## Instalación

1. Clonar el repositorio:

 ``git clone <url_del_repositorio>``
 
2. Instalar las dependencias de PHP:

 ``composer install``
 
3. Configurar la base de datos:

Crea una base de datos MySQL en tu entorno local y configura las credenciales en el archivo `.env`.

4. Generar la clave de la aplicación:

``php artisan key:generate``

5. Migrar la base de datos:

``php artisan migrate``

## Uso

Para iniciar el servidor de desarrollo, ejecuta el siguiente comando en la terminal:

``php artisan serve``


