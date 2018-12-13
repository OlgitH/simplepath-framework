
## Readme

1. Clone this repository onto your computer

2. Run 'npm install'

3. Run 'gulp watch' and make a change to any scss file in the sass/base folder. This will automatically compile the css.


You'll neepd npm and gulp-cli installed globally on your computer..


///
Environment set up

Run server by typing 'php -S localhost:8000' in terminal and open localhost:8000 in the browser

htaccess----

RewriteBase /
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^(.+)$ index.php [QSA,L]

If you want to run on XAMPP or similar-----

RewriteBase /simplepath-framework/
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^(.+)$ index.php [QSA,L]

Add webroot folder variable to nav links eg:
<a href="/<?= $webroot ?>/about">About</a>
