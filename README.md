# Admin Dashboard Skripsi (Laravel CRUD)

Template ini dibuat untuk membantu mahasiswa yang sedang mengerjakan **skripsi** agar lebih mudah memahami dan mengimplementasikan **CRUD sederhana menggunakan Laravel**.

Cocok untuk:

-   Pembelajaran Laravel
-   Referensi skripsi
-   Project admin dashboard sederhana

---

## 📌 Tentang Project

Project ini merupakan **Admin Dashboard berbasis Laravel** dengan fitur CRUD yang mudah dipahami, sehingga sangat cocok untuk pemula maupun mahasiswa.

---

## 🙌 Dukung Developer

Jika project ini membantu kamu, jangan lupa dukung ya 😊

-   **Instagram**: [@nanda_wahyudiii](https://www.instagram.com/nanda_wahyudiii/)
-   **Trakteer**: [trakteer.id/uwais_tech](https://trakteer.id/uwais_tech)

---

## ⚙️ Instalasi & Menjalankan Project

### 🔹 Step 1: Clone Repository

Clone repository ini ke komputer kamu:

```bash
git clone https://github.com/nadws/admin_dashboard_skripsi.git
```

Masuk ke folder project:

```bash
cd admin_dashboard_skripsi
```

---

### 🔹 Step 2: Install Dependency

Jalankan perintah berikut di terminal:

```bash
composer install
```

---

### 🔹 Step 3: Konfigurasi Environment (.env)

Buat file **.env** dengan cara copy dari `.env.example` atau langsung salin konfigurasi di bawah ini:

```env
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
DB_DATABASE=nama_database_kamu
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
```

> ⚠️ **Pastikan DB_DATABASE disesuaikan dengan database kamu**

---

### 🔹 Step 4: Generate App Key

Jalankan perintah berikut:

```bash
php artisan key:generate
```

```bash
php artisan migrate
```

```bash
php artisan db:seed
```

---

### 🔹 Step 5: Jalankan Server

```bash
php artisan serve
```

Akses aplikasi di browser:

```
http://localhost:8000
```

---

## Akun Login

-   Email : admin@gmail.com
-   Password : password

---

## 📚 Catatan Tambahan

-   install laragon ya pilih yg 6.0 link download https://github.com/leokhoa/laragon/releases
-   Cara install php 8.3 di laragon link https://qadrlabs.com/post/panduan-update-versi-php-di-laragon

---

## ⭐ Penutup

Semoga project ini bermanfaat dan mempermudah pengerjaan skripsi kamu 🚀

Jangan lupa ⭐ repository ini jika merasa terbantu 😊

## Eits kalo mau belajar CRUDNYA disini ya

-   **Notion**: https://agate-oriole-2bc.notion.site/TEMPLATE-CRUD-FILAMENT-STEP-PRAKTIK-2cdd9f0ab2ad801b93a9da14806d972e?source=copy_link
