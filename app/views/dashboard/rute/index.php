<?php require_once(PARTIAL_PATH . '/dashboard/header.php') ?>


<h1 class="h3 mb-2 text-gray-800 font-weight-bold mb-4">Rute</h1>

<a href="<?= BASEURL ?>/dashboard/tambahrute" class="btn btn-success btn-icon-split mb-4">
    <span class="icon text-white-50">
        <i class="fas fa-plus"></i>
    </span>
    <span class="text">Tambah Data</span>
</a>

<?php Flasher::flash() ?>

<div class="card shadow mb-4 mt-2">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Rute</h6>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Tujuan</th>
                        <th>Rute Awal</th>
                        <th>Rute Akhir</th>
                        <th>Harga</th>
                        <th>Transportasi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Tujuan</th>
                        <th>Rute Awal</th>
                        <th>Rute Akhir</th>
                        <th>Harga</th>
                        <th>Transportasi</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($data['rute'] as $rute) : ?>
                        <tr>
                            <td><?= $rute['tujuan'] ?></td>
                            <td><?= $rute['rute_awal'] ?></td>
                            <td><?= $rute['rute_akhir'] ?></td>
                            <td><?= $rute['harga'] ?></td>
                            <td><?= $rute['keterangan_transportasi'] ?></td>
                            <td>
                                <?= Components::editButton("/dashboard/editrute/{$rute['id_rute']}") ?>
                                <?= Components::deleteButton("/dashboard/deleterute/{$rute['id_rute']}") ?>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once(PARTIAL_PATH . '/dashboard/footer.php') ?>