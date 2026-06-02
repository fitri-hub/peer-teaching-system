<x-app-layout>
    <x-slot name="header">Dashboard Tutor</x-slot>

    {{-- Welcome Banner --}}
    <div style="background:linear-gradient(135deg, #3a3040 0%, #5a3850 50%, #8a5868 100%);border-radius:20px;padding:32px 36px;color:#fff;position:relative;overflow:hidden;margin-bottom:28px;">
        <div style="position:absolute;right:-20px;top:-20px;width:180px;height:180px;border-radius:50%;background:rgba(255,255,255,0.05);"></div>
        <div style="position:absolute;right:80px;bottom:-50px;width:120px;height:120px;border-radius:50%;background:rgba(255,255,255,0.04);"></div>
        <div style="position:absolute;right:150px;top:16px;font-size:3.5rem;opacity:0.12;">📚</div>

        <div style="display:inline-block;background:rgba(255,255,255,0.12);border-radius:20px;padding:3px 14px;font-size:0.72rem;letter-spacing:1.5px;text-transform:uppercase;font-weight:600;margin-bottom:12px;">Tutor</div>
        <h2 style="font-family:'Playfair Display',serif;font-size:1.7rem;font-weight:700;margin:0 0 6px;">Hai, {{ auth()->user()->name }}! 📚</h2>
        <p style="font-size:0.875rem;color:rgba(255,255,255,0.6);margin:0;">Kelola jadwal dan materi mengajarmu di sini.</p>
    </div>

    {{-- Stats --}}
    <div class="row g-3 mb-4">
        <div class="col-6 col-md-4">
            <div class="card stat-card stat-card-1">
                <i class="fas fa-calendar stat-icon"></i>
                <div class="stat-number">{{ $bookings->count() }}</div>
                <div class="stat-label">Total Booking</div>
            </div>
        </div>
        <div class="col-6 col-md-4">
            <div class="card stat-card" style="background:linear-gradient(135deg,#e8a030,#f0c060) !important;">
                <i class="fas fa-clock stat-icon"></i>
                <div class="stat-number">{{ $bookings->where('status','pending')->count() }}</div>
                <div class="stat-label">Menunggu Respon</div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card stat-card" style="background:linear-gradient(135deg,#3d8c6a,#4dab82) !important;">
                <i class="fas fa-check-circle stat-icon"></i>
                <div class="stat-number">{{ $bookings->where('status','approved')->count() }}</div>
                <div class="stat-label">Dikonfirmasi</div>
            </div>
        </div>
    </div>

    {{-- Quick Action --}}
    <div class="row g-3 mb-4">
        <div class="col-md-6">
            <a href="{{ route('materials.create') }}" class="card text-decoration-none" style="transition:transform 0.2s,box-shadow 0.2s;display:block;" onmouseover="this.style.transform='translateY(-3px)';this.style.boxShadow='0 10px 30px rgba(167,118,124,0.2)'" onmouseout="this.style.transform='none';this.style.boxShadow=''">
                <div class="card-body d-flex align-items-center" style="gap:14px;padding:20px 24px;">
                    <div style="width:52px;height:52px;border-radius:15px;background:linear-gradient(135deg,var(--pharlap),#c4898f);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <i class="fas fa-upload" style="color:#fff;font-size:1.2rem"></i>
                    </div>
                    <div>
                        <div style="font-family:'Playfair Display',serif;font-size:1rem;color:var(--mortar);font-weight:600;">Upload Materi</div>
                        <div style="font-size:0.78rem;color:var(--pharlap);margin-top:3px;">Bagikan materi belajar ke student</div>
                    </div>
                    <i class="fas fa-arrow-right ml-auto" style="color:var(--rose-fog);"></i>
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a href="{{ route('bookings.tutor') }}" class="card text-decoration-none" style="transition:transform 0.2s,box-shadow 0.2s;display:block;" onmouseover="this.style.transform='translateY(-3px)';this.style.boxShadow='0 10px 30px rgba(72,64,77,0.15)'" onmouseout="this.style.transform='none';this.style.boxShadow=''">
                <div class="card-body d-flex align-items-center" style="gap:14px;padding:20px 24px;">
                    <div style="width:52px;height:52px;border-radius:15px;background:linear-gradient(135deg,var(--mortar),#6a5d70);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <i class="fas fa-calendar-check" style="color:#fff;font-size:1.2rem"></i>
                    </div>
                    <div>
                        <div style="font-family:'Playfair Display',serif;font-size:1rem;color:var(--mortar);font-weight:600;">Semua Jadwal</div>
                        <div style="font-size:0.78rem;color:var(--pharlap);margin-top:3px;">Lihat & kelola semua booking</div>
                    </div>
                    <i class="fas fa-arrow-right ml-auto" style="color:var(--rose-fog);"></i>
                </div>
            </a>
        </div>
    </div>

    {{-- Booking List --}}
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span><i class="fas fa-calendar-alt mr-2" style="color:var(--pharlap)"></i>Booking Masuk Terbaru</span>
            <a href="{{ route('bookings.tutor') }}" class="btn btn-primary btn-sm">
                <i class="fas fa-external-link-alt mr-1"></i> Lihat Semua
            </a>
        </div>
        <div class="card-body p-0">
            @if($bookings->isEmpty())
                <div class="text-center py-5">
                    <div style="width:64px;height:64px;border-radius:50%;background:var(--linen);display:flex;align-items:center;justify-content:center;margin:0 auto 16px;">
                        <i class="fas fa-calendar-check" style="font-size:1.6rem;color:var(--rose-fog)"></i>
                    </div>
                    <p style="color:var(--pharlap);font-size:0.875rem;">Belum ada booking masuk.</p>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Student</th>
                                <th>Mata Pelajaran</th>
                                <th>Tanggal</th>
                                <th>Jam</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bookings->take(5) as $i => $booking)
                            <tr>
                                <td style="color:var(--pharlap);font-weight:600">{{ $i + 1 }}</td>
                                <td>
                                    <div class="d-flex align-items-center" style="gap:10px;">
                                        <div style="width:34px;height:34px;border-radius:9px;background:linear-gradient(135deg,var(--mortar),#6a5d70);display:flex;align-items:center;justify-content:center;color:#fff;font-size:0.8rem;font-weight:700;flex-shrink:0;">
                                            {{ strtoupper(substr($booking->student->name, 0, 1)) }}
                                        </div>
                                        <span style="font-weight:500;">{{ $booking->student->name }}</span>
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
                                <td>
                                    @if($booking->status === 'pending')
                                        <div class="d-flex" style="gap:6px;">
                                            <form action="{{ route('bookings.approve', $booking->id) }}" method="POST" style="display:inline">
                                                @csrf @method('PATCH')
                                                <button class="btn btn-success btn-sm" title="Terima">
                                                    <i class="fas fa-check"></i>
                                                </button>
                                            </form>
                                            <form action="{{ route('bookings.reject', $booking->id) }}" method="POST" style="display:inline">
                                                @csrf @method('PATCH')
                                                <button class="btn btn-danger btn-sm" title="Tolak">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </form>
                                        </div>
                                    @else
                                        <span style="font-size:0.78rem;color:var(--pharlap)">—</span>
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