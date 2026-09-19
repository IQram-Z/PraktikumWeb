# Proyek Praktikum Web - Manajemen Data Akademik

## Identitas Pemilik
Nama  : Yazid Ikram Muzakir
NIM   : C050425021
Kelas : Pemrograman Berbasis Web

---

## Deskripsi Proyek
Aplikasi web sederhana berbasis framework Laravel yang dirancang untuk mengelola data akademik (Mahasiswa dan Mata Kuliah). Proyek ini menerapkan konsep relasi database One-to-Many serta fitur Eager Loading untuk menampilkan daftar mahasiswa beserta mata kuliah yang diambil secara efisien.

---

## Perintah Artisan yang Digunakan
1. php artisan make:migration create_matakuliahs_table
2. php artisan make:model Matakuliah
3. php artisan make:factory MatakuliahFactory --model=Matakuliah

---

## Langkah-Langkah Menjalankan Proyek

1. Clone Repository
   Buka terminal dan jalankan perintah:
   git clone https://github.com/username-anda/praktikum-laravel-nimkalian.git
   cd praktikum-laravel-nimkalian

2. Install Dependency Composer
   Jalankan perintah berikut untuk memasang paket vendor yang diperlukan:
   composer install

3. Konfigurasi Environment File (.env)
   Salin file konfigurasi contoh dan buat app key baru:
   cp .env.example .env
   php artisan key:generate

   *Buka file .env dan atur nama database (DB_DATABASE) sesuai konfigurasi MySQL lokal Anda.*

4. Jalankan Migrasi & Seeder Database
   Buat tabel dan isi data dummy (20 mahasiswa & matakuliah) secara otomatis:
   php artisan migrate:fresh --seed

5. Jalankan Server Lokal
   Jalankan server Laravel:
   php artisan serve

   Akses aplikasi melalui browser pada alamat:
   http://127.0.0.1:8000/mahasiswa