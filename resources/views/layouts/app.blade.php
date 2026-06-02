<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Peer Teaching') }}</title>

    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">

    <style>
        :root {
            --linen: #FAE5E2;
            --azalea: #F9D6D4;
            --rose-fog: #E6B5B8;
            --pharlap: #A7767C;
            --mortar: #48404D;
        }

        * { box-sizing: border-box; }

        body {
            font-family: 'DM Sans', sans-serif;
            background-color: var(--linen);
        }

        /* ── SIDEBAR ── */
        .main-sidebar {
            background: linear-gradient(180deg, #3a3040 0%, var(--mortar) 100%) !important;
            box-shadow: 4px 0 24px rgba(72,64,77,0.18) !important;
        }

        .brand-link {
            background: transparent !important;
            border-bottom: 1px solid rgba(230,181,184,0.25) !important;
            padding: 18px 16px !important;
        }

        .brand-text {
            font-family: 'Playfair Display', serif !important;
            font-size: 1.2rem !important;
            color: var(--azalea) !important;
            letter-spacing: 0.5px;
        }

        .sidebar-user-panel {
            border-bottom: 1px solid rgba(230,181,184,0.15) !important;
        }

        .nav-sidebar .nav-link {
            color: rgba(230,181,184,0.75) !important;
            border-radius: 10px !important;
            margin: 2px 8px !important;
            padding: 10px 14px !important;
            transition: all 0.25s ease !important;
            font-size: 0.875rem;
            font-weight: 400;
        }

        .nav-sidebar .nav-link:hover {
            background: rgba(167,118,124,0.3) !important;
            color: #fff !important;
            transform: translateX(3px);
        }

        .nav-sidebar .nav-link.active {
            background: linear-gradient(135deg, var(--pharlap), #c4898f) !important;
            color: #fff !important;
            box-shadow: 0 4px 14px rgba(167,118,124,0.4) !important;
        }

        .nav-sidebar .nav-link .nav-icon {
            color: var(--rose-fog) !important;
            width: 1.4rem;
        }

        .nav-sidebar .nav-link.active .nav-icon {
            color: #fff !important;
        }

        .nav-header {
            color: rgba(230,181,184,0.4) !important;
            font-size: 0.65rem !important;
            letter-spacing: 2px !important;
            text-transform: uppercase !important;
            padding: 14px 16px 4px !important;
            font-weight: 500;
        }

        /* ── NAVBAR ── */
        .main-header.navbar {
            background: #fff !important;
            border-bottom: 1px solid var(--azalea) !important;
            box-shadow: 0 2px 12px rgba(167,118,124,0.08) !important;
            min-height: 58px;
        }

        .main-header .nav-link {
            color: var(--mortar) !important;
        }

        .navbar-greeting {
            font-family: 'DM Sans', sans-serif;
            font-size: 0.82rem;
            color: var(--pharlap);
            font-weight: 500;
            padding: 0 16px;
        }

        .navbar-user-badge {
            background: var(--linen);
            border: 1px solid var(--rose-fog);
            border-radius: 20px;
            padding: 5px 14px;
            font-size: 0.8rem;
            color: var(--mortar);
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 7px;
        }

        .navbar-user-badge i {
            color: var(--pharlap);
        }

        .logout-btn {
            background: transparent;
            border: 1.5px solid var(--rose-fog);
            border-radius: 20px;
            padding: 5px 16px;
            font-size: 0.8rem;
            color: var(--pharlap) !important;
            font-weight: 500;
            transition: all 0.2s;
            cursor: pointer;
        }

        .logout-btn:hover {
            background: var(--pharlap) !important;
            color: #fff !important;
            border-color: var(--pharlap) !important;
        }

        /* ── CONTENT ── */
        .content-wrapper {
            background-color: var(--linen) !important;
        }

        .content-header {
            padding: 24px 28px 8px !important;
        }

        .content-header h1 {
            font-family: 'Playfair Display', serif !important;
            font-size: 1.7rem !important;
            color: var(--mortar) !important;
            font-weight: 600;
        }

        .page-subtitle {
            font-size: 0.82rem;
            color: var(--pharlap);
            margin-top: 2px;
        }

        /* ── CARDS ── */
        .card {
            border: none !important;
            border-radius: 16px !important;
            box-shadow: 0 2px 16px rgba(72,64,77,0.07) !important;
            overflow: hidden;
            background: #fff !important;
        }

        .card-header {
            background: #fff !important;
            border-bottom: 1px solid var(--azalea) !important;
            padding: 16px 20px !important;
            font-family: 'Playfair Display', serif;
            font-size: 1rem;
            color: var(--mortar);
            font-weight: 600;
        }

        .stat-card {
            border-radius: 16px !important;
            border: none !important;
            padding: 22px 24px;
            position: relative;
            overflow: hidden;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .stat-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 28px rgba(72,64,77,0.13) !important;
        }

        .stat-card-1 { background: linear-gradient(135deg, var(--pharlap), #c4898f) !important; }
        .stat-card-2 { background: linear-gradient(135deg, var(--mortar), #6a5d70) !important; }
        .stat-card-3 { background: linear-gradient(135deg, #c4898f, var(--rose-fog)) !important; }
        .stat-card-4 { background: linear-gradient(135deg, #6a5d70, var(--pharlap)) !important; }
        .stat-card-5 { background: linear-gradient(135deg, var(--rose-fog), var(--azalea)) !important; color: var(--mortar) !important; }
        .stat-card-6 { background: linear-gradient(135deg, #b8879d, var(--pharlap)) !important; }

        .stat-card .stat-number {
            font-family: 'Playfair Display', serif;
            font-size: 2.2rem;
            font-weight: 700;
            color: #fff;
            line-height: 1;
        }

        .stat-card-5 .stat-number { color: var(--mortar); }

        .stat-card .stat-label {
            font-size: 0.78rem;
            color: rgba(255,255,255,0.8);
            margin-top: 4px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.8px;
        }

        .stat-card-5 .stat-label { color: var(--pharlap); }

        .stat-card .stat-icon {
            position: absolute;
            right: 18px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 2.8rem;
            color: rgba(255,255,255,0.15);
        }

        .stat-card-5 .stat-icon { color: rgba(167,118,124,0.15); }

        /* ── TABLE ── */
        .table thead th {
            background: var(--linen) !important;
            color: var(--mortar) !important;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
            border-bottom: 2px solid var(--azalea) !important;
            padding: 12px 16px !important;
        }

        .table tbody td {
            color: var(--mortar);
            font-size: 0.875rem;
            padding: 12px 16px !important;
            border-bottom: 1px solid var(--linen) !important;
            vertical-align: middle;
        }

        .table tbody tr:hover td {
            background: #fdf0ef !important;
        }

        /* ── BADGES ── */
        .badge-pending {
            background: #fff3cd;
            color: #856404;
            border-radius: 20px;
            padding: 4px 12px;
            font-size: 0.75rem;
            font-weight: 500;
        }

        .badge-approved {
            background: #d1f0e0;
            color: #1a6e3f;
            border-radius: 20px;
            padding: 4px 12px;
            font-size: 0.75rem;
            font-weight: 500;
        }

        .badge-rejected {
            background: #fde8e8;
            color: #9b2335;
            border-radius: 20px;
            padding: 4px 12px;
            font-size: 0.75rem;
            font-weight: 500;
        }

        /* ── BUTTONS ── */
        .btn-primary {
            background: linear-gradient(135deg, var(--pharlap), #c4898f) !important;
            border: none !important;
            border-radius: 10px !important;
            font-weight: 500 !important;
            padding: 8px 20px !important;
            transition: all 0.2s !important;
            box-shadow: 0 3px 10px rgba(167,118,124,0.3) !important;
        }

        .btn-primary:hover {
            transform: translateY(-1px) !important;
            box-shadow: 0 6px 16px rgba(167,118,124,0.4) !important;
        }

        .btn-success {
            background: linear-gradient(135deg, #3d8c6a, #4dab82) !important;
            border: none !important;
            border-radius: 10px !important;
        }

        .btn-danger {
            background: linear-gradient(135deg, #c0404a, #e05560) !important;
            border: none !important;
            border-radius: 10px !important;
        }

        .btn-sm { padding: 5px 14px !important; font-size: 0.78rem !important; }

        /* ── FOOTER ── */
        .main-footer {
            background: #fff !important;
            border-top: 1px solid var(--azalea) !important;
            color: var(--pharlap) !important;
            font-size: 0.8rem;
            padding: 14px 24px !important;
        }

        /* ── DECORATIVE ── */
        .page-deco {
            position: fixed;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(230,181,184,0.12), transparent 70%);
            pointer-events: none;
            z-index: 0;
        }

        .page-deco-1 { top: -80px; right: 80px; }
        .page-deco-2 { bottom: 50px; right: 200px; width: 200px; height: 200px; }

        /* ── FADE IN ── */
        .content-wrapper { animation: fadeIn 0.35s ease; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(8px); } to { opacity: 1; transform: none; } }

        /* ── WELCOME BANNER ── */
        .welcome-banner {
            background: linear-gradient(135deg, var(--mortar) 0%, #6a5070 100%);
            border-radius: 18px;
            padding: 28px 32px;
            color: #fff;
            position: relative;
            overflow: hidden;
            margin-bottom: 24px;
        }

        .welcome-banner::before {
            content: '👩🏻‍💻';
            position: absolute;
            right: 28px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 4rem;
            opacity: 0.3;
        }

        .welcome-banner h2 {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 4px;
        }

        .welcome-banner p {
            font-size: 0.85rem;
            color: rgba(255,255,255,0.7);
            margin: 0;
        }

        .welcome-banner .badge-role {
            display: inline-block;
            background: rgba(255,255,255,0.15);
            border-radius: 20px;
            padding: 3px 14px;
            font-size: 0.75rem;
            margin-bottom: 10px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    {{-- Decorative blobs --}}
    <div class="page-deco page-deco-1"></div>
    <div class="page-deco page-deco-2"></div>

    {{-- Navbar --}}
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                    <i class="fas fa-bars" style="color:var(--pharlap)"></i>
                </a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto align-items-center pr-3" style="gap:10px">
            <li class="nav-item">
                <span class="navbar-user-badge">
                    <i class="fas fa-user-circle"></i>
                    {{ auth()->user()->name ?? 'User' }}
                </span>
            </li>
            <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="logout-btn">
                        <i class="fas fa-sign-out-alt mr-1"></i> Logout
                    </button>
                </form>
            </li>
        </ul>
    </nav>

    {{-- Sidebar --}}
    <aside class="main-sidebar elevation-0">
        <a href="{{ url('/') }}" class="brand-link d-flex align-items-center">
            <i class="fas fa-graduation-cap mr-2" style="color:var(--rose-fog);font-size:1.3rem"></i>
            <span class="brand-text">Peer Teaching</span>
        </a>

        <div class="sidebar">
            <nav class="mt-3 pb-3">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">

                    <li class="nav-header">Main</li>
                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-home"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    @auth
                        @if(auth()->user()->role === 'admin')
                            <li class="nav-header">Manajemen</li>
                            <li class="nav-item">
                                <a href="{{ route('subjects.index') }}" class="nav-link {{ request()->routeIs('subjects.*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>Mata Pelajaran</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('tutors.index') }}" class="nav-link {{ request()->routeIs('tutors.*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-chalkboard-teacher"></i>
                                    <p>Tutor</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('ratings.index') }}" class="nav-link {{ request()->routeIs('ratings.*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-star"></i>
                                    <p>Rating</p>
                                </a>
                            </li>
                        @endif

                        @if(auth()->user()->role === 'tutor')
                            <li class="nav-header">Tutor</li>
                            <li class="nav-item">
                                <a href="{{ route('bookings.tutor') }}" class="nav-link {{ request()->routeIs('bookings.tutor') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-calendar-check"></i>
                                    <p>Jadwal Booking</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('materials.create') }}" class="nav-link {{ request()->routeIs('materials.create') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-upload"></i>
                                    <p>Upload Materi</p>
                                </a>
                            </li>
                        @endif

                        @if(auth()->user()->role === 'student')
                            <li class="nav-header">Student</li>
                            <li class="nav-item">
                                <a href="{{ route('bookings.create') }}" class="nav-link {{ request()->routeIs('bookings.create') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-plus-circle"></i>
                                    <p>Buat Booking</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('bookings.my') }}" class="nav-link {{ request()->routeIs('bookings.my') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-list-alt"></i>
                                    <p>Riwayat Booking</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('materials.index') }}" class="nav-link {{ request()->routeIs('materials.index') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-folder-open"></i>
                                    <p>Materi</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('ratings.create') }}" class="nav-link {{ request()->routeIs('ratings.create') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-star"></i>
                                    <p>Beri Rating</p>
                                </a>
                            </li>
                        @endif
                    @endauth

                    <li class="nav-header">Akun</li>
                    <li class="nav-item">
                        <a href="{{ route('profile.edit') }}" class="nav-link {{ request()->routeIs('profile.*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-user-cog"></i>
                            <p>Profil</p>
                        </a>
                    </li>

                </ul>
            </nav>
        </div>
    </aside>

    {{-- Content --}}
    <div class="content-wrapper">
        <div class="content-header">
            @isset($header)
                <div class="container-fluid">
                    <h1>{{ $header }}</h1>
                </div>
            @endisset
        </div>
        <div class="content">
            <div class="container-fluid">
                {{ $slot }}
            </div>
        </div>
    </div>

    <footer class="main-footer text-center">
        <strong style="font-family:'Playfair Display',serif">Peer Teaching</strong>
        &nbsp;·&nbsp; HMIF USK &copy; {{ date('Y') }}
        &nbsp;·&nbsp; <span style="color:var(--rose-fog)">♥</span> Made with love
    </footer>

</div>

<script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
</body>
</html>