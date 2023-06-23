<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <table class="table table-striped">
        <h1 class="mt-2">List of Comics</h1>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Cover</th>
                <th scope="col">Title</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($comics as $c) : ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><img src="/assets/img/<?= $c['cover']; ?>" alt="" class="sampul"></td>
                    <td><?= $c['title']; ?></td>
                    <td>
                        <a href="/comics/<?= $c['slug']; ?>" class="btn btn-success">Detail</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>