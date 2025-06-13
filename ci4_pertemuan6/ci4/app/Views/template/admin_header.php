<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title><?= $title; ?></title>
  <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
  <div id="container">
    <header>
      <h1>Admin Portal Berita</h1>
    </header>
    <nav>
      <a href="<?= base_url('admin/artikel'); ?>">Dashboard</a>
      <a href="<?= base_url('/artikel'); ?>">Artikel</a>
      <a href="<?= base_url('admin/artikel/add'); ?>">Tambah Artikel</a>
      <a href="<?= base_url('user/logout'); ?>" class="text-danger">Logout</a>
    </nav>
    <section id="wrapper">
      <section id="main"></section>