<?php require_once(PARTIAL_PATH . '/dashboard/header.php') ?>


<h1 class="h3 mb-2 text-gray-800 font-weight-bold mb-4">Transportasi</h1>

<a href="<?= BASEURL ?>/dashboard/tambahtransportasi" class="btn btn-success btn-icon-split mb-4">
    <span class="icon text-white-50">
        <i class="fas fa-plus"></i>
    </span>
    <span class="text">Tambah Data</span>
</a>

<?php Flasher::flash() ?>

<div class="card shadow mb-4 mt-2">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Transportasi</h6>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Jumlah Kursi</th>
                        <th>Keterangan</th>
                        <th>Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Kode</th>
                        <th>Jumlah Kursi</th>
                        <th>Keterangan</th>
                        <th>Type</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($data['transportasi'] as $transportasi) : ?>
                        <tr>
                            <td><?= $transportasi['kode'] ?></td>
                            <td><?= $transportasi['jumlah_kursi'] ?></td>
                            <td><?= $transportasi['keterangan'] ?></td>
                            <td><?= $transportasi['type_keterangan'] ?></td>
                            <td>
                                <?= Components::editButton("/dashboard/edittransportasi/{$transportasi['id_transportasi']}") ?>
                                <?= Components::deleteButton("/dashboard/deletetransportasi/{$transportasi['id_transportasi']}") ?>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once(PARTIAL_PATH . '/dashboard/footer.php') ?>