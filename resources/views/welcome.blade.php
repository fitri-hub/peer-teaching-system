<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Peer Teaching System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background:#fde8e7;">

<nav class="navbar navbar-expand-lg bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#" style="color:#3b2f42;">
            🎓 Peer Teaching
        </a>

        <div class="d-flex gap-2">
            <a href="{{ route('login') }}"
               class="btn"
               style="color:#3b2f42;">
                Login
            </a>

            <a href="{{ route('register') }}"
               class="btn text-white"
               style="background:#c48691; border-radius:12px;">
                Register
            </a>
        </div>
    </div>
</nav>

<section class="py-5">
    <div class="container">
        <div class="row align-items-center min-vh-75">

            <div class="col-md-6">
                <span class="badge mb-3 text-white"
                      style="background:#4a3a50; border-radius:20px; padding:8px 14px;">
                    Sistem Pembelajaran Tutor Sebaya
                </span>

                <h1 class="fw-bold mb-3" style="color:#3b2f42; font-size:3rem;">
                    Belajar Lebih Mudah dengan Peer Teaching
                </h1>

                <p class="mb-4" style="color:#8f6f78; font-size:1.1rem;">
                    Platform berbasis web untuk membantu mahasiswa mencari tutor,
                    melakukan booking sesi belajar, mengakses materi, dan memberikan rating
                    kepada tutor.
                </p>

                <div class="d-flex gap-3">
                    <a href="{{ route('register') }}"
                       class="btn text-white px-4 py-2"
                       style="background:#c48691; border-radius:14px;">
                        Mulai Sekarang
                    </a>

                    <a href="{{ route('login') }}"
                       class="btn px-4 py-2"
                       style="border:1px solid #c48691; color:#c48691; border-radius:14px;">
                        Login
                    </a>
                </div>
            </div>

            <div class="col-md-6 mt-5 mt-md-0">
                <div class="card border-0 shadow-sm"
                     style="border-radius:28px; background:linear-gradient(135deg,#3b2f42,#7a5060);">
                    <div class="card-body p-5 text-white">

                        <h3 class="fw-bold mb-4">
                            Fitur Utama
                        </h3>

                        <div class="mb-3">
                            ✅ Booking tutor secara online
                        </div>

                        <div class="mb-3">
                            ✅ Upload dan download materi
                        </div>

                        <div class="mb-3">
                            ✅ Rating dan ulasan tutor
                        </div>

                        <div class="mb-3">
                            ✅ Dashboard untuk Admin, Tutor, dan Student
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container text-center">

        <h2 class="fw-bold mb-4" style="color:#3b2f42;">
            Kenapa Menggunakan Peer Teaching?
        </h2>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100" style="border-radius:20px;">
                    <div class="card-body p-4">
                        <h5 class="fw-bold" style="color:#3b2f42;">Mudah Digunakan</h5>
                        <p style="color:#8f6f78;">
                            Student dapat memilih tutor dan membuat booking dengan cepat.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100" style="border-radius:20px;">
                    <div class="card-body p-4">
                        <h5 class="fw-bold" style="color:#3b2f42;">Materi Terpusat</h5>
                        <p style="color:#8f6f78;">
                            Tutor dapat membagikan materi pembelajaran yang dapat diunduh student.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100" style="border-radius:20px;">
                    <div class="card-body p-4">
                        <h5 class="fw-bold" style="color:#3b2f42;">Rating Tutor</h5>
                        <p style="color:#8f6f78;">
                            Student dapat memberi penilaian agar kualitas tutor lebih terukur.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

</body>
</html>