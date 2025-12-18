#Kalian bingung mau ngerjain skripsi gimana
ini template yg tepat buat kalian untuk belajar bagaimana sih buat crud yang gampang banget

sebelum itu follow dulu ya hehe
<br>
ig : https://www.instagram.com/nanda_wahyudiii/?igsh=MWQxMmtzN2c2NWdqbA%3D%3D#
<br>
trakteer : https://trakteer.id/uwais_tech

Step 1 : clone project ini seperti biasa
caranya buka repository kalian lalu salin ini :

<code>
git clone https://github.com/nadws/admin_dashboard_skripsi.git
</code>
<br>
Step 2 : jalankan di di terminal kalian 
<code>
composer install
</code>
<br>
Step 3 : bikin file .env nya copy saja kode ini
<code>
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:8SXnIE4Es99SeZB03rOlBpcfsRcT0ZiDlYx/kqg8A70=
APP_DEBUG=true
APP_URL=http://localhost:8000

APP_LOCALE=en
APP_FALLBACK_LOCALE=en
APP_FAKER_LOCALE=en_US

APP_MAINTENANCE_DRIVER=file

PHP_CLI_SERVER_WORKERS=4

BCRYPT_ROUNDS=12

LOG_CHANNEL=stack
LOG_STACK=single
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE= <!-- sesuaikan database kalian ya-->
DB_USERNAME=root
DB_PASSWORD=

SESSION_DRIVER=database
SESSION_LIFETIME=120
SESSION_ENCRYPT=false
SESSION_PATH=/
SESSION_DOMAIN=null

BROADCAST_CONNECTION=log
FILESYSTEM_DISK=local
QUEUE_CONNECTION=database

CACHE_STORE=database

MEMCACHED_HOST=127.0.0.1

REDIS_CLIENT=phpredis
REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=log
MAIL_SCHEME=null
MAIL_HOST=127.0.0.1
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

VITE_APP_NAME="${APP_NAME}"
</code>

<br>
Step 4 ketik ini di terminal ya
<code>
php artisan key:generate
</code>

<br>
step 5 jalankan programnya :
<code>
php artisan serve
</code>
