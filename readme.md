# ChecaTuLana

Este repositorio contiene el proyecto que se mostrara al administrador del sitio. Debera ir en el dominio https://admin.checatulana.zacatecas.gob.mx/ sera conectado a la misma base de datos

## Comenzando 🚀

_Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local para propósitos de desarrollo y pruebas._

Mira **Deployment** para conocer como desplegar el proyecto.


### Pre-requisitos Windows 🖥️📋

```
Pila Xampp V7.4.3
Composer V2.0.8 o superior.
```

### Pre-requisitos Linux 🐧📋

```
Apache V2.4 o superior.
MariaDB V10.4.11 o superior.
PHP V7.4.3 o superior (Menor a V8.0, puede causar conflictos).
Composer V2.0.8 o superior.
```

### Instalación 🔧

_Abrir el CMD o una terminal y ejecutar:_

```
cd \xampp\htdocs
git clone https://gitlab.com/JoniGo/checatulana.git
```

_Una vez descargado ingresaremos a la carpeta del proyecto con:_

```
cd checatulana
```

_Dentro de la carpeta del proyecto haremos un:_

```
composer update
```

_Esperamos a que termine de instalar las dependencias del proyecto._
_Descargaremos el archivo ***.env*** y lo pegaremos en la raiz del proyecto:_
* [.env](https://drive.google.com/file/d/1st8uuLyxNccxaMALN3UpqWjeKK3frq3E/view?usp=sharing) - Archivo de configuración.

_Una vez terminado este proceso haremos un:_
```
php artisan storage:link
php artisan key:generate
```

_Crearemos una base de datos con el nombre de checatulana, para despues ejecutar el siguiente comando:_
```
php artisan migrate
```

## Despliegue 📦

_Para hacer deploy a nuestro proyecto solo basta ejecutar la siguiente linea:_
```
php artisan serve
```
_Y tendremos nuestra aplicación funcionando a la perfeccion:_

## Construido con 🛠

_Menciona las herramientas que utilizaste para crear tu proyecto_

* [Laravel](https://laravel.com/docs/8.x) - El framework web usado.
* [Bootstrap](https://getbootstrap.com/docs/5.0/getting-started/introduction/) - Usado para los estilos de las vistas.
* [DataTables](https://datatables.net/manual/installation) - Plugin para un paginado de tablas.

## Autores ✒️

_Menciona a todos aquellos que ayudaron a levantar el proyecto desde sus inicios_

* **Jonathan Gonzalez.** - *Trabajo Inicial* - [JoniGo](https://gitlab.com/JoniGo)
* **Perla Conde** - *Trabajo Inicial* - [Conde_](https://gitlab.com/Conde_)
* **Esmeralda Pacheco** - *Trabajo Inicial* - [esmeraldapacheco05](https://gitlab.com/esmeraldapacheco05)
* **Rafael Rangel** - *Actualización a la versión 2* - [rafaelrangelx12](https://gitlab.com/rafaelrangelx12)

También puedes mirar la lista de todos los [contribuyentes](https://gitlab.com/JoniGo/checatulana/-/project_members) quíenes han participado en este proyecto. 

## Licencia 📄

Este proyecto está bajo la Licencia (GPL3.0) - mira el archivo [LICENSE.md](LICENSE.md) para detalles.

## Expresiones de Gratitud 🎁

* Comenta a otros sobre este proyecto 📢
* Invita una cerveza 🍺 o un café ☕ a alguien del equipo. 
* Da las gracias públicamente 🤓.
* etc.



---
⌨️ con ❤️ por [doublerre](https://github.com/doublerre) 😊