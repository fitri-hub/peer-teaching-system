<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Tutor</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background:#fde8e7;">

<div class="container py-5">

    <h2 class="fw-bold mb-4" style="color:#3b2f42;">
        Edit Tutor
    </h2>

    <div class="card border-0 shadow-sm" style="border-radius:20px;">
        <div class="card-body p-4">

            <form action="{{ route('tutors.update', $tutor->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label fw-semibold" style="color:#3b2f42;">
                        Nama Tutor
                    </label>

                    <input type="text"
                           name="nama"
                           class="form-control"
                           value="{{ $tutor->nama }}"
                           style="border-radius:12px;">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold" style="color:#3b2f42;">
                        Mata Pelajaran
                    </label>

                    <select name="subject_id"
                            class="form-select"
                            style="border-radius:12px;">

                        @foreach($subjects as $subject)

                            <option value="{{ $subject->id }}"
                                {{ $tutor->subject_id == $subject->id ? 'selected' : '' }}>
                                {{ $subject->nama_mapel }}
                            </option>

                        @endforeach

                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold" style="color:#3b2f42;">
                        Bio Tutor
                    </label>

                    <textarea name="bio"
                              class="form-control"
                              rows="4"
                              style="border-radius:12px;">{{ $tutor->bio }}</textarea>
                </div>

                <div class="d-flex gap-2">

                    <button type="submit"
                            class="btn text-white"
                            style="background:#4a3a50; border-radius:12px;">
                        Update
                    </button>

                    <a href="{{ route('tutors.index') }}"
                       class="btn btn-light"
                       style="border-radius:12px;">
                        Kembali
                    </a>

                </div>

            </form>

        </div>
    </div>

</div>

</body>
</html>