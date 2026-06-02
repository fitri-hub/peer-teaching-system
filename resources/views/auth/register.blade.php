<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register - Peer Teaching</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background:#fde8e7;">

<div class="container min-vh-100 d-flex justify-content-center align-items-center">

    <div class="card border-0 shadow-sm" style="border-radius:24px; width:500px;">
        <div class="card-body p-5">

            <div class="text-center mb-4">
                <h2 class="fw-bold mb-1" style="color:#3b2f42;">
                    Register
                </h2>

                <p class="mb-0" style="color:#b9828c;">
                    Buat akun baru Peer Teaching System
                </p>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-3">
                    <label class="form-label fw-semibold" style="color:#3b2f42;">
                        Nama
                    </label>

                    <input type="text"
                           name="name"
                           class="form-control"
                           style="border-radius:12px;"
                           required
                           autofocus>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold" style="color:#3b2f42;">
                        Email
                    </label>

                    <input type="email"
                           name="email"
                           class="form-control"
                           style="border-radius:12px;"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold" style="color:#3b2f42;">
                        Password
                    </label>

                    <input type="password"
                           name="password"
                           class="form-control"
                           style="border-radius:12px;"
                           required>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-semibold" style="color:#3b2f42;">
                        Konfirmasi Password
                    </label>

                    <input type="password"
                           name="password_confirmation"
                           class="form-control"
                           style="border-radius:12px;"
                           required>
                </div>

                <button type="submit"
                        class="btn w-100 text-white"
                        style="background:#c48691; border-radius:12px;">
                    Register
                </button>

                <div class="text-center mt-4">

                    <span style="color:#b9828c;">
                        Sudah punya akun?
                    </span>

                    <a href="{{ route('login') }}"
                       style="color:#3b2f42;
                              font-weight:600;
                              text-decoration:none;">
                        Login
                    </a>

                </div>

            </form>

        </div>
    </div>

</div>

</body>
</html>