<h1>Kinedu Bookshop</h1>

<strong>Aplicación para entrevista técnica de Kinedu</strong>

Es necesario agregar un .htaccess en el root de Bookshop con el siguiente contendio:

<code>RewriteEngine on</code><br>
<code>RewriteCond $1 !^(index&#92;.php|img|js|css|assets|robots&#92;.txt|css|img|js)</code><br/>
<code>RewriteRule ^(.*)$ index.php/$1 [L]</code><br/>

Pueden encontrar el scirpt de la base de datos para importar a phpMyAdmin en database/bookshop.sql

<a href="http://www.codeigniter.com/userguide2/">CodeIgniter 2 User Guide</a>
