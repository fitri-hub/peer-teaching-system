<h1>Daftar Booking Tutor</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Student</th>
        <th>Tutor</th>
        <th>Mata Pelajaran</th>
        <th>Tanggal</th>
        <th>Jam</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>

    @foreach($bookings as $booking)
    <tr>
        <td>{{ $booking->id }}</td>
        <td>{{ $booking->student->name }}</td>
        <td>{{ $booking->tutor->nama }}</td>
        <td>{{ $booking->tutor->subject->nama_mapel }}</td>
        <td>{{ $booking->tanggal }}</td>
        <td>{{ $booking->jam }}</td>
        <td>{{ $booking->status }}</td>
        <td>
            @if($booking->status == 'pending')
                <form action="{{ route('bookings.approve', $booking->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('PATCH')
                    <button type="submit">Approve</button>
                </form>

                <form action="{{ route('bookings.reject', $booking->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('PATCH')
                    <button type="submit">Reject</button>
                </form>
            @else
                -
            @endif
        </td>
    </tr>
    @endforeach
</table>