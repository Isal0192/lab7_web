<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('/style.css');?>">
    <link rel="stylesheet" href="<?= base_url('/styleartikel.css');?>">
</head>

<body>
    <div id="container">
        <?= $this->include('template/header'); ?>
        <section id="wrapper">
            <div class="bungkusan">
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
                        <?php if($artikel): foreach($artikel as $row): ?>
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
                            <?= $pager->links(); ?>
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
                            <th>AKsi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </section>
        <?= $this->include('template/footer'); ?>
    </div>
</body>

</html>