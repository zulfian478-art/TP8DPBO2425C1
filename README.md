# Janji
Saya Zulfian Rais Almanshur dengan NIM 2400325 mengerjakan Tugas Praktikum 8
dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahanNya
maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

# Desain Program

Program ini dibuat menggunakan arsitektur MVC (Model–View–Controller).
Struktur utama program meliputi:

Model → berfungsi berinteraksi dengan database (CRUD).

Controller → jembatan antara view dan model, mengatur alur logika.

View → bagian yang tampil ke pengguna (HTML + Bootstrap).

Router → mengatur URL ke controller & method yang benar.

Database → terdiri dari beberapa tabel yang saling berelasi.

# Deskripsi Program

Program ini merupakan aplikasi manajemen data dosen dan kaprodi menggunakan arsitektur MVC.
Program memuat:

CRUD untuk Kaprodi

Persiapan CRUD untuk Lecturers (Dosen)

Routing manual menggunakan parameter GET

Integrasi database MySQL

Template layout untuk header dan footer

Program juga menambahkan tabel baru (kaprodi) sebagai relasi data dari dosen (lecturer).
Semua operasi (tambah, lihat, ubah, hapus) dilakukan menggunakan form berbasis Bootstrap, sehingga tampilan rapi dan mudah digunakan.

# Fitur Program

Fitur Program
# 1. CRUD Kaprodi

Tambah kaprodi

Edit kaprodi

Hapus kaprodi

Tampilkan daftar kaprodi

# 2. Routing MVC

Akses halaman menggunakan URL:

?c=kaprodi&m=create
?c=kaprodi&m=edit&id=3

# 3. Layout Template

Navbar global

Footer global

Bootstrap terintegrasi

# 4. Konfigurasi Database Terpusat

Semua koneksi dilakukan melalui:

config/Database.php

# 5. Struktur MVC

Program memenuhi permintaan soal untuk mengubah struktur menjadi MVC lengkap.

# Alur

# 1. Program dibuka melalui public/index.php

Router membaca URL dan menentukan controller + method.


# 2. Jika user memilih menu Kaprodi

Router memanggil:

KaprodiController → index()


Lalu view kaprodi/index.php ditampilkan.

# 3. User dapat menambah Kaprodi

Mengakses:

?c=kaprodi&m=create


Data diinput → model menyimpannya ke database.

# 4. Data dapat diperbarui

User klik Edit → membuka:

?c=kaprodi&m=edit&id=[id]


Setelah update, controller menyimpan perubahan.

# 5. Data dapat dihapus

Klik Delete → langsung memanggil:

?c=kaprodi&m=delete&id=[id]

# 6. Layout selalu konsisten

Header dan footer otomatis ditampilkan di setiap halaman.

# Dokumentasi



https://github.com/user-attachments/assets/c27269da-65fc-4c56-8f18-cdd7d7a2f02c

