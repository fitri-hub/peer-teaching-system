<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Tutor</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background:#fde8e7;">

<div class="container py-5">

    <h2 class="fw-bold mb-4" style="color:#3b2f42;">
        Daftar Tutor
    </h2>

    <div class="card border-0 shadow-sm" style="border-radius:20px;">
        <div class="card-body p-4">

            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h5 class="fw-bold mb-1" style="color:#3b2f42;">
                        Data Tutor
                    </h5>
                    <p class="mb-0" style="color:#b9828c;">
                        Kelola data tutor yang terdaftar di Peer Teaching
                    </p>
                </div>

                <a href="{{ route('tutors.create') }}"
                   class="btn text-white"
                   style="background:#c48691; border-radius:12px;">
                    + Tambah Tutor
                </a>
            </div>

            <table class="table table-hover align-middle">
                <thead>
                    <tr style="color:#3b2f42;">
                        <th>No</th>
                        <th>Nama Tutor</th>
                        <th>Mata Kuliah</th>
                        <th>Bio</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($tutors as $tutor)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $tutor->nama }}</td>
                        <td>{{ $tutor->subject->nama_mapel }}</td>
                        <td>{{ $tutor->bio }}</td>

                        <td class="text-center">

                            <a href="{{ route('tutors.edit', $tutor->id) }}"
                               class="btn btn-sm text-white"
                               style="background:#4a3a50; border-radius:10px;">
                                Edit
                            </a>

                            <form action="{{ route('tutors.destroy', $tutor->id) }}"
                                  method="POST"
                                  class="d-inline">
                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-sm text-white"
                                        style="background:#d99aa3; border-radius:10px;"
                                        onclick="return confirm('Yakin ingin menghapus tutor ini?')">
                                    Hapus
                                </button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

</div>

</body>
</html>