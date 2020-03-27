<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="{{ url('/')}}">Nurul Hidayah</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown {{ Request::is('admin/data-jamaah') || Request::is('admin/data-keberangkatan')? 'active':'' }}">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Kelola Data
        </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item {{ Request::is('admin/data-jamaah')? 'active':'' }}" href="{{ url('admin/data-jamaah') }}">Data Jamaah</a>
                    <a class="dropdown-item {{ Request::is('admin/data-keberangkatan')? 'active':'' }}" href="{{ url('admin/data-keberangkatan') }}">Data Keberangkatan</a>
                </div>
            </li>
            <li class="nav-item {{ Request::is('public/pendaftaran-umroh')? 'active':'' }}"><a class="nav-link" href="{{ url('public/pendaftaran-umroh') }}">Pendaftaran Umroh</a></li>
            <li class="nav-item {{ Request::is('public/jadwal-keberangkatan')? 'active':'' }}"><a class="nav-link" href="{{ url('public/jadwal-keberangkatan') }}">Jadwal Keberangkatan</a></li>
        </ul>

        <a href="{{ url('login') }}">
            <button class="btn btn-primary my-2 my-sm-0" type="button">Login</button>
        </a>
    </div>
</nav>
<br>
<br>
<br>