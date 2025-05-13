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
                <article class="entry">
                    <h2>Belum ada data.</h2>
                </article>
                <?php endif; ?>
            </section>
            <?= $this->include('template/sidebar'); ?>
        </section>
        <?= $this->include('template/footer'); ?>
    </div>
</body>

</html>