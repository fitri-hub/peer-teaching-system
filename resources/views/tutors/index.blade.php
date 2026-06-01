<h1>Daftar Tutor</h1>

<a href="{{ route('tutors.create') }}">
    Tambah Tutor
</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama Tutor</th>
        <th>Mata Pelajaran</th>
        <th>Bio</th>
        <th>Aksi</th>
    </tr>

    @foreach($tutors as $tutor)
    <tr>
        <td>{{ $tutor->id }}</td>
        <td>{{ $tutor->nama }}</td>
        <td>{{ $tutor->subject->nama_mapel }}</td>
        <td>{{ $tutor->bio }}</td>
        <td>
            <a href="{{ route('tutors.edit', $tutor->id) }}">
                Edit
            </a>

            <form action="{{ route('tutors.destroy', $tutor->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')

                <button type="submit">
                    Hapus
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>