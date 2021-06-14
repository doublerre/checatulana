# ChecaTuLana

Este repositorio contiene el proyecto que se mostrara al administrador del sitio. Debera ir en el dominio https://adminchecatulana.zacatecas.gob.mx/ sera conectado a la misma base de datos

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
cd \xampp\htdocs para Windows 🖥️
cd /var/www/html para Linux 🐧
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

## Actualización a la versión 2.0 🔄
### Requisitos previos 📝:
```
Tener instalada la version 1.0 de este sistema.
Contar con espacio para la actualización.
```

### Comandos de actualización 🔧
_Abrir una terminal y ejecutar los siguientes comandos:_
```
cd \xampp\htdocs\checatulana para Windows 🖥️
cd /var/www/html/checatulana para Linux 🐧
```
_Una Vez dentro de la carpeta del proyecto escribimos lo siguiente:_
```
git pull origin master
```
_Esperamos a que la terminal termine de descargar los nuevos archivos del sistema._
_Una vez terminado actualizaremos las dependencias del proyecto con el siguiente comando:_
```
composer update
```

_Una vez termiada la actualizacón de las dependencias procedemos a actualizar la base de datos, para esto escribimos este comando:_
```
php artisan migrate
Nota: "Los registros de la base de datos no se borraran".
```

_Por ultimo ejecutaremos los ultimos 2 comandos para tener la actualización completa, los cuales son:_
```
php artisan storage:link
php artisan key:generate
```

_Y listo podemos hacer el despliegue de nuestra aplicación 🤑_

## Actualización a la versión 3.0 🔄
### Requisitos previos 📝:
```
Realizar una copia de seguridad de la carpeta public que se encuentra en la siguiente ruta:
checatulana/storage/app/public
Esto en caso de tener archivos guardados en esta carpeta.

Realizar una copia de seguridad el archivo .env que se encuentra en la siguiente ruta:
checatulana/.env
```

### Eliminar el proyecto ❌
_Nos percatamos de un error de diseño por parte del componente Adminlte, el cual se daña al realizar un **Composer update**, el error se muestra a continuacion:_
![2015-09-20 17 02 28](https://gitlab.com/JoniGo/checatulana/-/raw/V3.0/public/img/errors/error.png)

_Para evitar este error es necesario eliminar el proyecto (Solo el proyecto, la base de datos queda igual), una vez terminado realizaremos la instalacion de la versión 3._

### Comandos de instalación 🔧
_Abrir una terminal y ejecutar los siguientes comandos:_
```
cd \xampp\htdocs\ para Windows 🖥️
cd /var/www/html/ para Linux 🐧
```
_Una Vez dentro de la carpeta del proyecto escribimos lo siguiente:_
```
git clone https://gitlab.com/JoniGo/checatulana.git
```
_Esperamos a que la terminal termine de descargar todos archivos del sistema._
_Una vez terminado instalaremos las dependencias del proyecto con el siguiente comando:_
```
composer install
```

_Una vez termiada la instalacion de las dependencias procedemos a actualizar la base de datos, para esto escribimos este comando:_
```
php artisan migrate
Nota: "Los registros de la base de datos no se borraran".
php artisan storage:link
```
_Por cambios a la base de datos, los usuarios ya registrados estaran desactivados por default, dejando sin acceso al sistema a todos los usuarios._
_Para evitar perder el acceso al sistema se debe ejecutar el siguiente comando:_
```
php artisan db:seed --class=UserAdminSeeder
```
_Este comando nos creara 2 usuarios **Administradores**, los cuales estaran activados para no perder el acceso al sistema, son usuarios temporales los cuales podran ser eliminados del sistema:_
| Usuario | Correo electronico | Contraseña | Tipo de rol | Activado |
| :---:   |     :---:          |  :---:     |  :---:      | :---:    |
| Finanzas   | finanzas@admin.com | finanzas | **Administrador** | ✔️ |
| Finanzas2   | finanzas2@admin.com | finanzas2 | **Administrador** | ✔️ |


_Una vez terminado, procedemos a mover las copias de seguridad realizadas al principio en las sigientes rutas:_
```
checatulana/storage/app/ - Para la carpeta public
checatulana/ - Para el archivo de configuración
```

_Por ultimo descargaremos el siguiente archivo:_
* [AuthenticatesUsers.php](https://drive.google.com/file/d/1Qn5wL0J8xIidQr2v3injADilg4ppPjac/view?usp=sharing)

_Este archivo lo proporciona laravel por defecto y por seguridad no puede ser editado, sin embargo han sido actualizadas algunas funciones de este **controlador** que eran necesarias para una mejor seguridad de la aplicación._

_Debemos de **mover** el archivo descargado en la siguiente ruta:_
```
checatulana\vendor\laravel\framework\src\Illuminate\Foundation\Auth\ para Windows 🖥️
checatulana/vendor/laravel/framework/src/Illuminate/Foundation/Auth/ para Linux 🐧
```
_Si pide que reemplacemos el archivio damos en aceptar._

_Y listo podemos hacer el despliegue de nuestra aplicación sin ningun error🤑_

![2015-09-20 17 02 29](https://gitlab.com/JoniGo/checatulana/-/raw/V3.0/public/img/errors/vistasinerrores.png)

## Despliegue 📦

_Para hacer deploy a nuestro proyecto solo basta ejecutar la siguiente linea:_
```
php artisan serve
```
_Y tendremos nuestra aplicación funcionando a la perfeccion:_

## Construido con 🛠

* [Laravel](https://laravel.com/docs/8.x) - El framework web usado.
* [Bootstrap](https://getbootstrap.com/docs/5.0/getting-started/introduction/) - Usado para los estilos de las vistas.
* [DataTables](https://datatables.net/manual/installation) - Plugin para un paginado de tablas.
* [AdminLte](https://github.com/jeroennoten/Laravel-AdminLTE) - Plantilla utilizada en el Admin

## Autores ✒️

* **Jonathan Gonzalez.** - *Trabajo Inicial* - [JoniGo](https://gitlab.com/JoniGo)
* **Perla Conde** - *Trabajo Inicial* - [Conde_](https://gitlab.com/Conde_)
* **Esmeralda Pacheco** - *Trabajo Inicial, Actualización a la version 2 y 3* - [esmeraldapacheco05](https://gitlab.com/esmeraldapacheco05)
* **Rafael Rangel** - *Actualización a la versión 2 y 3* - [rafaelrangelx12](https://gitlab.com/rafaelrangelx12)

También puedes mirar la lista de todos los [contribuyentes](https://gitlab.com/JoniGo/checatulana/-/project_members) quíenes han participado en este proyecto. 

## Licencia 📄

Este proyecto está bajo la Licencia (GPL3.0) - mira el archivo [LICENSE.md](https://gitlab.com/JoniGo/checatulana/-/blob/master/LICENSE) para detalles.

## Expresiones de Gratitud 🎁

* Comenta a otros sobre este proyecto 📢
* Invita una cerveza 🍺 o un café ☕ a alguien del equipo. 
* Da las gracias públicamente 🤓.
* etc.



---
⌨️ con ❤️ por [doublerre](https://github.com/doublerre) 😊