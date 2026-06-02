<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Rating Tutor</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background:#fde8e7;">

<div class="container py-5">

    <h2 class="fw-bold mb-4" style="color:#3b2f42;">
        Rating Tutor
    </h2>

    <div class="card border-0 shadow-sm" style="border-radius:20px;">
        <div class="card-body p-4">

            <div class="mb-4">
                <h5 class="fw-bold mb-1" style="color:#3b2f42;">
                    Rata-rata Rating Tutor
                </h5>
                <p class="mb-0" style="color:#b9828c;">
                    Lihat penilaian tutor berdasarkan rating dari student
                </p>
            </div>

            <table class="table table-hover align-middle">
                <thead>
                    <tr style="color:#3b2f42;">
                        <th>No</th>
                        <th>Nama Tutor</th>
                        <th>Mata Kuliah</th>
                        <th>Rata-rata Rating</th>
                        <th>Jumlah Rating</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($tutors as $tutor)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $tutor->nama }}</td>
                        <td>{{ $tutor->subject->nama_mapel }}</td>

                        <td>
                            <span class="badge text-white px-3 py-2"
                                  style="background:#4a3a50; border-radius:10px;">
                                ⭐ {{ number_format($tutor->ratings->avg('rating'), 1) }}
                            </span>
                        </td>

                        <td>
                            {{ $tutor->ratings->count() }}
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