<x-app-layout>
    <x-slot name="header">Admin Dashboard</x-slot>

    {{-- Welcome Banner --}}
    <div class="welcome-banner">
        <span class="badge-role">Admin</span>
        <h2>Selamat datang, {{ auth()->user()->name }}! 👋</h2>
        <p>Berikut ringkasan data sistem Peer Teaching hari ini.</p>
    </div>

    {{-- Stat Cards --}}
    <div class="row g-3 mb-4">
        <div class="col-6 col-md-4">
            <div class="card stat-card stat-card-1">
                <i class="fas fa-users stat-icon"></i>
                <div class="stat-number">{{ $totalUsers }}</div>
                <div class="stat-label">Total Users</div>
            </div>
        </div>
        <div class="col-6 col-md-4">
            <div class="card stat-card stat-card-2">
                <i class="fas fa-chalkboard-teacher stat-icon"></i>
                <div class="stat-number">{{ $totalTutors }}</div>
                <div class="stat-label">Total Tutor</div>
            </div>
        </div>
        <div class="col-6 col-md-4">
            <div class="card stat-card stat-card-3">
                <i class="fas fa-book stat-icon"></i>
                <div class="stat-number">{{ $totalSubjects }}</div>
                <div class="stat-label">Mata Pelajaran</div>
            </div>
        </div>
        <div class="col-6 col-md-4">
            <div class="card stat-card stat-card-4">
                <i class="fas fa-calendar stat-icon"></i>
                <div class="stat-number">{{ $totalBookings }}</div>
                <div class="stat-label">Total Booking</div>
            </div>
        </div>
        <div class="col-6 col-md-4">
            <div class="card stat-card stat-card-5">
                <i class="fas fa-clock stat-icon"></i>
                <div class="stat-number">{{ $pendingBookings }}</div>
                <div class="stat-label">Pending</div>
            </div>
        </div>
        <div class="col-6 col-md-4">
            <div class="card stat-card stat-card-6">
                <i class="fas fa-check-circle stat-icon"></i>
                <div class="stat-number">{{ $approvedBookings }}</div>
                <div class="stat-label">Approved</div>
            </div>
        </div>
    </div>

    {{-- Quick Actions --}}
    <div class="card">
        <div class="card-header">
            <i class="fas fa-bolt mr-2" style="color:var(--pharlap)"></i> Quick Actions
        </div>
        <div class="card-body d-flex flex-wrap gap-2" style="gap:10px">
            <a href="{{ route('subjects.index') }}" class="btn btn-primary btn-sm">
                <i class="fas fa-book mr-1"></i> Kelola Mata Pelajaran
            </a>
            <a href="{{ route('tutors.index') }}" class="btn btn-primary btn-sm">
                <i class="fas fa-chalkboard-teacher mr-1"></i> Kelola Tutor
            </a>
            <a href="{{ route('ratings.index') }}" class="btn btn-primary btn-sm">
                <i class="fas fa-star mr-1"></i> Lihat Rating
            </a>
        </div>
    </div>
</x-app-layout>