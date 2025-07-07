        <div class="container-fluid py-2">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                                <h6 class="text-white text-capitalize ps-3">Data Pengguna</h6>
                                <div class="flex align-items-center me-3">
                                    <button class="btn btn-info"><i class="material-symbols-rounded">print</i></button>
                                    <button class="btn btn-warning"><i class="fas fa-file-excel"></i></button>
                                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalTambah"><i class="material-symbols-rounded">add</i></button>
                                </div>
                            </div>
                        </div>
                        <?php $this->load->view('admin/users/input'); ?>
                        <?php $this->load->view('admin/users/edit'); ?>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center justify-content-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Username</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Password</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Role</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Aksi</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // $no = 1;
                                        foreach ($users as $u) {
                                        ?>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-sm"><?= $u->username ?></h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-sm font-weight-bold mb-0"><?= $u->email ?></p>
                                                </td>
                                                <td>
                                                    <span class="text-xs font-weight-bold"><?= $u->password ?></span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span class="me-2 text-xs font-weight-bold"><?= $u->role ?></span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <button type="button"
                                                            data-id="<?= $u->id ?>"
                                                            data-username="<?= $u->username ?>"
                                                            data-password="<?= $u->password ?>"
                                                            data-email="<?= $u->email ?>"
                                                            data-role="<?= $u->role ?>"
                                                            class="edit-btn text-info pe-3 border-end btn-no-outline" data-bs-toggle="modal" data-bs-target="#modalEdit"><i class="material-symbols-rounded">edit</i></button>
                                                        <a href="<?= site_url('admin_users_delete/' . $u->id) ?>" class="delete-btn text-xs font-weight-bold text-danger"><i class="material-symbols-rounded">delete</i></a>
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