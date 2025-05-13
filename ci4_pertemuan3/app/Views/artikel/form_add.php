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
        <?= $this->include('template/header'); ?>
        <section id="wrapper">
            <div class="bungkusan">
                <h2><?= $title; ?></h2>
                <form action="" method="post">
                    <p>
                        <input type="text" name="judul">
                    </p>
                    <p>
                        <textarea name="isi" cols="50" rows="10"></textarea>
                    </p>
                    <p><input type="submit" value="Kirim" class="btn btn-large"></p>
                </form>
            </div>
        </section>
        <?= $this->include('template/footer'); ?>
    </div>
</body>

</html>