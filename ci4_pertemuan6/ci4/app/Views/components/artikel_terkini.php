<div class="artikel-terkini">
  <h3>Artikel Terkini</h3>
  <ul>
    <?php foreach ($artikel as $row): ?>
    <li>
      <a href="<?= base_url('/artikel/' . $row['slug']) ?>">
        <?= $row['judul'] ?>
      </a>
      <small>Diposting pada: <?= date('d M Y H:i', strtotime($row['created_at'])); ?></small>
      <span class="kategori">Kategori: <?= $row['kategori']; ?></span>
    </li>
    <?php endforeach; ?>
  </ul>
</div>