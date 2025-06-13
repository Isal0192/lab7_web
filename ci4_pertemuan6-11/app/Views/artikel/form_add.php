<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('/style.css');?>">
    <link rel="stylesheet" href="<?= base_url('/styleartikel.css');?>">
</head>

<body>
    <div id="container">
        <?= $this->include('template/admin_header'); ?>
        <section id="wrapper">
            <div class="bungkusan">
                <h2 class="judul"><?= $title; ?></h2>
                <form action="" method=" post" enctype="multipart/form-data">
                    >
                    <p>
                        <input type="text" name="judul" placeholder="Judul Artikel">
                    </p>
                    <p><input type="file" name="gambar"></p>
                    <p>
                        <textarea name="isi" cols="50" rows="10" placeholder="Tulis isi artikel di sini..."></textarea>
                    </p>
                    <p><input type="submit" value="Kirim Artikel" class="btn">
                    </p>
                </form>
            </div>
        </section>
        <?= $this->include('template/footer'); ?>
    </div>
</body>

</html>