<x-app-layout>
    <x-slot name="header">Dashboard Tutor</x-slot>

    {{-- Welcome Banner --}}
    <div class="welcome-banner">
        <span class="badge-role">Tutor</span>
        <h2>Hai, {{ auth()->user()->name }}! 📚</h2>
        <p>Kelola jadwal dan materi mengajarmu di sini.</p>
    </div>

    {{-- Quick Actions --}}
    <div class="row mb-4">
        <div class="col-md-6 mb-3">
            <a href="{{ route('materials.create') }}" class="card text-decoration-none" style="border-left: 4px solid var(--pharlap) !important;">
                <div class="card-body d-flex align-items-center" style="gap:16px">
                    <div style="width:46px;height:46px;border-radius:12px;background:linear-gradient(135deg,var(--pharlap),#c4898f);display:flex;align-items:center;justify-content:center">
                        <i class="fas fa-upload" style="color:#fff;font-size:1.1rem"></i>
                    </div>
                    <div>
                        <div style="font-family:'Playfair Display',serif;font-size:1rem;color:var(--mortar);font-weight:600">Upload Materi</div>
                        <div style="font-size:0.78rem;color:var(--pharlap)">Bagikan materi ke student</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 mb-3">
            <div class="card" style="border-left: 4px solid var(--mortar) !important;">
                <div class="card-body d-flex align-items-center" style="gap:16px">
                    <div style="width:46px;height:46px;border-radius:12px;background:linear-gradient(135deg,var(--mortar),#6a5d70);display:flex;align-items:center;justify-content:center">
                        <i class="fas fa-calendar-check" style="color:#fff;font-size:1.1rem"></i>
                    </div>
                    <div>
                        <div style="font-family:'Playfair Display',serif;font-size:1rem;color:var(--mortar);font-weight:600">{{ $bookings->count() }} Booking</div>
                        <div style="font-size:0.78rem;color:var(--pharlap)">Total permintaan masuk</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Booking List --}}
    <div class="card">
        <div class="card-header">
            <i class="fas fa-calendar-alt mr-2" style="color:var(--pharlap)"></i>Jadwal Booking Masuk
        </div>
        <div class="card-body p-0">
            @if($bookings->isEmpty())
                <div class="text-center py-5">
                    <i class="fas fa-calendar-check" style="font-size:2.5rem;color:var(--rose-fog)"></i>
                    <p class="mt-3" style="color:var(--pharlap);font-size:0.9rem">Belum ada booking masuk.</p>
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
                            @foreach($bookings as $i => $booking)
                            <tr>
                                <td style="color:var(--pharlap);font-weight:600">{{ $i + 1 }}</td>
                                <td>{{ $booking->student->name }}</td>
                                <td>{{ $booking->tutor->subject->nama_mapel }}</td>
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
                                        <form action="{{ route('bookings.approve', $booking->id) }}" method="POST" style="display:inline">
                                            @csrf @method('PATCH')
                                            <button class="btn btn-success btn-sm">
                                                <i class="fas fa-check"></i>
                                            </button>
                                        </form>
                                        <form action="{{ route('bookings.reject', $booking->id) }}" method="POST" style="display:inline">
                                            @csrf @method('PATCH')
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </form>
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