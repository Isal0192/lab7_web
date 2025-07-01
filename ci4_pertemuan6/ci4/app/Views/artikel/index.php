<?= $this->include('template/header'); ?>

<div class="article-container">
  <?php if ($artikel): foreach ($artikel as $row): ?>
  <article class="entry">
    <h2><a href="<?= base_url('/artikel/' . $row['slug']); ?>"><?= $row['judul']; ?></a></h2>
    <img src="<?= base_url('/gambar/' . $row['gambar']); ?>" alt="<?= $row['judul']; ?>">
    <p><?= substr($row['isi'], 0, 200); ?>...</p>
    <a href="<?= base_url('/artikel/' . $row['slug']); ?>" class="read-more">Baca selengkapnya</a>
  </article>
  <?php endforeach; else: ?>
  <article class="entry">
    <h2>Belum ada data.</h2>
  </article>
  <?php endif; ?>
</div>

<?= $this->include('template/footer'); ?>