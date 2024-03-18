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
                <a href="{{ route('sprdashboard') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('sprtiket') }}" class="nav-link">
                    <i class="link-icon" data-feather="file"></i>
                    <span class="link-title">Tiket</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('sprstatustiket') }}" class="nav-link">
                    <i class="link-icon" data-feather="file-text"></i>
                    <span class="link-title">Status Tiket</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('sprkategorimasalah') }}" class="nav-link">
                    <i class="link-icon" data-feather="link"></i>
                    <span class="link-title">Kategori Masalah</span>
                </a>
            </li>
            <li class="nav-item nav-category">Master Data</li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="link-icon" data-feather="link"></i>
                    <span class="link-title">Unit</span>
                </a>
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
