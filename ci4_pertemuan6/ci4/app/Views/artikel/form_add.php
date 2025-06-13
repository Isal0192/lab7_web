<?= $this->include('template/admin_header'); ?>

<!-- Google Fonts dan Custom CSS -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<style>
body {
  font-family: 'Poppins', sans-serif;
  background: #f4f9ff;
  margin: 0;
  padding: 30px;
}

.form-container {
  max-width: 700px;
  margin: auto;
  background: #ffffff;
  padding: 40px;
  border-radius: 12px;
  box-shadow: 0 12px 30px rgba(0, 0, 0, 0.06);
}

h2 {
  text-align: center;
  color: #2c3e50;
  font-weight: 600;
  margin-bottom: 25px;
}

form p {
  margin-bottom: 20px;
}

input[type="text"],
textarea,
input[type="file"] {
  width: 100%;
  padding: 14px 18px;
  font-size: 16px;
  border-radius: 8px;
  border: 1px solid #ced4da;
  box-sizing: border-box;
  transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

input[type="text"]:focus,
textarea:focus,
input[type="file"]:focus {
  border-color: #007BFF;
  box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.1);
  outline: none;
}

.btn {
  background: #007bff;
  color: white;
  padding: 14px 24px;
  font-size: 16px;
  font-weight: 500;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  transition: background 0.3s ease;
}

.btn:hover {
  background: #0056b3;
}

@media (max-width: 768px) {
  .form-container {
    padding: 25px;
  }
}
</style>

<div class="form-container">
  <h2><?= $title; ?></h2>
  <form action="" method="post" enctype="multipart/form-data">
    <p>
      <input type="text" name="judul" placeholder="Judul Artikel">
    </p>
    <p>
      <textarea name="isi" cols="50" rows="10" placeholder="Tulis isi artikel di sini..."></textarea>
    </p>
    <p>
      <input type="file" name="gambar">
    </p>
    <p style="text-align: right;">
      <input type="submit" value="Kirim Artikel" class="btn">
    </p>
  </form>
</div>

<?= $this->include('template/admin_footer'); ?>