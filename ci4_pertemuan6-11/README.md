# LAPORAN TUGAS PROJEK PRAKTIKUM WEB 2
**Portal Berita – CodeIgniter 4**

## Identitas Mahasiswa
- **Nama:** Faisal Fajar  
- **NIM:** 312310123
- **MataKuliah:** Pemerograman Web 2
- **Dosen Pengampu:** pak  Pak Agung Nugroho, S.kom., M.kom.
    

---

## 2. Deskripsi Projek
Tugas ini merupakan implementasi framework **CodeIgniter 4** dalam pembuatan **portal berita** berbasis web. Sistem ini memungkinkan admin untuk mengelola berita, kategori, dan pengguna. Pengunjung dapat membaca berita yang sudah dipublikasikan.

---

## 3. Fitur-Fitur Aplikasi

### A. Fitur Pengunjung
- Melihat daftar berita terbaru
- Melihat detail berita
- Melihat berita berdasarkan text
  

### B. Fitur Admin
- Login Admin
- Manajemen Berita (tambah, edit, hapus)
- Logout

---

## 4. Teknologi yang Digunakan
- **Backend:** PHP dengan CodeIgniter 4  
- **Frontend:** HTML, CSS, Bootstrap  
- **Database:** MySQL / MariaDB  
- **Server Lokal:** XAMPP  

---

## 5. Struktur Folder Utama CI4

/app
    /Controllers
    /Models
    /Views
      /artikel
        /admin_index.php
        /detail.php
        /form_add.php
        /form_edit.php
        /index.php
      /componets
        /artikel_terkini.php
      /layout
        /main.php
      /template
        /header,foter, dan sidebar.php
      /user
        /login.php
      /index.php
/public
    /gambar
    style.css
    styleartikel.css

---

## 6. Penjelasan Singkat Kode

- **Controller `Berita.php`**  
  Mengatur logika untuk menampilkan daftar berita, detail berita, dan filter berdasarkan kategori.

- **Model `BeritaModel.php`**  
  Berfungsi untuk berinteraksi dengan tabel `berita` di database.

- **View `berita/index.php`**  
  Menampilkan berita ke pengguna dengan tampilan yang menarik.

---

## 7. Screenshot Aplikasi

- ***akses semua user**
- ![halaman_awal](https://github.com/user-attachments/assets/ee1d2d19-2641-4a5f-b2b2-522c954453da)
- ![halaman_artikel](https://github.com/user-attachments/assets/072e80e6-6509-4c3d-8a81-4159ec62f4c4)
- ***hak akses admin***
- ![halaman_login](https://github.com/user-attachments/assets/76b93c18-99e7-445e-b65f-1970ce8f07f7)
- ![halaman_dasbord](https://github.com/user-attachments/assets/4b113d1a-850e-4e74-8164-a147885383b5)
- ![halaman_buat_artikel](https://github.com/user-attachments/assets/d126f0df-dc4e-4bdd-8b5f-1bccd2cceedd)

---

## 8. Penutup
Dengan selesainya projek ini, saya mempelajari penerapan **MVC pada CodeIgniter 4**,
pengelolaan database MySQL, serta cara membangun aplikasi web dinamis menggunakan framework PHP modern.

---

