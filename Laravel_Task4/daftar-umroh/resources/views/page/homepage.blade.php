@extends('template') @section('main')
<br>
<br>
<div class="text-center">
    <h2>Welcome to <b>Nurul Hidayah</b> Tours and Travel</h2></div>
<br>
<br>
<br>
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <a href="{{ url('public/pendaftaran-umroh') }}">
            <button type="button" class="btn btn-primary btn-lg btn-block">PENDAFTARAN JAMAAH UMRAH BARU</button>
            <br>
        </a>
        <a href="{{ url('public/jadwal-keberangkatan') }}">
            <button type="button" class="btn btn-secondary btn-lg btn-block">JADWAL KEBERANGKATAN UMRAH</button>
        </a>
    </div>
    <div class="col-sm-3"></div>
</div>
@stop