<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<!-- /.card-header -->
<div class="card-body">

    <?php if (!empty(session()->getFlashdata('message'))) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo session()->getFlashdata('message'); ?>

            <button type="button" class="close" data-dismiss="alert" aria- label="Close">

                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Mahasiswa</th>
                <th>Alamat</th>
                <th>Jurusan</th>
                <th>Buku</th>
                <th>Denda</th>
                <th>Tanggal Kembali</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($pengembalian as $row) {
            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row->nama; ?></td>
                    <td><?= $row->alamat; ?></td>
                    <td><?= $row->jurusan; ?></td>
                    <td><?= $row->buku ?></td>
                    <td><?= $row->denda; ?></td>
                    <td><?= $row->t_kembali; ?></td>

                </tr>

            <?php } ?>
        </tbody>
    </table>
</div>
<!-- /.card-body -->
<?= $this->endSection('content'); ?>