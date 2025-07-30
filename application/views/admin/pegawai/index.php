        <div class="container-fluid py-2">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                                <h6 class="text-white text-capitalize ps-3">Data Pegawai</h6>
                                <div class="flex align-items-center me-3">
                                    <button class="btn btn-info"><i class="material-symbols-rounded">print</i></button>
                                    <button class="btn btn-warning"><i class="fas fa-file-excel"></i></button>
                                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalTambah"><i class="material-symbols-rounded">add</i></button>
                                </div>
                            </div>
                        </div>
                        <?php $this->load->view('admin/pegawai/input'); ?>
                        <?php $this->load->view('admin/pegawai/edit'); ?>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center justify-content-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Foto</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Alamat</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jabatan</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No Telp</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Email</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Aksi</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // $no = 1;
                                        foreach ($pegawai as $p) {
                                        ?>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2">
                                                        <div>
                                                            <img src="<?= base_url('assets/admin/img/' . $p->foto) ?>" class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="my-auto">
                                                            <h6 class="mb-0 text-sm"><?= $p->nama ?></h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-sm font-weight-bold mb-0 text-capitalize"><?= $p->alamat ?></p>
                                                </td>
                                                <td>
                                                    <p class="text-sm font-weight-bold mb-0 text-capitalize"><?= $p->jabatan ?></p>
                                                </td>
                                                <td>
                                                    <span class="text-xs font-weight-bold"><?= $p->telp ?></span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <span class="me-2 text-xs font-weight-bold"><?= $p->user_email ?></span>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <button type="button"
                                                            data-id="<?= $p->id ?>"
                                                            data-nip="<?= $p->nip ?>"
                                                            data-nama="<?= $p->nama ?>"
                                                            data-alamat="<?= $p->alamat ?>"
                                                            data-telp="<?= $p->telp ?>"
                                                            data-jabatan="<?= $p->jabatan ?>"
                                                            data-foto="<?= $p->foto ?>"
                                                            data-user_id="<?= $p->user_id ?>"
                                                            class="edit-btn text-info pe-3 border-end btn-no-outline" data-bs-toggle="modal" data-bs-target="#modalEdit"><i class="material-symbols-rounded">edit</i></button>
                                                        <a href="#" class="delete-btn text-danger" 
                                                           data-id="<?= $p->id ?>" 
                                                           data-nama="<?= $p->nama ?>">
                                                            <i class="material-symbols-rounded">delete</i>
                                                        </a>
                                                        <form id="deleteForm" action="<?= site_url('admin/pegawai/delete') ?>" method="post" style="display: none;">
                                                            <input type="hidden" name="delete-id" id="delete-id">
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form id="deleteForm" method="post" style="display:none;">
            <input type="hidden" name="id" id="delete-id">
        </form>