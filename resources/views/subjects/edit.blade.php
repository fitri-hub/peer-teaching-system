<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Mata Kuliah</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background:#fde8e7;">

<div class="container py-5">

    <h2 class="fw-bold mb-4" style="color:#3b2f42;">
        Edit Mata Kuliah
    </h2>

    <div class="card border-0 shadow-sm" style="border-radius:20px;">
        <div class="card-body p-4">

            <form action="{{ route('subjects.update', $subject->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label fw-semibold" style="color:#3b2f42;">
                        Nama Mata Kuliah
                    </label>

                    <input type="text"
                           name="nama_mapel"
                           class="form-control"
                           value="{{ $subject->nama_mapel }}"
                           style="border-radius:12px;">
                </div>

                <div class="d-flex gap-2">
                    <button type="submit"
                            class="btn text-white"
                            style="background:#4a3a50; border-radius:12px;">
                        Update
                    </button>

                    <a href="{{ route('subjects.index') }}"
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