<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('/style.css');?>">
</head>

<body>
    <div id="container">
        <?= $this->include('template/header'); ?>
        <section id="wrapper">
            <section id="main">
                <article class="entry">
                    <h2><?= $artikel['judul']; ?></h2>
                    <img src="<?= base_url('/gambar/' . $artikel['gambar']);?>" alt="<?=$artikel['judul']; ?>">
                    <p><?= $artikel['isi']; ?></p>
                </article>
            </section>
            <?= $this->include('template/sidebar'); ?>
        </section>
        <?= $this->include('template/footer'); ?>
    </div>
</body>

</html>