<?= $this->include('template/header'); ?>

<div id="container">
    <section id="wrapper">
        <section id="main">
            <article class="entry">
                <h2><?= $artikel['judul']; ?></h2>
                <img src="<?= base_url('/gambar/' . $artikel['gambar']);?>" alt="<?=$artikel['judul']; ?>">
                <p><?= $artikel['isi']; ?></p>
            </article>
        </section>
    </section>
</div>

<?= $this->include('template/footer'); ?>