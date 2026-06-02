<x-app-layout>
    <x-slot name="header">Riwayat Booking</x-slot>

    <div class="card">
        <div class="card-header">
            <i class="fas fa-list-alt mr-2" style="color:var(--pharlap)"></i>Booking Saya
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
                            @foreach($bookings as $i => $booking)
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