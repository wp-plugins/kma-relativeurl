=== Plugin Name ===
Contributors: @Infogon
Tags: url relative, url absolute, url, rutas relativas, rutas absolutas, 
Requires at least: 4.0
Tested up to: 4.2.x
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


== Description ==
Este plugin permite convertir url relativas en absolutas a traves de un shortcode.
El plugin esta pensado para facilitar las migraciones respetando el SEO.

Ejemplo:
Supongamos que nuestra web de desarrollo es development.client.com y la web final es client.com
Imaginemos que tenemos una imagen llamada intro.jpg en nuestro upload (subido el mes de agosto del 2015)

Las opciones son dos:
* usar la url development.client.com/wp-content/upload/2015/08/intro.jpg y luego cambiarla al pasar a client.com
* usar la url /wp-content/upload/2015/08/intro.jpg que perjudica el SEO de la web

Este plugin resuelve la situacion de la siguiente manera:

<img src="[kmaurl url='/wp-content/upload/2015/08/intro.jpg']" />
De esta manera la url SIEMPRE es absoluta y no hay problemas de migracion de la web

Para desarrollo HTML--> Usar el plugin como se ha explicado arriba en cualquier url relativa del sitio web
Para desarrollo PHP--> Wordpress proporciona la funcion <a href="https://codex.wordpress.org/Function_Reference/get_site_url">get_site_url()</a> que devuelve la cadena de la url del sitio actual. Para saber mas de esta funcion haz link en la funcion y te llevara al Codex de wordpress 
Para usar en js --> Si el codigo js esta embebido en un archivo php se recomienda utilizar la funcion de Wordpress descripta arriba. Si el codigo es js, jQuery o una de sus variante el plugin proporciona la variable global  de javascript kmaurl

== Installation ==
1. Descomprimir el zip
2. Subir todos los archivos a la carpeta `/wp-content/plugins/` , incluyendo carpetas
3. Activa el plugin desde el menu 'Plugin' del backend de Wordpress.
4. Eso es todo. Lee las instrucciones para usarlo.
== Changelog ==

= 1.0 =
* Creacion de shortcode
* Creacion de variable js