<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-drawer icon-gradient bg-happy-itmeo">
                        </i>
                    </div>
                    <div>Data Dokumen
                        <div class="page-title-subheading">Semua data yang telah anda tambahkan akan terdaftar di halaman ini
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Dokumen</h5>

                        <button class="mb-2 mr-2 btn btn-primary" data-toggle="modal" data-target="#modal_detail_approval" id="show-modal-approval" style="display:none;">detail approval</button>
                        <button class="mb-2 mr-2 btn btn-primary" data-toggle="modal" data-target="#modal_send_dokument" id="show-modal-send" style="display:none;">kirim/share file</button>

                        <table class="mb-0 table table-striped" id="table_dokumen" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>File</th>
                                    <th>Approval</th>
                                    <th>Status</th>
                                    <th style="text-align: center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Dokumen A</td>
                                    <td>Dokumen_a.doc</td>
                                    <td>
                                        <div class="badge badge-success">Ya</div>
                                        <div class="badge badge-info">Kepala Sekolah</div>
                                    </td>
                                    <td>
                                        <div class="badge badge-warning">Menunggu Approval</div>
                                    </td>
                                    <td style="text-align: center">
                                        <label><button class="mb-2 mr-2 btn btn-primary" data-toggle="modal" data-target="#modal_edit_dokument">Edit</button></label>
                                        <label><button class="mb-2 mr-2 btn btn-info" data-toggle="modal" data-target="#modal_send_dokument">Kirim</button></label>
                                        <label><button class="mb-2 mr-2 btn btn-danger" onclick="remove()">Hapus</button></label>
                                        <label><button class="mb-2 mr-2 btn btn-secondary" onclick="download()">Download</button></label>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php include 'modal/modal.php'; ?>
<?php include 'js/js.php'; ?>