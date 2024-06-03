<?= $this->extend('layouts/layout') ?>
<?= $this->section('containt') ?>
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<!-- Customers Card -->
<div class="col-xxl-4 col-xl-12">
    <div class="card recent-sales overflow-auto">
        <div class="card-body">
            <h5 class="card-title">Pengajuan Proposal <span><button type="button" data-bs-toggle="modal" data-bs-target="#pengajuan" class="btn btn-warning rounded-pill
         btn-sm ">+ Tambah</button></span> </h5>
            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                </div>
                <!-- Default Table -->
                <table class="table">
                    <thead class="table">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">jenis Barang </th>
                            <th scope="col">Tanggal Masuk</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($all_data as $barang) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $barang->nama_brg ?></td>
                                <td><?= $barang->jenis_brg ?></td>
                                <td><?= $barang->tgl_masuk ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div><!-- End Customers Card -->

<!-- modal CREATE-->
<div class="modal fade" id="pengajuan" tabindex="-1">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pengajuan Proposal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <!-- General Form Elements -->
                <form action="<?= base_url("/barangMasuk/create") ?>" method="post">
                    <div class="col-sm-10">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="Leave a comment here" id="nama_brg" name="nama_brg"></input>
                            <label for="floatingTextarea">Nama Barang</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="Leave a comment here" id="jenis_brg" name="jenis_brg"></input>
                            <label for="floatingTextarea">Jenis Barang</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" placeholder="Leave a comment here" id="tgl_masuk" name="tgl_masuk"></input>
                            <label for="floatingTextarea">Tanggal Masuk</label>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>


        </div>
    </div>
</div><!-- End Modal Dialog Scrollable-->
<?= $this->endsection() ?>