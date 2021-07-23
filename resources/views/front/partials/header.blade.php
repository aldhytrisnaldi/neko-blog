<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <div>
            <a class="logo" href="{{ url('/') }}">
                <img src="https://rsianuraida.com/assets/images/logo_nuraida.png" height="40" alt="">
            </a>
        </div>
        <div class="menu-extras">
            <div class="menu-item">
                <a class="navbar-toggle">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </div>
        <div id="navigation">
            <ul class="navigation-menu">
                <li><a href="{{ url('/') }}">Beranda</a></li>
                <li><a href="#">Dokter Kami</a></li>
                <li class="has-submenu">
                    <a href="javascript:void(0)">Informasi</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="{{ url('artikel') }}">Artikel</a></li>
                        <li><a href="{{ url('promosi') }}">Promosi</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</header>
