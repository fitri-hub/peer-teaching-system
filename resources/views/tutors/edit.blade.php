<h1>Edit Tutor</h1>

<form action="{{ route('tutors.update', $tutor->id) }}" method="POST">

    @csrf
    @method('PUT')

    <input
        type="text"
        name="nama"
        value="{{ $tutor->nama }}">

    <br><br>

    <select name="subject_id">

        @foreach($subjects as $subject)

            <option value="{{ $subject->id }}" {{ $tutor->subject_id == $subject->id ? 'selected' : '' }}>
                {{ $subject->nama_mapel }}
            </option>

        @endforeach

    </select>

    <br><br>

    <textarea name="bio">{{ $tutor->bio }}</textarea>

    <br><br>

    <button type="submit">
        Update
    </button>

</form>