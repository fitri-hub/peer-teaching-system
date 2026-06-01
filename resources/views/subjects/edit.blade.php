<h1>Edit Mata Pelajaran</h1>

<form action="{{ route('subjects.update', $subject->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input
        type="text"
        name="nama_mapel"
        value="{{ $subject->nama_mapel }}">

    <button type="submit">
        Update
    </button>
</form>