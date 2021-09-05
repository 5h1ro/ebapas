<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin') }}"> <img alt="image" src="{{ asset('img/favicon.png') }}"
                    class="header-logo" />
                <span class="logo-name">si-bima</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
                <a href="{{ route('admin') }}" class="nav-link"><i
                        data-feather="monitor"></i><span>Dashboard</span></a>
            </li>

            <li class="dropdown">
                <a class="menu-toggle nav-link has-dropdown"><i data-feather="grid"></i><span>Client</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('data') }}">Data Client</a></li>
                    <li><a class="nav-link" href="{{ route('data.add') }}">Tambah Data Client</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a class="menu-toggle nav-link has-dropdown"><i data-feather="home"></i><span>Lembaga Asal</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('jail') }}">Data Lembaga Asal</a></li>
                    <li><a class="nav-link" href="{{ route('jail.add') }}">Tambah Data Lembaga</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
