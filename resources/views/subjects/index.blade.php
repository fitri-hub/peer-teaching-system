<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mata Kuliah</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background:#fde8e7;">

<div class="container py-5">

    <h2 class="fw-bold mb-4" style="color:#3b2f42;">
        Daftar Mata Kuliah
    </h2>

    <div class="card border-0 shadow-sm" style="border-radius:20px;">
        <div class="card-body p-4">

            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h5 class="fw-bold mb-1" style="color:#3b2f42;">
                        Data Mata Kuliah
                    </h5>
                    <p class="mb-0" style="color:#b9828c;">
                        Kelola daftar Mata Kuliah Peer Teaching
                    </p>
                </div>

                <a href="{{ route('subjects.create') }}"
                   class="btn text-white"
                   style="background:#c48691; border-radius:12px;">
                    + Tambah Mata Kuliah
                </a>
            </div>

            <table class="table align-middle">
                <thead>
                    <tr style="color:#3b2f42;">
                        <th>No</th>
                        <th>Nama Mata Kuliah</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($subjects as $subject)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $subject->nama_mapel }}</td>
                            <td class="text-center">
                                <a href="{{ route('subjects.edit', $subject->id) }}"
                                   class="btn btn-sm text-white"
                                   style="background:#4a3a50; border-radius:10px;">
                                    Edit
                                </a>

                                <form action="{{ route('subjects.destroy', $subject->id) }}"
                                      method="POST"
                                      class="d-inline">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-sm text-white"
                                            style="background:#d99aa3; border-radius:10px;"
                                            onclick="return confirm('Yakin ingin menghapusMata Kuliah ini?')">
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