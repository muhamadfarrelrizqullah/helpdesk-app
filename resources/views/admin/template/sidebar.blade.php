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
                <a href="{{ route('admdashboard') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">Tiket</li>
            <li class="nav-item">
                <a href="{{ route('tmahasiswa') }}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Mahasiswa</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('tdosen') }}" class="nav-link">
                    <i class="link-icon" data-feather="user-plus"></i>
                    <span class="link-title">Dosen</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('tkaryawan') }}" class="nav-link">
                    <i class="link-icon" data-feather="user-check"></i>
                    <span class="link-title">Karyawan</span>
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
