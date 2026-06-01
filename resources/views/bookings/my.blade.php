<h1>Booking Saya</h1>

<a href="{{ route('bookings.create') }}">Booking Tutor Baru</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Tutor</th>
        <th>Mata Pelajaran</th>
        <th>Tanggal</th>
        <th>Jam</th>
        <th>Status</th>
    </tr>

    @foreach($bookings as $booking)
    <tr>
        <td>{{ $booking->id }}</td>
        <td>{{ $booking->tutor->nama }}</td>
        <td>{{ $booking->tutor->subject->nama_mapel }}</td>
        <td>{{ $booking->tanggal }}</td>
        <td>{{ $booking->jam }}</td>
        <td>{{ $booking->status }}</td>
    </tr>
    @endforeach
</table>