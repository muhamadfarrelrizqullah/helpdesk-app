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
                <a href="{{ route('tksdashboard') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">Tiket</li>
            <li class="nav-item">
                <a href="{{ route('tksaduanbelumproses') }}" class="nav-link">
                    <i class="link-icon" data-feather="x"></i>
                    <span class="link-title">Belum Proses</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('tksaduanproses') }}" class="nav-link">
                    <i class="link-icon" data-feather="activity"></i>
                    <span class="link-title">Proses</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('tksaduanselesai') }}" class="nav-link">
                    <i class="link-icon" data-feather="check"></i>
                    <span class="link-title">Selesai</span>
                </a>
            </li>
            <li class="nav-item nav-category">Akun</li>
            <li class="nav-item">
                <a href="{{ route('tksprofil') }}" class="nav-link">
                    <i class="link-icon" data-feather="user"></i>
                    <span class="link-title">Profil</span>
                </a>
            </li>

</nav>
