<h1>Daftar Mata Pelajaran</h1>

<a href="{{ route('subjects.create') }}">
    Tambah Mata Pelajaran
</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama Mata Pelajaran</th>
        <th>Aksi</th>
    </tr>

    @foreach($subjects as $subject)
    <tr>
        <td>{{ $subject->id }}</td>
        <td>{{ $subject->nama_mapel }}</td>
        <td>
            <a href="{{ route('subjects.edit', $subject->id) }}">
                Edit
            </a>

            <form action="{{ route('subjects.destroy', $subject->id) }}" method="POST" style="display:inline;">
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