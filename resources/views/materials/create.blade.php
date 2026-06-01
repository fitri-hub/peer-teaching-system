<h1>Upload Materi</h1>

<form action="{{ route('materials.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label>Pilih Tutor</label>
    <br>
    <select name="tutor_id">
        @foreach($tutors as $tutor)
            <option value="{{ $tutor->id }}">
                {{ $tutor->nama }} - {{ $tutor->subject->nama_mapel }}
            </option>
        @endforeach
    </select>

    <br><br>

    <label>Judul Materi</label>
    <br>
    <input type="text" name="judul">

    <br><br>

    <label>Deskripsi</label>
    <br>
    <textarea name="deskripsi"></textarea>

    <br><br>

    <label>File Materi</label>
    <br>
    <input type="file" name="file">

    <br><br>

    <button type="submit">Upload</button>
</form>