<?= $this->include('template/admin_header'); ?>

<style>
body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background-color: #f5f7fa;
  margin: 0;
  padding: 20px;
}

.form-search {
  display: flex;
  gap: 10px;
  margin-bottom: 25px;
}

.form-search input[type="text"] {
  flex: 1;
  padding: 12px 16px;
  border-radius: 8px;
  border: 1px solid #ddd;
  font-size: 15px;
  transition: border-color 0.3s ease;
}

.form-search input[type="text"]:focus {
  border-color: #007bff;
  outline: none;
}

.btn {
  padding: 10px 18px;
  border-radius: 8px;
  font-size: 14px;
  text-decoration: none;
  font-weight: 600;
  cursor: pointer;
  border: none;
  transition: all 0.3s ease;
}

.btn-primary {
  background-color: #007bff;
  color: white;
}

.btn-primary:hover {
  background-color: #0056b3;
}

.btn-danger {
  background-color: #dc3545;
  color: white;
}

.btn-danger:hover {
  background-color: #b02a37;
}

.table {
  width: 100%;
  border-collapse: collapse;
  background-color: white;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
  border-radius: 8px;
  overflow: hidden;
  margin-top: 20px;
}

.table th,
.table td {
  padding: 15px 20px;
  text-align: left;
  border-bottom: 1px solid #f1f3f5;
  color: #333;
}

.table th {
  background-color: #f1f3f5;
  font-weight: 600;
}

.table tbody tr:hover {
  background-color: #f9fafb;
}

.table tfoot th {
  background-color: #f1f3f5;
  font-weight: 600;
}

.pagination {
  display: flex;
  justify-content: center;
  gap: 10px;
  margin-top: 20px;
}

.pagination a,
.pagination span {
  padding: 8px 16px;
  font-size: 14px;
  color: #007bff;
  text-decoration: none;
  border-radius: 4px;
  border: 1px solid #ddd;
  transition: background-color 0.3s, color 0.3s;
}

.pagination a:hover {
  background-color: #007bff;
  color: white;
}

.pagination .active {
  background-color: #007bff;
  color: white;
  border-color: #007bff;
}

.pagination .disabled {
  color: #ccc;
  cursor: not-allowed;
  border-color: #ccc;
}
</style>

<form method="get" class="form-search">
  <input type="text" name="q" value="<?= $q; ?>" placeholder="Cari artikel...">
  <input type="submit" value="Cari" class="btn btn-primary">
</form>

<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Judul</th>
      <th>Status</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php if($artikel): foreach($artikel as $row): ?>
    <tr>
      <td><?= $row['id']; ?></td>
      <td>
        <b><?= $row['judul']; ?></b>
        <p><small><?= substr($row['isi'], 0, 50); ?>...</small></p>
      </td>
      <td><?= $row['status']; ?></td>
      <td>
        <a class="btn btn-primary" href="<?= base_url('/admin/artikel/edit/' . $row['id']);?>">Ubah</a>
        <a class="btn btn-danger" onclick="return confirm('Yakin menghapus data?');"
          href="<?= base_url('/admin/artikel/delete/' . $row['id']);?>">Hapus</a>
      </td>
    </tr>
    <?php endforeach; else: ?>
    <tr>
      <td colspan="4">Belum ada data.</td>
    </tr>
    <?php endif; ?>
  </tbody>
  <tfoot>
    <tr>
      <th>ID</th>
      <th>Judul</th>
      <th>Status</th>
      <th>Aksi</th>
    </tr>
  </tfoot>
</table>

<!-- Pagination Section -->
<div class="pagination">
  <?= $pager->links() ?>
</div>

<?= $this->include('template/admin_footer'); ?>