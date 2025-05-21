<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('/style.css');?>">
</head>

<body>
    <div id="container">
        <?= $this->include('template/header'); ?>
        <section id="wrapper">
            <section id="main">
                <h1><?= $title;?></h1>
                <h2><?= $content;?></h2>
            </section>
            <?= $this->include('template/sidebar'); ?>
        </section>
        <?= $this->include('template/footer'); ?>
    </div>
</body>

</html>