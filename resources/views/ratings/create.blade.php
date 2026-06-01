<h1>Beri Rating Tutor</h1>

<form action="{{ route('ratings.store') }}" method="POST">
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

    <label>Rating</label>
    <br>
    <select name="rating">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>

    <br><br>

    <label>Komentar</label>
    <br>
    <textarea name="komentar"></textarea>

    <br><br>

    <button type="submit">Kirim Rating</button>
</form>