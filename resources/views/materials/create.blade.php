<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Upload Materi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background:#fde8e7;">

<div class="container py-5">

    <h2 class="fw-bold mb-4" style="color:#3b2f42;">
        Upload Materi
    </h2>

    <div class="card border-0 shadow-sm" style="border-radius:20px;">
        <div class="card-body p-4">

            <div class="mb-4">
                <h5 class="fw-bold mb-1" style="color:#3b2f42;">
                    Tambah Materi Pembelajaran
                </h5>
                <p class="mb-0" style="color:#b9828c;">
                    Upload materi agar dapat dilihat dan diunduh oleh student
                </p>
            </div>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('materials.store') }}" method="POST" enctype="multipart/form-data">
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
                        Judul Materi
                    </label>

                    <input type="text" name="judul" class="form-control" style="border-radius:12px;" placeholder="Masukkan judul materi">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold" style="color:#3b2f42;">
                        Deskripsi
                    </label>

                    <textarea name="deskripsi" class="form-control" rows="4" style="border-radius:12px;" placeholder="Masukkan deskripsi materi"></textarea>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-semibold" style="color:#3b2f42;">
                        File Materi
                    </label>

                    <input type="file" name="file" class="form-control" style="border-radius:12px;">
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn text-white" style="background:#c48691; border-radius:12px;">
                        Upload Materi
                    </button>

                    <a href="{{ route('materials.index') }}" class="btn btn-light" style="border-radius:12px;">
                        Kembali
                    </a>
                </div>

            </form>

        </div>
    </div>

</div>

</body>
</html>