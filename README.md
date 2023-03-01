# PaidIt

PaidIt es un sistema informático, el cual permita abonar dinero y generar un balance. Dicho sistema informático será usado dentro de establecimientos que la escuela ofrezca dentro de su plantel.
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

## Antecedentes del proyecto

### Planteamiento del problema
La problemática que pudimos encontrar surge en un contexto escolar nivel secundaria /preparatoria principalmente enfocado a los negocios que hay dentro de las mismas, por ejemplo, las cafeterías, papelerías,estanquillos, etc; ya que los alumnos que acuden a una de estas instalaciones suelen llevar dinero en efectivo puesto que no cuentan con una edad para adquirir una tarjeta de credito o debito para poder comprar productos. Normalmente son los padres de familia quienes les proporcionan un monto a sus hijos, sin embargo, ellos no saben en qué lo gastan los alumnos, y esto ocasiona temor de que puedan usar erróneamente del mismo.

### Descripción del Problema
Proporcionar a hijos de familia dinero para que lo usen no dentro de la institución, sino en productos que no están destinados para el sector adolescente. Esto incluye consumibles como drogas, venta de productos ilegales, etc. Además de correr el riesgo de que el hijo pierda el dinero por descuidos de su parte.

###Descripción de la Situación
Los padres de adolescentes no pueden saber con exactitud lo que sus hijos compran. Evitar dicha preocupación puede ayudar a los padres a que se sientan más cómodos cuando sus hijos tengan que ir a la escuela.

### Conceptualización de la solución
Desarrollar un sistema informático, el cual permita abonar dinero y generar un balance. Dicho sistema informático será usado dentro de establecimientos que la escuela ofrezca dentro de su plantel.

## Marco teorico
Backend

Las siguientes tecnologías describen varias herramientas, que van a ser utilizadas en el proyecto, que nos permiten a nosotros crear una aplicación de alto rendimiento. En conjunto, estas herramientas van a generar un mejor trabajo para el desarrollo del objetivo general acordado.

1. Laravel es un popular framework de desarrollo de aplicaciones web en PHP que utiliza una arquitectura MVC (Modelo-Vista-Controlador) para crear aplicaciones web escalables, seguras y robustas. Fue creado por Taylor Otwell en 2011 y desde entonces ha ganado una gran popularidad en la comunidad de desarrollo web debido a su facilidad de uso, flexibilidad y potencia.

Una de las características más destacadas de Laravel es su enfoque en la elegancia del código y en la simplificación de tareas complejas, lo que permite a los desarrolladores centrarse en la lógica de negocio de sus aplicaciones en lugar de en detalles técnicos. Laravel proporciona una gran cantidad de funcionalidades incorporadas, como autenticación de usuarios, gestión de sesiones, enrutamiento, validación de formularios y muchas más. Además, Laravel se integra bien con otras tecnologías web, como bases de datos relacionales, cachés, sistemas de colas, entre otros.

2. Jetstream es una biblioteca de componentes diseñados para ayudar a los desarrolladores a crear aplicaciones web rápidamente con Laravel. Jetstream utiliza el stack de tecnologías modernas, como Livewire y Tailwind CSS, para proporcionar una experiencia de desarrollo agradable y eficiente. Los componentes de Jetstream abarcan desde la autenticación y la gestión de equipos hasta la configuración del perfil de usuario y la gestión de notificaciones.

3. Inertia es una herramienta que permite a los desarrolladores crear aplicaciones web de una sola página (SPA) con Laravel y Vue.js sin tener que escribir código JavaScript adicional para la comunicación entre el servidor y el cliente. En lugar de enviar HTML completo en cada solicitud, Inertia envía solo datos JSON y permite que Vue.js renderice los componentes en el cliente. Esto permite una experiencia de usuario fluida y rápida, similar a la de una aplicación nativa.

4. MySQL es un sistema de gestión de bases de datos relacionales que utiliza el lenguaje SQL para realizar consultas y manipular los datos. Es uno de los sistemas de bases de datos más populares en la web y es compatible con una amplia variedad de plataformas de desarrollo. MySQL es conocido por su rendimiento, escalabilidad y confiabilidad, lo que lo convierte en una opción popular para aplicaciones web y sitios de comercio electrónico con alto tráfico. También es conocido por su facilidad de uso y su capacidad para manejar grandes cantidades de datos de manera eficiente. En resumen, Laravel, Jetstream, Inertia y MySQL son tecnologías web poderosas y ampliamente utilizadas que permiten a los desarrolladores crear aplicaciones web escalables, rápidas y seguras. Con estas herramientas, los desarrolladores pueden concentrarse en la lógica de negocio de sus aplicaciones en lugar de en la complejidad técnica, lo que les permite construir aplicaciones de alta calidad de manera más rápida y eficiente.

Frontend

En la parte front-end que es la parte más visual del programa se van utilizar varias tecnologías que vamos utilizar las básicas que son Flowbite, HTML y javascript.

2.5 Flowbite-Tailwind y es un framework de CSS que se llama Tailwind con el fin de poder usar todas sus propiedades para no complicar la parte de los css y para la parte de diseño vamos usar que Flowbite donde analizamos que seria mejor la mejor opción dentro de nuestras posibilidades porque ya es una tecnología que se tiene el conocimiento.

2.6 HTML es una herramienta que vamos utilizar como el esqueleto del proyecto para usar la tecnología de tailwind y utilizar las etiquetas que nos ofrece html para los estilos y poderlos personalizados con las propiedades de tailwind.

2.7 Javascript.es una herramienta se usó para unas validaciones de unos componentes que vamos a utilizar en los formularios y llegan a ser demasiado útiles dentro del proyecto.

## Grupos de procesos planificación

### Planteamiento del problema
La problemática que pudimos encontrar surge en un contexto escolar nivel secundaria /preparatoria principalmente enfocado a los negocios que hay dentro de las mismas, por ejemplo, las cafeterías, papelerías,estanquillos, etc; ya que los alumnos que acuden a una de estas instalaciones suelen llevar dinero en efectivo puesto que no cuentan con una edad para adquirir una tarjeta de credito o debito para poder adquirir los productos. Normalmente son los padres de familia quienes les proporcionan un monto a sus hijos, sin embargo, ellos no saben en qué lo gastan los alumnos con temor de que puedan hacer mal uso del mismo.

Los padres de familia al proporcionar dinero a sus hijos para sus gastos personales dentro de las instalaciones de las preparatorias y secundarias no pueden asegurarse que se estén utilizando en productos adecuados para su consumo, teniendo como riesgo la adquisición de productos nocivos para su salud como lo son productos y consumibles ilegales. El evitar la posibilidad de que los alumnos adquieran cualquiera de estos productos, genera una mayor tranquilidad en los padres de familia, apoyando también en la prevención de delitos y en la generación de zonas de alto peligro.

## Justificación

Nuestro proyecto va enfocado a escuelas, principalmente preparatorias y secundarias privadas, o aquellas donde sus alumnos tengan algún nivel adquisitivo y cuenten con un teléfono celular con conexión a internet. El proyecto está dirigido a los establecimientos de venta de productos que se encuentren dentro de las instituciones como lo son cafeterías, papelerías, estanquillos, etc. 

Suele pasar que los padres les dan un monto alto para que su hijo gaste durante toda la semana. Los padres de familia no saben exactamente en qué lo gastan los alumnos, por lo que temen que este dinero no se use para comida o necesidades escolares, sino para vicios o compras compulsivas.

Esta solución permite que los padres les depositen dinero a sus hijos dentro de una plataforma que les da acceso a gastar en la cafetería, permitiendo a los padres estar tranquilos acerca de los gastos de sus hijos. Los beneficios son, desde darle seguridad a los padres sobre los gastos que sus hijos realizan, hasta el uso de una plataforma que puede administrar los gastos del usuario dentro de un establecimiento, ya sea una escuela, industria, entre otros, permitiendo de la misma manera que cada persona pueda prever los gastos que realizará semanalmente, disponiendo del menú o de los artículos que se vendan en el establecimiento, disponiendo de una base de datos que igualmente provea un sistema de inventariado a dicho lugar.




