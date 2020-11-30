- Repositorio oficial Plataforma #CHECATULANA zacatecas

- Dependecias a instalar:
    
1. Servidor Apache
    
1. Servidor de base de datos MYSQL 
1. gestor de dependencias Composer https://getcomposer.org/doc/00-intro.md

Forma correcta de correr el proyecto:

- 1.-cd var/www/ puede que te de error access denied, hay que cambiar los privilegios
- 2.-git clone git@gitlab.com:JoniGo/checatulana.git
- 3.-cd checatulana
- 4.- crear archivo .env en el directorio superior en el archivo .env:
        DB_DATABASE=checatulana
- 5.-crear una base de datos con el nombre checatulana
- 6.-en consola:
       
1.  - composer update //actualiza e  instala las dependencias del proyecto
       
1.  - php artisan key:generate //genera un token para el proyecto y permite correrlo sin problemas 
       
1.  - php artisan migrate // hace la migracion de las tablas a la base de datos 

1. - php artisan serve // corre el servidor del proyecto

