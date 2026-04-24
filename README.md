# Sistem Inventaris Fotocopy

## Identitas Mahasiswa
- Nama: Isi nama kamu
- NIM: Isi NIM kamu
- Program Studi: Isi program studi kamu
- Kelas: Isi kelas kamu

---

## Tema Kasus
Project ini mengangkat tema **sistem inventaris alat dan perlengkapan fotocopy berbasis web**.  
Sistem dibuat untuk membantu pengelolaan data barang secara digital agar proses pencatatan inventaris menjadi lebih rapi, cepat, dan mudah dipantau.

---

## Latar Belakang
Pengelolaan inventaris pada usaha fotocopy sering kali masih dilakukan secara manual, baik untuk pencatatan nama barang, kategori, jumlah stok, maupun harga barang.  
Cara manual seperti ini dapat menimbulkan kendala seperti data yang mudah tercecer, kesalahan pencatatan, serta kesulitan saat ingin mengetahui kondisi stok barang secara cepat.

Melalui sistem ini, proses pengelolaan inventaris dibuat dalam bentuk digital sehingga admin dapat login ke sistem, melihat dashboard, menambah data barang, mengubah data barang, dan menghapus data barang dengan lebih terstruktur.  
Dengan adanya sistem inventaris ini, pengelolaan barang pada usaha fotocopy diharapkan menjadi lebih efisien dan mudah dipantau.

---

## Tujuan Sistem
- Mempermudah admin dalam mengelola data inventaris barang
- Mempermudah pencatatan stok barang secara digital
- Membantu admin mengetahui jumlah stok barang dengan lebih cepat
- Mengurangi kesalahan pencatatan data inventaris
- Membuat proses pengelolaan barang menjadi lebih rapi dan terorganisir

---

## Fitur Utama
- Login admin
- Dashboard inventaris
- Menampilkan total data barang
- Menampilkan total stok barang
- Menambah data barang
- Mengedit data barang
- Menghapus data barang
- Pengelompokan barang berdasarkan kategori

---

## Akun Login Default
- Email: `admin@gmail.com`
- Password: `admin123`

---

## Teknologi yang Digunakan
- Laravel 12
- PHP 8.2
- MySQL
- Blade
- HTML
- CSS
- JavaScript

---

## Cara Menjalankan Project
1. Clone repository
2. Masuk ke folder project
3. Install dependency
4. Copy file environment
5. Generate application key
6. Buat database
7. Atur koneksi database di file `.env`
8. Jalankan migrasi
9. Jalankan server Laravel

```bash
git clone https://github.com/billapsf/inventaris-fotocopy.git
cd inventaris-fotocopy
composer install
copy .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

---

## Konfigurasi Database
Buat database dengan nama:

```bash
inventaris
```

Lalu sesuaikan isi file `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=inventaris
DB_USERNAME=root
DB_PASSWORD=
```

---

## Halaman Sistem

### 1. Login
Halaman login digunakan admin untuk masuk ke dalam sistem menggunakan email dan password yang telah terdaftar.

### 2. Dashboard
Dashboard menampilkan ringkasan data inventaris seperti total data barang dan total stok keseluruhan, serta menyediakan akses cepat ke halaman data barang.

### 3. Data Barang
Halaman data barang digunakan untuk menampilkan seluruh daftar inventaris yang tersimpan di dalam sistem, lengkap dengan kode barang, nama barang, kategori, stok, harga, dan aksi edit atau hapus.

### 4. Tambah Barang
Halaman tambah barang digunakan admin untuk memasukkan data inventaris baru ke dalam sistem.

### 5. Edit Barang
Halaman edit barang digunakan untuk memperbarui data inventaris yang sudah ada sesuai kondisi terbaru.

---

## Repository
[GitHub Project](https://github.com/billapsf/inventaris-fotocopy)
