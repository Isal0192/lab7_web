#Tugas CodeIgneter

buat database tabel artikel dengan struktur
+--------+--------------+------+-----+---------+----------------+
| Field  | Type         | Null | Key | Default | Extra          |
+--------+--------------+------+-----+---------+----------------+
| id     | int(11)      | NO   | PRI | NULL    | auto_increment |
| judul  | varchar(200) | NO   |     | NULL    |                |
| isi    | text         | YES  |     | NULL    |                |
| gambar | varchar(200) | YES  |     | NULL    |                |
| status | tinyint(1)   | YES  |     | 0       |                |
| slug   | varchar(200) | YES  |     | NULL    |                |
+--------+--------------+------+-----+---------+----------------+

Hapus command pada .env bagaian database

database.default.hostname = localhost
database.default.database = lab_ci4
database.default.username = root
database.default.password = 
database.default.DBDriver = MySQLi
database.default.DBPrefix =
database.default.port = 3306

berikutnya buat model pada app/Models buat file ArtikelModel.php

<?php
namespace App\Models;
use CodeIgniter\Model;
class ArtikelModel extends Model
{
protected $table = 'artikel';
protected $primaryKey = 'id';
protected $useAutoIncrement = true;
protected $allowedFields = ['judul', 'isi', 'status', 'slug',
'gambar'];
}

lalu berikutnya buat controller baru Artikel.php
<?php
namespace App\Controllers;
use App\Models\ArtikelModel;

class Artikel extends BaseController
{
    public function index()
        {
        $title = 'Daftar Artikel';
        $model = new ArtikelModel();
        $artikel = $model->findAll();
        return view('artikel/index', compact('artikel', 'title'));
        }
}


dan buat view dengan menambahkan folder artikel/index.php dalam view
dalam view nya kita ambil semua variabel yang dikirim dari controller

 <?php if($artikel): foreach($artikel as $row): ?>
                <article class="entry">
                    <h2<a href="<?= base_url('/artikel/' . $row['slug']);?>"><?=
$row['judul']; ?></a>
                        </h2>
                        <img src="<?= base_url('/gambar/' . $row['gambar']);?>" alt="<?=
$row['judul']; ?>">
                        <p><?= substr($row['isi'], 0, 200); ?></p>
                </article>
                <hr class="divider" />
                <?php endforeach; else: ?>

gabungkan denan template header dan footer yang sudah kita buat
sehingga menghasilkan tampilan web yang mirip dengan pertemuan sebelumnya

tahapselanjutnya kita bisa membuat isi artikel nya

mysql> INSERT INTO artikel (judul, isi, slug) VALUE
    -> ('Artikel pertama', 'Lorem Ipsum adalah contoh teks atau dummy dalamindustri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah
    '> menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak
    '> yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk
    '> menjadi sebuah buku contoh huruf.', 'artikel-pertama'),
    -> ('Artikel kedua', 'Tidak seperti anggapan banyak orang, Lorem Ipsum
    '> bukanlah teks-teks yang diacak. Ia berakar dari sebuah naskah sastra latin
    '> klasik dari era 45 sebelum masehi, hingga bisa dipastikan usianya telah
    '> mencapai lebih dari 2000 tahun.', 'artikel-kedua');

dan refresh halaman web nya. maka akan tampil
![alt text](image.png)

berikut nya buat halaman admin beserta fungsi fungsi nya.....


