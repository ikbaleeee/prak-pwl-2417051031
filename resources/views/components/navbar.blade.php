<nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('user.index') }}">
            <i class="bi bi-mortarboard-fill me-2 text-warning"></i>PWL App
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ms-auto gap-1">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('user*') ? 'active fw-semibold' : '' }}" href="{{ route('user.index') }}">
                        <i class="bi bi-people me-1"></i> User (Mahasiswa)
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('mata-kuliah*') ? 'active fw-semibold' : '' }}" href="{{ route('matakuliah.index') }}">
                        <i class="bi bi-journal-text me-1"></i> Mata Kuliah
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>