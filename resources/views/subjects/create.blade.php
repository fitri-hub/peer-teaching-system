<h1>Tambah Mata Pelajaran</h1>

<form action="{{ route('subjects.store') }}" method="POST">

    @csrf

    <input
        type="text"
        name="nama_mapel"
        placeholder="Nama Mata Pelajaran">

    <button type="submit">
        Simpan
    </button>

</form>