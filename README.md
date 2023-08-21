# Nombre del Proyecto

Inventario Facturas

### Descripción

El proyecto almacena facturas y usuarios en una base de datos local, registrando datos como su numero de factura,
fecha de ingreso y monto, en la parte de Usuario da la opcion de dar de alta a nuevos usuarios 

### Problema Identificado

Falta de atencion en el area de facturacion

### Solución

El proyecto ayuda al area de compras a tener un lugar donde almacenar sus facturas y datos que alamcena con el tiempo +

### Arquitectura

El proyecto esta construido en php, utilice mysql como base de datos y como servidor local Laragon

## Tabla de Contenidos

- [Requerimientos](#requerimientos)
- [Instalación](#instalación)
- [Roadmap](#roadmap)

## Requerimietos
Servidores de aplicación, web, bases de datos, etc.

Paquetes adicionales como Bulma.

Versión de PHP (ejemplo: PHP 8.1.0).

## Instalación

Paso 1: Descargar e Instalar Laragon

Ve al sitio web de Laragon en https://laragon.org/ y descarga la versión adecuada para tu sistema operativo (Windows).

Ejecuta el archivo de instalación descargado y sigue las instrucciones del instalador para completar la instalación de Laragon.

Paso 2: Descargar el Proyecto PHP

Si aún no tienes el código fuente de tu proyecto, asegúrate de descargarlo o clonarlo desde tu repositorio en GitHub u otro lugar donde esté alojado.

Coloca el proyecto en la carpeta www de tu instalación de Laragon. Por defecto, esta carpeta se encuentra en C:\laragon\www. Puedes crear una subcarpeta dentro de www para tu proyecto si lo deseas.

Paso 3: Configurar Laragon

Abre Laragon desde el menú de inicio o el acceso directo en tu escritorio.

En la barra de herramientas de Laragon, asegúrate de que el servidor web (generalmente Apache) y el servidor de bases de datos (generalmente MySQL) estén activos. Deberías ver íconos verdes indicando que están funcionando.

Paso 4: Configurar la Base de Datos 

En Laragon, haz clic en el ícono de MySQL en la barra de herramientas para abrir phpMyAdmin.

En el proyecto existe una carpeta llamada "Archivo con base de datos" en phpMyAdmin selecciona la opcion de importar y selecciona el archivo dentro de la carpeta para que puedas vizualizar la base de datos que se utilizo 

Para acceder al sistema basta con utilizar alguna de las credenciales en la tabla de "usuarios"

Si no logra acceder agrega la siguiente URL para acceder al proeycto http://localhost/Proyecto%20Inventario/index.php?vista=principal


## Roadmap

-Mejora de seguridad para la inyeccion de codigo SQL 

-Crear la funcion de busqueda de facturas o usuarios en el programa 

##Licence 
Unlicense

-Agregar roles de seguridad para tener todo separado

-Cambiar interaz de inicio de sesion 


