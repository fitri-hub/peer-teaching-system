# Peer Teaching System

##  Deskripsi Project

Peer Teaching System adalah aplikasi berbasis web yang dikembangkan untuk memfasilitasi kegiatan pembelajaran antar mahasiswa (peer teaching). Sistem ini memungkinkan mahasiswa untuk mencari tutor, melakukan booking sesi belajar, mengakses materi pembelajaran, memberikan penilaian kepada tutor, serta memantau aktivitas pembelajaran melalui dashboard yang disesuaikan dengan peran pengguna.

Project ini dikembangkan menggunakan Laravel Framework dengan menerapkan konsep Role-Based Access Control (RBAC) sehingga setiap pengguna memiliki hak akses yang berbeda sesuai perannya.

---

##  Role Pengguna

### Admin

* Mengelola data mata pelajaran
* Mengelola profil tutor
* Melihat statistik sistem
* Memantau seluruh aktivitas booking

### Tutor

* Mengelola profil tutor
* Melihat jadwal booking
* Mengunggah materi pembelajaran
* Menerima atau menolak permintaan booking

### Student

* Melakukan booking tutor
* Melihat status booking
* Mengakses dan mengunduh materi
* Memberikan rating dan ulasan kepada tutor
* Melihat riwayat pembelajaran

---

##  Fitur Utama

### 1. Authentication System

* Login
* Register
* Logout
* Middleware Authentication

### 2. Role & Access Control

* Role Admin
* Role Tutor
* Role Student
* Middleware Role
* Pembatasan akses berdasarkan role

### 3. Subject Management

* Create Subject
* Read Subject
* Update Subject
* Delete Subject

### 4. Tutor Management

* Create Tutor Profile
* Read Tutor Profile
* Update Tutor Profile
* Delete Tutor Profile

### 5. Booking System

* Student melakukan booking tutor
* Tutor menerima booking
* Tutor menolak booking
* Monitoring status booking

### 6. Material System

* Upload materi oleh tutor
* Melihat daftar materi
* Download materi oleh student

### 7. Rating System

* Student memberikan rating
* Student memberikan komentar
* Menampilkan rata-rata rating tutor

### 8. Dashboard System

* Dashboard Admin
* Dashboard Tutor
* Dashboard Student

---

##  Teknologi yang Digunakan

* Laravel
* PHP
* MySQL / MariaDB
* Blade Template Engine
* Bootstrap / CSS
* JavaScript
* Laravel Breeze
* Git & GitHub

---

##  Struktur Database

### users

* id
* name
* email
* password
* role

### subjects

* id
* nama_mapel

### tutors

* id
* nama
* subject_id
* bio

### bookings

* id
* student_id
* tutor_id
* tanggal
* jam
* status

### materials

* id
* tutor_id
* judul
* deskripsi
* file

### ratings

* id
* student_id
* tutor_id
* rating
* komentar

---

##  Instalasi Project

Clone repository:

```bash
git clone https://github.com/fitri-hub/peer-teaching-system.git
```

Masuk ke folder project:

```bash
cd peer-teaching-system
```

Install dependency:

```bash
composer install
npm install
```

Copy file environment:

```bash
cp .env.example .env
```

Generate application key:

```bash
php artisan key:generate
```

Konfigurasi database pada file `.env`.

Jalankan migration:

```bash
php artisan migrate
```

Buat symbolic link storage:

```bash
php artisan storage:link
```

Jalankan server:

```bash
php artisan serve
```

Jalankan Vite:

```bash
npm run dev
```

---

##  Screenshot

Tambahkan screenshot berikut:

* Halaman Login
* Dashboard Admin
* Dashboard Tutor
* Dashboard Student
* Manajemen Mata Pelajaran
* Manajemen Tutor
* Booking Tutor
* Sistem Materi
* Sistem Rating

---

##  Tim Pengembang

* FitriAni (2408107010022)
* Azira Kania (2408107010025)
* Zahra Rizkyna (2408107010031)
* Syakila Naira (2408107010034)

---

##  License

Project ini dikembangkan untuk memenuhi Ujian Akhir Semester Praktikum Pemrograman Berbasis Web
