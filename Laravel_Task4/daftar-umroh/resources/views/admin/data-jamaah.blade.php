@extends('template') @section('main')
<h2>Data Pendaftaran Jamaah</h2>
<div class="text-right">
    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target=".tambah">Tambah</button>
</div>
<br>
<div class="table-responsive">
    <table class="table table-hover table-bordered text-center">
        <thead class="table-primary">
            <tr>
                <th width="2%">#</th>
                <th>Nama Lengkap</th>
                <th>Nomor KTP</th>
                <th>Nomor Telepon</th>
                <th>Email</th>
                <th>Keberangkatan</th>
                <th width="10%">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th class="align-middle" scope="row">1</th>
                <td class="align-middle">Mu'tashim Billah</td>
                <td class="align-middle">1234123412341234</td>
                <td class="align-middle">0813 1771 4843</td>
                <td class="align-middle">mutashimb7@gmail.com</td>
                <td class="align-middle">Paket Bintang 5 (20 Februari)</td>
                <td>
                    <button type="button" class="btn btn-sm btn-outline-warning" data-toggle="modal" data-target=".edit">Edit</button>
                    <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target=".delete">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@stop {{--Start Modal Tambah--}}
<div class="modal fade tambah" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="needs-validation" novalidate>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col-sm-6 mb-3">
                            <label for="validationCustom01">Nama Lengkap</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Nama Lengkap" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Nomor KTP</label>
                            <input type="text" class="form-control" id="validationCustom02" placeholder="Nomor KTP" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-6 mb-3">
                            <label for="validationCustom01">Nomor Telepon</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Nomor Telepon" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Email</label>
                            <input type="text" class="form-control" id="validationCustom02" placeholder="Email" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 mb-3">
                            <label for="validationCustom01">Jadwal Keberangkatan</label>
                            <div class="input-group">
                                <select class="custom-select" id="inputGroupSelect04">
                                    <option selected>Keberangkatan</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <div class="input-group-append">
                                    <a href="{{ url('public/jadwal-keberangkatan') }}">
                                        <button class="btn btn-outline-secondary" type="button">Cek Jadwal Keberangkatan</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{--End Modal Tambah--}} {{--Start Modal Edit--}}
<div class="modal fade edit" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="needs-validation" novalidate>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col-sm-6 mb-3">
                            <label for="validationCustom01">Nama Lengkap</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Nama Lengkap" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Nomor KTP</label>
                            <input type="text" class="form-control" id="validationCustom02" placeholder="Nomor KTP" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-6 mb-3">
                            <label for="validationCustom01">Nomor Telepon</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Nomor Telepon" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Email</label>
                            <input type="text" class="form-control" id="validationCustom02" placeholder="Email" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 mb-3">
                            <label for="validationCustom01">Jadwal Keberangkatan</label>
                            <div class="input-group">
                                <select class="custom-select" id="inputGroupSelect04">
                                    <option selected>Keberangkatan</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <div class="input-group-append">
                                    <a href="{{ url('public/jadwal-keberangkatan') }}">
                                        <button class="btn btn-outline-secondary" type="button">Cek Jadwal Keberangkatan</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-warning">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{--End Modal Edit--}} {{--Start Modal Delete--}}
<div class="modal fade delete" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLongTitle">Delete Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah kamu yakin akan menghapus data ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancle</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>
{{--End Modal Delete--}}