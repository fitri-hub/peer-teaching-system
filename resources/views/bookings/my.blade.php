<x-app-layout>
    <x-slot name="header">Riwayat Booking</x-slot>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span><i class="fas fa-list-alt mr-2" style="color:var(--pharlap)"></i>Booking Saya</span>
            <a href="{{ route('bookings.create') }}" class="btn btn-primary btn-sm">
                <i class="fas fa-plus mr-1"></i> Booking Baru
            </a>
        </div>
        <div class="card-body p-0">
            @if($bookings->isEmpty())
                <div class="text-center py-5">
                    <i class="fas fa-calendar-times" style="font-size:2.5rem;color:var(--rose-fog)"></i>
                    <p class="mt-3" style="color:var(--pharlap);font-size:0.9rem">Belum ada booking. Yuk buat booking pertamamu!</p>
                    <a href="{{ route('bookings.create') }}" class="btn btn-primary btn-sm">Booking Sekarang</a>
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
                                <td>{{ $booking->tutor->nama }}</td>
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
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>