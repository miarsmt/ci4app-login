    <?= $this->extend('layout/template'); ?>

    <?= $this->section('content'); ?>
    <div class="container-fluid">
        <h1>Contact Us</h1>
        <?php foreach ($alamat as $a) : ?>
            <ul>
                <li><?= $a['tipe']; ?></li>
                <li><?= $a['alamat']; ?></li>
                <li><?= $a['kota']; ?></li>
            </ul>
        <?php endforeach; ?>
    </div>
    <?= $this->endSection(); ?>