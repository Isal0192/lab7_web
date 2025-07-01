<?= $this->include('template/admin_header'); ?>

<!-- Google Font & Custom Style -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<style>
body {
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(to right, #f8fdff, #e3f2fd);
  margin: 0;
  padding: 30px;
}

.form-container {
  max-width: 700px;
  margin: auto;
  background: #ffffff;
  padding: 40px;
  border-radius: 12px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
}

h2 {
  text-align: center;
  color: #007BFF;
  margin-bottom: 30px;
  font-weight: 600;
}

form p {
  margin-bottom: 20px;
}

input[type="text"],
textarea {
  width: 100%;
  padding: 14px 18px;
  font-size: 16px;
  border-radius: 8px;
  border: 1px solid #ccc;
  box-sizing: border-box;
  transition: border-color 0.3s ease;
}

input[type="text"]:focus,
textarea:focus {
  border-color: #007BFF;
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

  input[type="text"],
  textarea {
    font-size: 15px;
  }
}
</style>

<div class="form-container">
  <h2><?= $title; ?></h2>
  <form action="" method="post">
    <p>
      <input type="text" name="judul" value="<?= $data['judul']; ?>" placeholder="Judul Artikel">
    </p>
    <p>
      <textarea name="isi" cols="50" rows="10" placeholder="Tulis isi artikel..."><?= $data['isi']; ?></textarea>
    </p>
    <p style="text-align: right;">
      <input type="submit" value="Simpan Artikel" class="btn">
    </p>
  </form>
</div>

<?= $this->include('template/admin_footer'); ?>