<?= $this->extend('layouts/layout') ?>
<?= $this->section('containt') ?>
<div class="row">

    <!-- Left side columns -->
    <!-- <div class="col-lg-8">
    <div class="row"> -->

    <!-- Recent Sales -->
    <div class="col-12">
        <div class="card recent-sales overflow-auto">
            <div class="card-body ">
                <h5 class="card-title"> </h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Jenis Barang</th>
                            <th scope="col">Tanggal Masuk</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($all_data as $barang) : ?>
                            <tr>
                                <th scope="row"><?= $no++ ?></th>
                                <td><?= $barang->nama_brg ?></td>
                                <td><?= $barang->jenis_brg ?></td>
                                <td><?= $barang->tgl_masuk ?></td>
                                <td><a href="<?= base_url('') . $barang->id ?> " data-bs-toggle="modal" data-bs-target="#edit<?= $barang->id ?>" class="bi bi-pen"> </a>
                                    <a href="<?= base_url('') . $barang->id ?>" class="bi bi-trash" data-bs-toggle="modal" data-bs-target="#delet<?= $barang->id ?>"> </a>
                                </td>
                            </tr>
                        <?php endforeach ?>

                    </tbody>
                </table>
            </div>

        </div>
    </div><!-- End Recent Sales -->

    <?php foreach ($all_data as $data) : ?>
        <!-- modal EDIT -->
        <div class="modal fade" id="edit<?= $data->id ?>" tabindex="-1">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Proposal</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <!-- General Form Elements -->
                        <form action="<?= base_url("/barangMasuk/update/" . $data->id) ?> " method="post">
                            <input type="hidden" class="form-control" id="id" name="id" value="<?= $data->id ?>">
                            <div class="col-sm-10">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="nama_brg" placeholder="Leave a comment here" name="nama_brg" value="<?= $data->nama_brg ?>">
                                    <label for=" floatingTextarea">Nama Barang</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="jenis_brg" name="jenis_brg" value="<?= $data->jenis_brg ?>">
                                    <label for=" floatingTextarea">Jenis Barang</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control" placeholder="Leave a comment here" id="tgl_masuk" name="tgl_masuk" value="<?= $data->tgl_masuk ?>"></input>
                                    <label for=" floatingTextarea">Tanggal Masuk</label>
                                </div>

                            </div>
                            <div class=" modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div><!-- End Modal Dialog Scrollable-->




        <!-- modal H -->
        <div class="modal fade" id="delet<?= $data->id ?>" tabindex="-1">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Hapus Proposal</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <!-- General Form Elements -->
                        <form action="<?= base_url("/barangMasuk/delete/" . $data->id) ?> " method="post">
                            <div class="card-body">
                                Yzkin <?= $data->id ?>?
                            </div>
                            <div class=" modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div><!-- End Modal Dialog Scrollable-->
    <?php endforeach; ?>

    <!-- </div>
</div>End Left side columns -->



</div>
<?= $this->endsection() ?>