

## 1. Mengaktifkan Ekstensi PHP yang Dibutuhkan

Pastikan ekstensi seperti `intl` dan `gd` diaktifkan di file `php.ini` (XAMPP).

Contoh error:
![Ekstensi Error](ss_READMI/image1.png)

Langkah mengaktifkan:

1. Buka `C:\xampp\php\php.ini`
2. Cari baris berikut dan **hapus tanda `;`** di depannya:

   ```ini
   extension=intl
   extension=gd
   dan lainlain nya
   ```
3. Simpan, lalu restart Apache di XAMPP.

---

## 2. Menjalankan Aplikasi di Browser

Akses proyek melalui browser:

```
http://localhost/lab11_ci/ci4/public/
```

Contoh tampilan:
![Tampilan di Browser](ss_READMI/image2.png)

---

## 3. Mengaktifkan Mode Debugging

Untuk melihat pesan error saat ada kesalahan:

1. Buka file `.env` (rename file `env` menjadi `.env` jika belum ada).

2. Ubah bagian ini:

   ```ini
   CI_ENVIRONMENT = production
   ```

   Menjadi:

   ```ini
   CI_ENVIRONMENT = development
   ```

3. Buat kesalahan (misalnya kesalahan sintaks di controller) dan lihat perbedaan pesan error.

---

## 4. Menambahkan Route Baru

Buka file `app/Config/Routes.php`, lalu tambahkan:

```php
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');
```

Untuk memastikan route sudah ditambahkan, jalankan:

```bash
php spark routes
```

Hasil yang benar akan terlihat seperti ini:

```
+--------+---------+------+-------------------------------+----------------+---------------+
| Method | Route   | Name | Handler                       | Before Filters | After Filters |
+--------+---------+------+-------------------------------+----------------+---------------+
| GET    | /       | »    | \App\Controllers\Home::index  |                |               |
| GET    | about   | »    | \App\Controllers\Page::about  |                |               |
| GET    | contact | »    | \App\Controllers\Page::contact|                |               |
| GET    | faqs    | »    | \App\Controllers\Page::faqs   |                |               |
+--------+---------+------+-------------------------------+----------------+---------------+
```

Namun, jika kamu akses route tersebut di browser sekarang, akan muncul:

```
404 - File Not Found
```

Karena kita belum membuat controllernya.

---

## 5. Membuat Controller

Buat file baru: `app/Controllers/Page.php`, lalu isi dengan:

```php
<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Page extends BaseController
{
    public function about()
    {
        echo "Ini halaman About";
    }

    public function contact()
    {
        echo "Ini halaman Contact";
    }

    public function faqs()
    {
        echo "Ini halaman FAQs";
    }
}
```

> Catatan: nantinya, kita bisa mengganti `echo` dengan `return view(...)` agar menampilkan halaman dari folder `app/Views`.

Contoh dari controller bawaan:

```php
public function index(): string
{
    return view('welcome_message');
}
```

---

## 6. Membuat Halaman View `about.php`

Buat file baru: `app/Views/about.php`

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
</head>
<body>
    <h1><?= $title; ?></h1>
    <p><?= $content; ?></p>
</body>
</html>
```

---

## 7. Membuat Tampilan Modular

Agar tampilan lebih rapi dan mudah diatur, kita pisahkan bagian-bagian tampilan ke dalam folder `template/`.

Struktur tampilan dalam view:

```php
<body>
    <div id="container">
        <?= $this->include('template/header'); ?>
        <section id="wrapper">
            <section id="main">
                <h1><?= $title; ?></h1>
                <p><?= $content; ?></p>
            </section>
            <?= $this->include('template/sidebar'); ?>
        </section>
        <?= $this->include('template/footer'); ?>
    </div>
</body>
```

Folder `template` akan berisi file-file seperti:

* `header.php`
* `footer.php`
* `sidebar.php`

Contoh ilustrasi:
![Struktur Modular](ss_REDME/image3.png)
