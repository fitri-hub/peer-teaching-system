<h1>Rata-rata Rating Tutor</h1>

<a href="{{ route('ratings.create') }}">
    Beri Rating
</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama Tutor</th>
        <th>Mata Pelajaran</th>
        <th>Rata-rata Rating</th>
        <th>Jumlah Rating</th>
    </tr>

    @foreach($tutors as $tutor)
    <tr>
        <td>{{ $tutor->id }}</td>
        <td>{{ $tutor->nama }}</td>
        <td>{{ $tutor->subject->nama_mapel }}</td>
        <td>
            {{ number_format($tutor->ratings->avg('rating'), 1) }}
        </td>
        <td>{{ $tutor->ratings->count() }}</td>
    </tr>
    @endforeach
</table>