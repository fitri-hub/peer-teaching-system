<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - Peer Teaching</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background:#fde8e7;">

<div class="container min-vh-100 d-flex justify-content-center align-items-center">

    <div class="card border-0 shadow-sm" style="border-radius:24px; width:420px;">
        <div class="card-body p-5">

            <div class="text-center mb-4">
                <h2 class="fw-bold mb-1" style="color:#3b2f42;">
                    Login
                </h2>
                <p class="mb-0" style="color:#b9828c;">
                    Masuk ke Peer Teaching System
                </p>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                    <label class="form-label fw-semibold" style="color:#3b2f42;">
                        Email
                    </label>
                    <input type="email"
                           name="email"
                           class="form-control"
                           style="border-radius:12px;"
                           required autofocus>
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

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <label style="color:#3b2f42;">
                        <input type="checkbox" name="remember">
                        Ingat saya
                    </label>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}"
                           style="color:#c48691; text-decoration:none;">
                            Lupa password?
                        </a>
                    @endif
                </div>

                <button type="submit"
                        class="btn w-100 text-white"
                        style="background:#c48691; border-radius:12px;">
                    Login
                </button>

                <div class="text-center mt-4">
                    <span style="color:#b9828c;">Belum punya akun?</span>
                    <a href="{{ route('register') }}"
                       style="color:#3b2f42; font-weight:600; text-decoration:none;">
                        Register
                    </a>
                </div>

            </form>

        </div>
    </div>

</div>

</body>
</html>