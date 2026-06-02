<x-app-layout>
    <x-slot name="header">Dashboard</x-slot>

    {{-- Welcome Banner --}}
    <div style="background:linear-gradient(135deg, #3a3040 0%, #6a4060 50%, #a7767c 100%);border-radius:20px;padding:32px 36px;color:#fff;position:relative;overflow:hidden;margin-bottom:28px;">
        <div style="position:absolute;right:-30px;top:-30px;width:160px;height:160px;border-radius:50%;background:rgba(255,255,255,0.06);"></div>
        <div style="position:absolute;right:60px;bottom:-40px;width:100px;height:100px;border-radius:50%;background:rgba(255,255,255,0.04);"></div>
        <div style="position:absolute;right:140px;top:20px;font-size:4rem;opacity:0.15;">🌸</div>

        <div style="display:inline-block;background:rgba(255,255,255,0.12);border-radius:20px;padding:3px 14px;font-size:0.72rem;letter-spacing:1.5px;text-transform:uppercase;font-weight:600;margin-bottom:12px;">Student</div>
        <h2 style="font-family:'Playfair Display',serif;font-size:1.7rem;font-weight:700;margin:0 0 6px;">Hai, {{ auth()->user()->name }}! 🌸</h2>
        <p style="font-size:0.875rem;color:rgba(255,255,255,0.65);margin:0;">Yuk semangat belajar bareng tutor sebaya hari ini!</p>
    </div>

    {{-- Stats Row --}}
    <div class="row g-3 mb-4">
        <div class="col-6 col-md-4">
            <div class="card stat-card stat-card-1">
                <i class="fas fa-calendar stat-icon"></i>
                <div class="stat-number">{{ $bookings->count() }}</div>
                <div class="stat-label">Total Booking</div>
            </div>
        </div>
        <div class="col-6 col-md-4">
            <div class="card stat-card" style="background:linear-gradient(135deg,#f0c060,#e0953a) !important;">
                <i class="fas fa-clock stat-icon"></i>
                <div class="stat-number">{{ $bookings->where('status','pending')->count() }}</div>
                <div class="stat-label">Menunggu</div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card stat-card stat-card-3">
                <i class="fas fa-check-circle stat-icon"></i>
                <div class="stat-number">{{ $bookings->where('status','approved')->count() }}</div>
                <div class="stat-label">Dikonfirmasi</div>
            </div>
        </div>
    </div>

    {{-- Quick Actions --}}
    <div class="row g-3 mb-4">
        <div class="col-md-4">
            <a href="{{ route('bookings.create') }}" class="card text-decoration-none" style="transition:transform 0.2s,box-shadow 0.2s;display:block;" onmouseover="this.style.transform='translateY(-3px)';this.style.boxShadow='0 10px 30px rgba(167,118,124,0.2)'" onmouseout="this.style.transform='none';this.style.boxShadow=''">
                <div class="card-body d-flex align-items-center" style="gap:14px;padding:18px 20px;">
                    <div style="width:48px;height:48px;border-radius:14px;background:linear-gradient(135deg,var(--pharlap),#c4898f);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <i class="fas fa-plus" style="color:#fff;font-size:1.1rem"></i>
                    </div>
                    <div>
                        <div style="font-family:'Playfair Display',serif;font-size:0.95rem;color:var(--mortar);font-weight:600;">Buat Booking</div>
                        <div style="font-size:0.75rem;color:var(--pharlap);margin-top:2px;">Booking sesi belajar baru</div>
                    </div>
                    <i class="fas fa-arrow-right ml-auto" style="color:var(--rose-fog);font-size:0.8rem;"></i>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('materials.index') }}" class="card text-decoration-none" style="transition:transform 0.2s,box-shadow 0.2s;display:block;" onmouseover="this.style.transform='translateY(-3px)';this.style.boxShadow='0 10px 30px rgba(72,64,77,0.15)'" onmouseout="this.style.transform='none';this.style.boxShadow=''">
                <div class="card-body d-flex align-items-center" style="gap:14px;padding:18px 20px;">
                    <div style="width:48px;height:48px;border-radius:14px;background:linear-gradient(135deg,var(--mortar),#6a5d70);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <i class="fas fa-folder-open" style="color:#fff;font-size:1.1rem"></i>
                    </div>
                    <div>
                        <div style="font-family:'Playfair Display',serif;font-size:0.95rem;color:var(--mortar);font-weight:600;">Lihat Materi</div>
                        <div style="font-size:0.75rem;color:var(--pharlap);margin-top:2px;">Akses materi dari tutor</div>
                    </div>
                    <i class="fas fa-arrow-right ml-auto" style="color:var(--rose-fog);font-size:0.8rem;"></i>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('ratings.create') }}" class="card text-decoration-none" style="transition:transform 0.2s,box-shadow 0.2s;display:block;" onmouseover="this.style.transform='translateY(-3px)';this.style.boxShadow='0 10px 30px rgba(167,118,124,0.15)'" onmouseout="this.style.transform='none';this.style.boxShadow=''">
                <div class="card-body d-flex align-items-center" style="gap:14px;padding:18px 20px;">
                    <div style="width:48px;height:48px;border-radius:14px;background:linear-gradient(135deg,#c4898f,#e8b5b8);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <i class="fas fa-star" style="color:#fff;font-size:1.1rem"></i>
                    </div>
                    <div>
                        <div style="font-family:'Playfair Display',serif;font-size:0.95rem;color:var(--mortar);font-weight:600;">Beri Rating</div>
                        <div style="font-size:0.75rem;color:var(--pharlap);margin-top:2px;">Kasih ulasan untuk tutor</div>
                    </div>
                    <i class="fas fa-arrow-right ml-auto" style="color:var(--rose-fog);font-size:0.8rem;"></i>
                </div>
            </a>
        </div>
    </div>

    {{-- Booking History --}}
    <div class="card">
        {{-- Header: judul kiri, tombol kanan — TIDAK di tengah --}}
        <div class="card-header">
            <span><i class="fas fa-list-alt mr-2" style="color:var(--pharlap)"></i>Riwayat Booking Terbaru</span>
            <a href="{{ route('bookings.my') }}" class="btn btn-primary btn-sm">
                <i class="fas fa-external-link-alt mr-1"></i> Lihat Semua
            </a>
        </div>
        <div class="card-body p-0">
            @if($bookings->isEmpty())
                <div class="text-center py-5">
                    <div style="width:64px;height:64px;border-radius:50%;background:var(--linen);display:flex;align-items:center;justify-content:center;margin:0 auto 16px;">
                        <i class="fas fa-calendar-times" style="font-size:1.6rem;color:var(--rose-fog)"></i>
                    </div>
                    <p style="color:var(--pharlap);font-size:0.875rem;margin-bottom:16px;">Belum ada booking. Yuk buat booking pertamamu!</p>
                    <a href="{{ route('bookings.create') }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-plus mr-1"></i> Booking Sekarang
                    </a>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tutor</th>
                                <th>Mata Pelajaran</th>
                                <th>Tanggal</th>
                                <th>Jam</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bookings->take(5) as $i => $booking)
                            <tr>
                                <td style="color:var(--pharlap);font-weight:600">{{ $i + 1 }}</td>
                                <td>
                                    <div class="d-flex align-items-center" style="gap:10px;">
                                        <div style="width:34px;height:34px;border-radius:9px;background:linear-gradient(135deg,var(--pharlap),#c4898f);display:flex;align-items:center;justify-content:center;color:#fff;font-size:0.8rem;font-weight:700;flex-shrink:0;">
                                            {{ strtoupper(substr($booking->tutor->nama, 0, 1)) }}
                                        </div>
                                        <span style="font-weight:500;">{{ $booking->tutor->nama }}</span>
                                    </div>
                                </td>
                                <td style="color:var(--pharlap);">{{ $booking->tutor->subject->nama_mapel }}</td>
                                <td>{{ \Carbon\Carbon::parse($booking->tanggal)->format('d M Y') }}</td>
                                <td>{{ $booking->jam }}</td>
                                <td>
                                    @if($booking->status === 'pending')
                                        <span class="badge-pending"><i class="fas fa-clock mr-1"></i>Pending</span>
                                    @elseif($booking->status === 'approved')
                                        <span class="badge-approved"><i class="fas fa-check mr-1"></i>Approved</span>
                                    @else
                                        <span class="badge-rejected"><i class="fas fa-times mr-1"></i>Rejected</span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>

</x-app-layout>