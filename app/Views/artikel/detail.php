<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>

<body>
    <div class="container">
        <?= $this->include('template/header'); ?>

        <div class="content-wrapper">
            <main class="main-content" id="main">
                <article class=" entry">
                    <h2><?= $artikel['judul']; ?></h2>
                    <img src="<?= base_url('/gambar/' . $artikel['gambar']);?>" alt="<?=$artikel['judul']; ?>">
                    <p><?= $artikel['isi']; ?></p>
                </article>
            </main>
            <aside class="sidebar">
                <?= $this->include('template/footer'); ?>
            </aside>
        </div>
    </div>
</body>

</html>