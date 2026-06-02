<x-app-layout>
    <x-slot name="header">Dashboard Admin</x-slot>

    {{-- Welcome Banner --}}
    <div style="background:linear-gradient(135deg, #2a1f2e 0%, #48404d 60%, #7a5060 100%);border-radius:20px;padding:32px 36px;color:#fff;position:relative;overflow:hidden;margin-bottom:28px;">
        <div style="position:absolute;right:-20px;top:-20px;width:180px;height:180px;border-radius:50%;background:rgba(255,255,255,0.05);"></div>
        <div style="position:absolute;right:80px;bottom:-50px;width:120px;height:120px;border-radius:50%;background:rgba(255,255,255,0.04);"></div>
        <div style="position:absolute;right:150px;top:16px;font-size:3.5rem;opacity:0.12;">👩🏻‍💻</div>

        <div style="display:inline-block;background:rgba(255,255,255,0.12);border-radius:20px;padding:3px 14px;font-size:0.72rem;letter-spacing:1.5px;text-transform:uppercase;font-weight:600;margin-bottom:12px;">Admin</div>
        <h2 style="font-family:'Playfair Display',serif;font-size:1.7rem;font-weight:700;margin:0 0 6px;">Selamat datang, {{ auth()->user()->name }}! 👋</h2>
        <p style="font-size:0.875rem;color:rgba(255,255,255,0.6);margin:0;">Berikut ringkasan data sistem Peer Teaching hari ini.</p>
    </div>

    {{-- Stat Grid --}}
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
            <div class="card stat-card" style="background:linear-gradient(135deg,#e8a030,#f0c060) !important;">
                <i class="fas fa-clock stat-icon"></i>
                <div class="stat-number">{{ $pendingBookings }}</div>
                <div class="stat-label">Pending</div>
            </div>
        </div>
        <div class="col-6 col-md-4">
            <div class="card stat-card" style="background:linear-gradient(135deg,#3d8c6a,#4dab82) !important;">
                <i class="fas fa-check-circle stat-icon"></i>
                <div class="stat-number">{{ $approvedBookings }}</div>
                <div class="stat-label">Approved</div>
            </div>
        </div>
    </div>

    {{-- Quick Actions --}}
    <div class="row g-3">
        <div class="col-md-4">
            <a href="{{ route('subjects.index') }}" class="card text-decoration-none" style="transition:transform 0.2s,box-shadow 0.2s;display:block;" onmouseover="this.style.transform='translateY(-3px)';this.style.boxShadow='0 10px 30px rgba(167,118,124,0.2)'" onmouseout="this.style.transform='none';this.style.boxShadow=''">
                <div class="card-body d-flex align-items-center" style="gap:14px;padding:18px 20px;">
                    <div style="width:48px;height:48px;border-radius:14px;background:linear-gradient(135deg,var(--pharlap),#c4898f);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <i class="fas fa-book" style="color:#fff;font-size:1.1rem"></i>
                    </div>
                    <div>
                        <div style="font-family:'Playfair Display',serif;font-size:0.95rem;color:var(--mortar);font-weight:600;">Mata Pelajaran</div>
                        <div style="font-size:0.75rem;color:var(--pharlap);margin-top:2px;">Kelola daftar mata pelajaran</div>
                    </div>
                    <i class="fas fa-arrow-right ml-auto" style="color:var(--rose-fog);font-size:0.8rem;"></i>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('tutors.index') }}" class="card text-decoration-none" style="transition:transform 0.2s,box-shadow 0.2s;display:block;" onmouseover="this.style.transform='translateY(-3px)';this.style.boxShadow='0 10px 30px rgba(72,64,77,0.15)'" onmouseout="this.style.transform='none';this.style.boxShadow=''">
                <div class="card-body d-flex align-items-center" style="gap:14px;padding:18px 20px;">
                    <div style="width:48px;height:48px;border-radius:14px;background:linear-gradient(135deg,var(--mortar),#6a5d70);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <i class="fas fa-chalkboard-teacher" style="color:#fff;font-size:1.1rem"></i>
                    </div>
                    <div>
                        <div style="font-family:'Playfair Display',serif;font-size:0.95rem;color:var(--mortar);font-weight:600;">Data Tutor</div>
                        <div style="font-size:0.75rem;color:var(--pharlap);margin-top:2px;">Kelola tutor yang terdaftar</div>
                    </div>
                    <i class="fas fa-arrow-right ml-auto" style="color:var(--rose-fog);font-size:0.8rem;"></i>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('ratings.index') }}" class="card text-decoration-none" style="transition:transform 0.2s,box-shadow 0.2s;display:block;" onmouseover="this.style.transform='translateY(-3px)';this.style.boxShadow='0 10px 30px rgba(167,118,124,0.15)'" onmouseout="this.style.transform='none';this.style.boxShadow=''">
                <div class="card-body d-flex align-items-center" style="gap:14px;padding:18px 20px;">
                    <div style="width:48px;height:48px;border-radius:14px;background:linear-gradient(135deg,#c4898f,#e8b5b8);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <i class="fas fa-star" style="color:#fff;font-size:1.1rem"></i>
                    </div>
                    <div>
                        <div style="font-family:'Playfair Display',serif;font-size:0.95rem;color:var(--mortar);font-weight:600;">Rating Tutor</div>
                        <div style="font-size:0.75rem;color:var(--pharlap);margin-top:2px;">Lihat ulasan dari student</div>
                    </div>
                    <i class="fas fa-arrow-right ml-auto" style="color:var(--rose-fog);font-size:0.8rem;"></i>
                </div>
            </a>
        </div>
    </div>

</x-app-layout>