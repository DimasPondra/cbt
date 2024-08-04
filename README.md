# CBT (Computer Based Test)

CBT adalah aplikasi web untuk ujian toefl secara online. Program ini saya buat sebagai tema materi pelatihan Laravel.

Anda dapat mengakses aplikasi CBT di [URL Aplikasi](not-yet).

-   [Login](not-yet): Gunakan tautan ini untuk masuk ke akun CBT anda.
-   [Registrasi](not-yet): Gunakan tautan ini untuk membuat akun baru di CBT.

## Daftar Isi

1. [Prasyarat](#prasyarat)
2. [Teknologi yang Digunakan](#teknologi-yang-digunakan)
3. [Fitur-fitur](#fitur---fitur)
4. [Pemasangan](#pemasangan)

## Prasyarat

-   [GIT](https://www.git-scm.com/downloads)
-   [PHP 8.2](https://www.php.net/downloads.php)
-   [Composer 2.x](https://getcomposer.org/download/)
-   [MySQL 8.0](https://dev.mysql.com/downloads/installer/)

## Teknologi yang Digunakan

-   Laravel 11
<!-- - Bootstrap 5.2
-   Spatie -->

## Fitur - fitur

Ongoing

<!-- 1. **Autentikasi Pengguna:**
    - Registrasi dan login pengguna.

2. **Manajemen Role dan Permission:**
    - Membuat dan menghapus permission dan role.
    - Memberikan permissions ke role.
    - Hanya role Developer yang dapat mengaksesnya.

3. **Manajemen User:**
    - Menampilkan data users.
    - Memberikan roles ke user.
    - Hanya role Admin dan Developer yang dapat mengaksesnya.

4. **Manajemen Priority Type:**
    - Menampilkan, membuat, dan menghapus data.
    - Hanya role Admin yang dapat mengaksesnya.

5. **Manajemen Wishlist Type:**
    - Menampilkan, membuat, dan menghapus data.
    - Hanya role Admin yang dapat mengaksesnya.

6. **Manajemen Funding Source:**
    - Menampilkan, membuat, dan menghapus data berdasarkan pemilik data.
    - Hanya role Member yang dapat mengaksesnya.

7. **Manajemen Financial Transaction:**
    - Menampilkan, membuat, merubah, dan menghapus data berdasarkan pemilik data.
    - Hanya role Member yang dapat mengaksesnya.

8. **Manajemen Service Histore:**
    - Menampilkan, membuat, merubah, dan menghapus data berdasarkan pemilik data.
    - Hanya role(Member) yang dapat mengaksesnya.

9. **Manajemen Recommended Service Schedule:**
    - Menampilkan, membuat, merubah, dan menghapus data berdasarkan pemilik data.
    - Hanya role Member yang dapat mengaksesnya.

10. **Manajemen Wishlist:**
    - Menampilkan, membuat, merubah, dan menghapus data berdasarkan pemilik data.
    - Hanya role Member yang dapat mengaksesnya.

11. **Manajemen Task:**
    - Menampilkan, membuat, merubah, dan menghapus data berdasarkan pemilik data.
    - Hanya role Member yang dapat mengaksesnya.

12. **Manajemen Daily Activity Log:**
    - Menampilkan, membuat, merubah, dan menghapus data berdasarkan pemilik data.
    - Hanya role Member yang dapat mengaksesnya. -->

## Pemasangan

Langkah-langkah untuk menginstall proyek ini.

Clone proyek

```bash
git clone https://github.com/DimasPondra/cbt.git
```

Masuk ke dalam folder proyek

```bash
cd cbt
```

Install depedencies

```bash
composer install
```

Buat konfigurasi file

```bash
cp .env-example .env
```

Rubah `.env` untuk konfigurasi sesuai variabel

-   `DB_CONNECTION` - Database server yang digunakan.
-   `DB_HOST` - Hostname atau alamat IP server MySQL.
-   `DB_DATABASE` - Database yang dibuat untuk aplikasi, default adalah laravel.
-   `DB_USERNAME` - Username untuk mengakses database.
-   `DB_PASSWORD` - Password untuk mengakses database.

Migrasi database dan setup (seed) tabel awal

```bash
php artisan migrate --seed
```

Generate manual key

```bash
php artisan key:generate
```

Mulai server

```bash
php artisan serve
```

Dengan mengikuti langkah-langkah di atas, Anda akan dapat menjalankan aplikasi CBT dan mulai mengelola berbagai macam test dan mencobanya.
