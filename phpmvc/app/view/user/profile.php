<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul'];?></title>
</head>
<body>
    <div class="container text-center mt-4">
    <h1>Halaman User</h1>
    <p>Halo, nama saya <?= $data['nama'];?>, saya seorang <?= $data['pekerjaan'];?></p>
    
    <img src="<?= BASE_URL; ?>/img/m.jpg" alt="" width="200" class="rounded-circle shadow">
</div>
</body>
</html>