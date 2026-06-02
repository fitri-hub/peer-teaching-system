<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Booking Tutor</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background:#fde8e7;">

<div class="container py-5">

    <h2 class="fw-bold mb-4" style="color:#3b2f42;">
        Daftar Booking Tutor
    </h2>

    <div class="card border-0 shadow-sm" style="border-radius:20px;">
        <div class="card-body p-4">

            <div class="mb-4">
                <h5 class="fw-bold mb-1" style="color:#3b2f42;">
                    Jadwal Booking
                </h5>
                <p class="mb-0" style="color:#b9828c;">
                    Kelola permintaan booking dari student
                </p>
            </div>

            <table class="table table-hover align-middle">
                <thead>
                    <tr style="color:#3b2f42;">
                        <th>No</th>
                        <th>Student</th>
                        <th>Tutor</th>
                        <th>Mata Pelajaran</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Status</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($bookings as $booking)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $booking->student->name }}</td>
                        <td>{{ $booking->tutor->nama }}</td>
                        <td>{{ $booking->tutor->subject->nama_mapel }}</td>
                        <td>{{ $booking->tanggal }}</td>
                        <td>{{ $booking->jam }}</td>
                        <td>
                            @if($booking->status == 'pending')
                                <span class="badge text-white px-3 py-2"
                                      style="background:#e8a030; border-radius:10px;">
                                    Pending
                                </span>
                            @elseif($booking->status == 'approved')
                                <span class="badge text-white px-3 py-2"
                                      style="background:#3d8c6a; border-radius:10px;">
                                    Approved
                                </span>
                            @else
                                <span class="badge text-white px-3 py-2"
                                      style="background:#d99aa3; border-radius:10px;">
                                    Rejected
                                </span>
                            @endif
                        </td>
                        <td class="text-center">
                            @if($booking->status == 'pending')
                                <form action="{{ route('bookings.approve', $booking->id) }}"
                                      method="POST"
                                      class="d-inline">
                                    @csrf
                                    @method('PATCH')

                                    <button type="submit"
                                            class="btn btn-sm text-white"
                                            style="background:#3d8c6a; border-radius:10px;">
                                        Approve
                                    </button>
                                </form>

                                <form action="{{ route('bookings.reject', $booking->id) }}"
                                      method="POST"
                                      class="d-inline">
                                    @csrf
                                    @method('PATCH')

                                    <button type="submit"
                                            class="btn btn-sm text-white"
                                            style="background:#d99aa3; border-radius:10px;">
                                        Reject
                                    </button>
                                </form>
                            @else
                                <span style="color:#b9828c;">Selesai</span>
                            @endif
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