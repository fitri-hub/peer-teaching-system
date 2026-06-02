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

* Halaman Login
  <img width="1600" height="834" alt="WhatsApp Image 2026-06-02 at 18 45 45" src="https://github.com/user-attachments/assets/525fb71c-ddca-48ca-b1f2-5e1cebf4cce2" />
  
* Dashboard Admin
  <img width="1600" height="838" alt="WhatsApp Image 2026-06-02 at 18 45 46 (1)" src="https://github.com/user-attachments/assets/4ddf088a-7efd-437b-a7b2-229331681037" />

* Dashboard Tutor
  <img width="1600" height="837" alt="WhatsApp Image 2026-06-02 at 18 45 46" src="https://github.com/user-attachments/assets/631a107a-796a-45ba-a92b-4ee7f7ec892f" />

* Dashboard Student
  <img width="1600" height="834" alt="WhatsApp Image 2026-06-02 at 18 45 47" src="https://github.com/user-attachments/assets/9aab8935-a478-4c6e-9b77-081092087814" />

* Manajemen Mata Kuliah
  <img width="1600" height="838" alt="WhatsApp Image 2026-06-02 at 18 45 47 (1)" src="https://github.com/user-attachments/assets/e739fda7-464c-459c-990f-3ba507bb0fa0" />

* Manajemen Tutor
  <img width="1600" height="836" alt="WhatsApp Image 2026-06-02 at 18 45 48" src="https://github.com/user-attachments/assets/09cdf2a6-8e40-4189-a1de-88f786ad4e48" />

* Booking Tutor
  <img width="1600" height="838" alt="WhatsApp Image 2026-06-02 at 18 45 48 (1)" src="https://github.com/user-attachments/assets/c65bd836-f80a-4e0b-a817-74e5c913eb3a" />

* Sistem Materi
  <img width="1600" height="838" alt="WhatsApp Image 2026-06-02 at 18 45 49 (1)" src="https://github.com/user-attachments/assets/b3371a27-add5-4c0f-b540-18481f4aa20d" />

* Sistem Rating
  <img width="1600" height="841" alt="WhatsApp Image 2026-06-02 at 18 45 49" src="https://github.com/user-attachments/assets/8dc82f70-3925-4adb-a29e-aaccb32ba288" />


---

##  Tim Pengembang

* FitriAni (2408107010022)
* Azira Kania (2408107010025)
* Zahra Rizkyna (2408107010031)
* Syakila Naira (2408107010034)

---

##  License

Project ini dikembangkan untuk memenuhi Ujian Akhir Semester Praktikum Pemrograman Berbasis Web
