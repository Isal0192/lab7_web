<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('/styleartikel.css');?>">
</head>

<body>
    <div id="container">
        <?= $this->include('template/admin_header'); ?>
        <form method="get" class="form-search">
            <input type="text" name="q" value="<?= $q; ?>" placeholder="Cari artikel...">
            <input type="submit" value="Cari" class="btn btn-primary">
        </form>
        <section id="wrapper">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Status</th>
                        <th>AKsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($artikel): ?>
                    <?php foreach($artikel as $row): ?>
                    <tr>
                        <td><?= $row['id']; ?></td>
                        <td>
                            <b><?= $row['judul']; ?></b>
                            <p><small><?= substr($row['isi'], 0, 50); ?></small></p>
                        </td>
                        <td><?= $row['status']; ?></td>
                        <td>
                            <a class="btn" href="<?= base_url('/admin/artikel/edit/' .$row['id']);?>">Ubah</a>
                            <a class="btn btn-danger" onclick="return confirm('Yakin menghapus data?');"
                                href="<?= base_url('/admin/artikel/delete/' .$row['id']);?>">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    <?php else: ?>
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
                        <th>AKsi</th>
                    </tr>
                </tfoot>
            </table>
            <?php if (isset($pager)) : ?>
            <?= $pager->links(); ?>
            <?php endif; ?>
        </section>
        <?= $this->include('template/footer'); ?>
    </div>
</body>

</html>