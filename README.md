<h1>Kinedu Bookshop</h1>

<strong>Aplicación para entrevista técnica de Kinedu</strong>

Es necesario agregar un .htaccess en el root de Bookshop con el siguiente contendio:


<code>RewriteEngine on</code><br>
<code>RewriteCond $1 !^(index&#92;.php|img|js|css|assets|robots&#92;.txt|css|img|js)</code><br/>
<code>RewriteRule ^(.*)$ index.php/$1 [L]</code><br/>
