# Laporan Proyek Akhir Praktikum Web

**Nama:** YAZID IKRAM MUZAKIR
**NIM:** C050425021  

## Deskripsi Proyek
Aplikasi web sederhana untuk manajemen data akademik yang menampilkan relasi antara data Mahasiswa dan Mata Kuliah (*One-to-Many*).

## Perintah Artisan yang Digunakan
1. `php artisan make:migration create_matakuliahs_table`
2. `php artisan make:model Matakuliah`
3. `php artisan make:factory MatakuliahFactory --model=Matakuliah`

## Cara Menjalankan Project
1. Clone / Extract repository ke direktori lokal.
2. Unduh dependency Laravel: composer install
3. Salin file environment dan atur database: 
    cp .env.example .env
    php artisan key:generate
4. Jalankan migrasi dan isi data dummy:
    php artisan migrate:fresh --seed
5. jalankan server lokal : 
    php artisan serve