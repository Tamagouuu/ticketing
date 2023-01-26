<?php require_once(PARTIAL_PATH . '/dashboard/header.php') ?>


<h1 class="h3 mb-2 text-gray-800 font-weight-bold mb-4">Type Transportasi</h1>

<a href="<?= BASEURL ?>/dashboard/tambahtypetransport" class="btn btn-success btn-icon-split mb-4">
    <span class="icon text-white-50">
        <i class="fas fa-plus"></i>
    </span>
    <span class="text">Tambah Data</span>
</a>

<?php Flasher::flash() ?>

<div class="card shadow mb-4 mt-2">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Type Transportasi</h6>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name Type</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name Type</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($data['typeTransport'] as $typeTransport) : ?>
                        <tr>
                            <td><?= $typeTransport['nama_type'] ?></td>
                            <td><?= $typeTransport['keterangan'] ?></td>
                            <td>
                                <a href="#" class="btn btn-warning btn-circle btn-sm">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <form action="<?= BASEURL ?>/dashboard/deleteTypeTransport/<?= $typeTransport['id_type_transportasi'] ?>" method="POST" class="d-inline">
                                    <button class="btn btn-danger btn-circle btn-sm" type="submit">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once(PARTIAL_PATH . '/dashboard/footer.php') ?>