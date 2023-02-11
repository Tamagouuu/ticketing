<?php require_once(PARTIAL_PATH . '/dashboard/header.php') ?>


<h1 class="h3 mb-2 text-gray-800 font-weight-bold mb-4">Penumpang</h1>

<a href="<?= BASEURL ?>/dashboard/tambahpenumpang" class="btn btn-success btn-icon-split mb-4">
    <span class="icon text-white-50">
        <i class="fas fa-plus"></i>
    </span>
    <span class="text">Tambah Data</span>
</a>

<?php Flasher::flash() ?>

<div class="card shadow mb-4 mt-2">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Penumpang</h6>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Nama Penumpang</th>
                        <th>Alamat</th>
                        <th>Tgl. Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>No. Telp</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Username</th>
                        <th>Nama Penumpang</th>
                        <th>Alamat</th>
                        <th>Tgl. Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>No. Telp</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($data['penumpang'] as $penumpang) : ?>
                        <tr>
                            <td><?= $penumpang['username'] ?></td>
                            <td><?= $penumpang['nama_penumpang'] ?></td>
                            <td><?= $penumpang['alamat_penumpang'] ?></td>
                            <td><?= $penumpang['tanggal_lahir'] ?></td>
                            <td><?= $penumpang['jenis_kelamin'] ?></td>
                            <td><?= $penumpang['telefone'] ?></td>
                            <td>
                                <?= Components::editButton("/dashboard/editpenumpang/{$penumpang['id_penumpang']}") ?>
                                <?= Components::deleteButton("/dashboard/deletepenumpang/{$penumpang['id_penumpang']}") ?>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once(PARTIAL_PATH . '/dashboard/footer.php') ?>