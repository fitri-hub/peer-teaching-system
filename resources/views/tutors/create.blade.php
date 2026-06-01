<h1>Tambah Tutor</h1>

<form action="{{ route('tutors.store') }}" method="POST">

    @csrf

    <input
        type="text"
        name="nama"
        placeholder="Nama Tutor">

    <br><br>

    <select name="subject_id">

        @foreach($subjects as $subject)

            <option value="{{ $subject->id }}">
                {{ $subject->nama_mapel }}
            </option>

        @endforeach

    </select>

    <br><br>

    <textarea
        name="bio"
        placeholder="Bio Tutor"></textarea>

    <br><br>

    <button type="submit">
        Simpan
    </button>

</form>