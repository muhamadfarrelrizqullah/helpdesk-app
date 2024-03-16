<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            <img src="../assets/images/dash.png" alt="" style="width: 80%;">
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="{{ route('spradmdashboard') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="link-icon" data-feather="file"></i>
                    <span class="link-title">Tiket</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="link-icon" data-feather="file-text"></i>
                    <span class="link-title">Status Tiket</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="link-icon" data-feather="link"></i>
                    <span class="link-title">Kategori Masalah</span>
                </a>
            </li>
            <li class="nav-item nav-category">Master Data</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#unit" role="button" aria-expanded="false"
                    aria-controls="unit">
                    <i class="link-icon" data-feather="briefcase"></i>
                    <span class="link-title">Unit</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="unit">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Unit 1</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Unit 2</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Unit 3</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Pengguna</span>
                </a>
            </li>
            <li class="nav-item nav-category">Akun</li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="link-icon" data-feather="user"></i>
                    <span class="link-title">Profil</span>
                </a>
            </li>

</nav>
