<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Beri Rating Tutor</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background:#fde8e7;">

<div class="container py-5">

    <h2 class="fw-bold mb-4" style="color:#3b2f42;">
        Beri Rating Tutor
    </h2>

    <div class="card border-0 shadow-sm" style="border-radius:20px;">
        <div class="card-body p-4">

            <form action="{{ route('ratings.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label fw-semibold" style="color:#3b2f42;">
                        Pilih Tutor
                    </label>

                    <select name="tutor_id" class="form-select" style="border-radius:12px;">
                        @foreach($tutors as $tutor)
                            <option value="{{ $tutor->id }}">
                                {{ $tutor->nama }} - {{ $tutor->subject->nama_mapel }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold" style="color:#3b2f42;">
                        Rating
                    </label>

                    <select name="rating" class="form-select" style="border-radius:12px;">
                        <option value="1">⭐ 1</option>
                        <option value="2">⭐⭐ 2</option>
                        <option value="3">⭐⭐⭐ 3</option>
                        <option value="4">⭐⭐⭐⭐ 4</option>
                        <option value="5">⭐⭐⭐⭐⭐ 5</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold" style="color:#3b2f42;">
                        Komentar
                    </label>

                    <textarea name="komentar"
                              class="form-control"
                              rows="4"
                              style="border-radius:12px;"
                              placeholder="Tulis komentar untuk tutor"></textarea>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit"
                            class="btn text-white"
                            style="background:#c48691; border-radius:12px;">
                        Kirim Rating
                    </button>

                    <a href="{{ route('ratings.index') }}"
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