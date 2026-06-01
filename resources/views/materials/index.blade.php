<h1>Daftar Materi</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Judul</th>
        <th>Deskripsi</th>
        <th>Tutor</th>
        <th>Mata Pelajaran</th>
        <th>File</th>
    </tr>

    @foreach($materials as $material)
    <tr>
        <td>{{ $material->id }}</td>
        <td>{{ $material->judul }}</td>
        <td>{{ $material->deskripsi }}</td>
        <td>{{ $material->tutor->nama }}</td>
        <td>{{ $material->tutor->subject->nama_mapel }}</td>
        <td>
            <a href="{{ route('materials.download', $material->id) }}">
                Download
            </a>
        </td>
    </tr>
    @endforeach
</table>