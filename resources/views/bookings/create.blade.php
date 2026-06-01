<h1>Booking Tutor</h1>

<form action="{{ route('bookings.store') }}" method="POST">
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

    <label>Tanggal</label>
    <br>
    <input type="date" name="tanggal">

    <br><br>

    <label>Jam</label>
    <br>
    <input type="time" name="jam">

    <br><br>

    <button type="submit">Booking</button>
</form>