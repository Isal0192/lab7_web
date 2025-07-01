<?= $this->include('template/header'); ?>

<!-- Google Fonts & Styling -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<style>
body {
  font-family: 'Poppins', sans-serif;
  background-color: #f4f9ff;
  margin: 0;
  padding: 0;
}

.entry {
  width: 100%;
  padding: 30px 80px;
  background: #fff;
  box-sizing: border-box;
}

.entry h2 {
  font-size: 40px;
  color: #2c3e50;
  font-weight: 600;
  margin-bottom: 30px;
  text-align: center;
}

.entry img {
  display: block;
  width: 40%;
  height: auto;
  margin: 0 auto 40px auto;
  border-radius: 12px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
}

.entry p {
  font-size: 16px;
  line-height: 1.9;
  color: #333;
  text-align: justify;
  padding: 0 10px;
}

@media (max-width: 768px) {
  .entry {
    padding: 30px 20px;
  }

  .entry h2 {
    font-size: 26px;
  }

  .entry p {
    font-size: 16px;
  }
}
</style>

<article class="entry">
  <h2><?= $artikel['judul']; ?></h2>
  <img src="<?= base_url('/gambar/' . $artikel['gambar']); ?>" alt="<?= $artikel['judul']; ?>">
  <p><?= $artikel['isi']; ?></p>
</article>

<?= $this->include('template/footer'); ?>