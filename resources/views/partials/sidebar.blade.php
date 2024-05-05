<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="/" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>
                    Home
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/user') }}" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    User
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/menu') }}" class="nav-link">
            <i class="nav-icon fas fa-clipboard-list"></i>
                <p>
                    Menu
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/stok') }}" class="nav-link">
            <i class="nav-icon fas fa-clipboard-list"></i>
                <p>
                    Stok
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/kategori') }}" class="nav-link">
            <i class="nav-icon fas fa-clipboard-list"></i>
                <p>
                    Kategori
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/jenis') }}" class="nav-link">
            <i class="nav-icon fas fa-clipboard-list"></i>
                <p>
                    Jenis
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/meja') }}" class="nav-link">
                <i class="nav-icon fas fa-clipboard-list"></i>
                <p>
                    Meja
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/pelanggan') }}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Pelanggan
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/transaksi" class="nav-link">
            <i class="nav-icon fas fa-shopping-cart"></i>
                <p>
                    Transaksi
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/contact_us" class="nav-link">
            <i class="nav-icon fas fa-address-book"></i>
                <p>
                    ContactUs
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/absensi" class="nav-link">
            <i class="nav-icon fas fa-clipboard-list"></i>
                <p>
                    Absensi
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('logout') }}" class="nav-link">
                <i class="nav-icon fas fa-power-off"></i>
                <p>
                    
                    Logout
                </p>
            </a>
        </li>
    </ul>
</nav>
