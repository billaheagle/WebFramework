@extends('template') @section('main')
<br>
<br>
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8 card">
        <div class="card-body">
            <div class="text-center">
                <h2><b>Pendaftaran Baru</b> Calon Jamaah Umrah</h2></div>
        </div>
        <form class="needs-validation card-body" novalidate>
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
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                </div>
            </div>
            <button class="btn btn-primary btn-block" type="submit">Register</button>
        </form>
    </div>
    <div class="col-sm-2"></div>
</div>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
@stop