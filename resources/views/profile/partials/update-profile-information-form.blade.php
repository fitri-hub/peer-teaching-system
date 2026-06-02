<section>
    <p style="font-size:0.82rem;color:var(--pharlap);margin-bottom:20px">
        Perbarui nama dan alamat email akun kamu.
    </p>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}">
        @csrf
        @method('patch')

        {{-- Name --}}
        <div class="form-group mb-4">
            <label style="font-size:0.8rem;font-weight:600;color:var(--mortar);text-transform:uppercase;letter-spacing:0.8px">
                <i class="fas fa-user mr-1" style="color:var(--pharlap)"></i> Nama
            </label>
            <input id="name" name="name" type="text" value="{{ old('name', $user->name) }}"
                required autofocus autocomplete="name"
                class="form-control mt-1"
                style="border:1.5px solid var(--azalea);border-radius:10px;padding:10px 14px;color:var(--mortar);font-size:0.875rem;font-family:'DM Sans',sans-serif">
            @error('name')
                <p style="font-size:0.78rem;color:#c0404a;margin-top:5px"><i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}</p>
            @enderror
        </div>

        {{-- Email --}}
        <div class="form-group mb-4">
            <label style="font-size:0.8rem;font-weight:600;color:var(--mortar);text-transform:uppercase;letter-spacing:0.8px">
                <i class="fas fa-envelope mr-1" style="color:var(--pharlap)"></i> Email
            </label>
            <input id="email" name="email" type="email" value="{{ old('email', $user->email) }}"
                required autocomplete="username"
                class="form-control mt-1"
                style="border:1.5px solid var(--azalea);border-radius:10px;padding:10px 14px;color:var(--mortar);font-size:0.875rem;font-family:'DM Sans',sans-serif">
            @error('email')
                <p style="font-size:0.78rem;color:#c0404a;margin-top:5px"><i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}</p>
            @enderror

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="mt-2" style="font-size:0.82rem;color:var(--pharlap)">
                    Email belum terverifikasi.
                    <button form="send-verification" style="background:none;border:none;color:var(--pharlap);text-decoration:underline;cursor:pointer;font-size:0.82rem">
                        Kirim ulang verifikasi
                    </button>
                    @if (session('status') === 'verification-link-sent')
                        <p style="color:#1a6e3f;font-size:0.82rem;margin-top:4px">Link verifikasi telah dikirim!</p>
                    @endif
                </div>
            @endif
        </div>

        <div class="d-flex align-items-center" style="gap:12px">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save mr-1"></i> Simpan
            </button>
            @if (session('status') === 'profile-updated')
                <span style="font-size:0.82rem;color:#1a6e3f"><i class="fas fa-check-circle mr-1"></i>Tersimpan!</span>
            @endif
        </div>
    </form>
</section>