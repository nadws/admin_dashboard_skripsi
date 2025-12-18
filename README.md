🎓 Admin Dashboard Skripsi (Laravel CRUD)

Template ini dibuat untuk membantu mahasiswa yang sedang mengerjakan skripsi agar lebih mudah memahami dan mengimplementasikan CRUD sederhana menggunakan Laravel.

Cocok untuk:

📚 Pembelajaran Laravel

🎓 Referensi skripsi

🛠️ Project Admin Dashboard sederhana

📌 Tentang Project

Project ini merupakan Admin Dashboard berbasis Laravel dengan fitur CRUD (Create, Read, Update, Delete) yang dirancang mudah dipahami, sehingga cocok untuk pemula maupun mahasiswa.

🙌 Dukung Developer

Jika project ini membantu kamu, jangan lupa dukung ya 😊

Instagram: @nanda_wahyudiii

Trakteer: trakteer.id/uwais_tech

⚙️ Instalasi & Menjalankan Project
🔹 Step 1: Clone Repository

Clone repository ke komputer kamu:

git clone https://github.com/nadws/admin_dashboard_skripsi.git

Masuk ke folder project:

cd admin_dashboard_skripsi

🔹 Step 2: Install Dependency

Install dependency Laravel:

composer install

🔹 Step 3: Konfigurasi Environment (.env)

Copy file .env.example menjadi .env:

cp .env.example .env

Atau langsung sesuaikan konfigurasi berikut:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database_kamu
DB_USERNAME=root
DB_PASSWORD=

⚠️ Pastikan DB_DATABASE sudah sesuai dengan database kamu

🔹 Step 4: Generate App Key
php artisan key:generate

🔹 Step 5: Migrasi & Seeder Database

Jalankan migrasi database:

php artisan migrate

Lalu jalankan seeder untuk membuat akun admin:

php artisan db:seed

👤 Akun Login Default

Setelah seeder dijalankan, kamu bisa login menggunakan akun berikut:

Email : admin@gmail.com
Password : password

Seeder menggunakan kode berikut:

User::factory()->create([
'name' => 'admin',
'email' => 'admin@gmail.com',
'password' => bcrypt('password'),
]);

🔹 Step 6: Jalankan Server
php artisan serve

Akses aplikasi melalui browser:

http://localhost:8000

📚 Catatan Tambahan

Pastikan PHP, Composer, dan MySQL sudah terinstall

Gunakan versi Laravel yang sesuai dengan project

Cocok dijadikan bahan skripsi, tugas akhir, atau latihan CRUD

📖 Belajar CRUD Step by Step

Kalau mau belajar alur CRUD-nya secara praktik, bisa langsung ke Notion berikut:

👉 Notion
https://agate-oriole-2bc.notion.site/TEMPLATE-CRUD-FILAMENT-STEP-PRAKTIK-2cdd9f0ab2ad801b93a9da14806d972e?source=copy_link

⭐ Penutup

Semoga project ini bermanfaat dan mempermudah pengerjaan skripsi kamu 🚀
Jangan lupa ⭐ repository ini jika merasa terbantu 😊
