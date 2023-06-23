<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h2 class="mt-2">Details Comics</h2>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/assets/img/<?= $comics['cover']; ?>" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $comics['title']; ?></h5>
                    <p class="card-text"><b>Penulis : </b><?= $comics['writer']; ?></p>
                    <p class="card-text"><small class="text-body-secondary"><b>Penerbit : </b><?= $comics['publisher']; ?></small></p>

                    <a href="" class="btn btn-warning">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>

                    <br>
                    <br>
                    <a href="/comics" class="btn btn-outline-dark">Back to List of Comics</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>