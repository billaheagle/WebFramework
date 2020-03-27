@extends('template') @section('main')
<h2>Data Keberangkatan</h2>
<div class="text-right">
    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target=".tambah">Tambah</button>
</div>
<br>
<div class="table-responsive">
    <table class="table table-hover table-bordered text-center">
        <thead class="table-primary">
            <tr>
                <th class="align-middle" rowspan="2">#</th>
                <th class="align-middle" rowspan="2">Nama Paket</th>
                <th class="align-middle" rowspan="2">Keberangkatan</th>
                <th class="align-middle" rowspan="2">Kepulangan</th>
                <th colspan="2">Hotel</th>
                <th class="align-middle" rowspan="2">Pesawat</th>
                <th class="align-middle" rowspan="2">Harga</th>
                <th width="10%" class="align-middle" rowspan="2">Action</th>
            </tr>
            <tr>
                <th>Makkah</th>
                <th>Madinah</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th class="align-middle" scope="row">1</th>
                <td class="align-middle">Paket Bintang 5</td>
                <td class="align-middle">20 Februari 2020</td>
                <td class="align-middle">29 Februari 2020</td>
                <td class="align-middle">Zamzam Tower</td>
                <td class="align-middle">Roudhah Assalafiyah</td>
                <td class="align-middle">SV Saudi Airlanes</td>
                <td>Rp. 27.000.000</td>
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
                        <div class="col-sm-12 mb-3">
                            <label for="validationCustom01">Nama Paket</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Nama Paket" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-6 mb-3">
                            <label for="validationCustom01">Keberangkatan</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Keberangkatan" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Kepulangan</label>
                            <input type="text" class="form-control" id="validationCustom02" placeholder="Kepulangan" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-6 mb-3">
                            <label for="validationCustom01">Hotel Makkah</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Hotel Makkah" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Hotel Madinah</label>
                            <input type="text" class="form-control" id="validationCustom02" placeholder="Hotel Madinah" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-6 mb-3">
                            <label for="validationCustom01">Pesawat</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Pesawat" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Harga</label>
                            <input type="text" class="form-control" id="validationCustom02" placeholder="Harga" required>
                            <div class="valid-feedback">
                                Looks good!
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
                        <div class="col-sm-12 mb-3">
                            <label for="validationCustom01">Nama Paket</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Nama Paket" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-6 mb-3">
                            <label for="validationCustom01">Keberangkatan</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Keberangkatan" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Kepulangan</label>
                            <input type="text" class="form-control" id="validationCustom02" placeholder="Kepulangan" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-6 mb-3">
                            <label for="validationCustom01">Hotel Makkah</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Hotel Makkah" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Hotel Madinah</label>
                            <input type="text" class="form-control" id="validationCustom02" placeholder="Hotel Madinah" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-6 mb-3">
                            <label for="validationCustom01">Pesawat</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Pesawat" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Harga</label>
                            <input type="text" class="form-control" id="validationCustom02" placeholder="Harga" required>
                            <div class="valid-feedback">
                                Looks good!
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