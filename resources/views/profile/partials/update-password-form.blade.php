<section>
    <p style="font-size:0.82rem;color:var(--pharlap);margin-bottom:20px">
        Pastikan akun kamu menggunakan password yang kuat dan aman.
    </p>

    <form method="post" action="{{ route('password.update') }}">
        @csrf
        @method('put')

        {{-- Current Password --}}
        <div class="form-group mb-4">
            <label style="font-size:0.8rem;font-weight:600;color:var(--mortar);text-transform:uppercase;letter-spacing:0.8px">
                <i class="fas fa-lock mr-1" style="color:var(--pharlap)"></i> Password Saat Ini
            </label>
            <input id="update_password_current_password" name="current_password" type="password"
                autocomplete="current-password"
                class="form-control mt-1"
                style="border:1.5px solid var(--azalea);border-radius:10px;padding:10px 14px;color:var(--mortar);font-size:0.875rem;font-family:'DM Sans',sans-serif">
            @error('current_password', 'updatePassword')
                <p style="font-size:0.78rem;color:#c0404a;margin-top:5px"><i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}</p>
            @enderror
        </div>

        {{-- New Password --}}
        <div class="form-group mb-4">
            <label style="font-size:0.8rem;font-weight:600;color:var(--mortar);text-transform:uppercase;letter-spacing:0.8px">
                <i class="fas fa-key mr-1" style="color:var(--pharlap)"></i> Password Baru
            </label>
            <input id="update_password_password" name="password" type="password"
                autocomplete="new-password"
                class="form-control mt-1"
                style="border:1.5px solid var(--azalea);border-radius:10px;padding:10px 14px;color:var(--mortar);font-size:0.875rem;font-family:'DM Sans',sans-serif">
            @error('password', 'updatePassword')
                <p style="font-size:0.78rem;color:#c0404a;margin-top:5px"><i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}</p>
            @enderror
        </div>

        {{-- Confirm Password --}}
        <div class="form-group mb-4">
            <label style="font-size:0.8rem;font-weight:600;color:var(--mortar);text-transform:uppercase;letter-spacing:0.8px">
                <i class="fas fa-key mr-1" style="color:var(--pharlap)"></i> Konfirmasi Password
            </label>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password"
                autocomplete="new-password"
                class="form-control mt-1"
                style="border:1.5px solid var(--azalea);border-radius:10px;padding:10px 14px;color:var(--mortar);font-size:0.875rem;font-family:'DM Sans',sans-serif">
            @error('password_confirmation', 'updatePassword')
                <p style="font-size:0.78rem;color:#c0404a;margin-top:5px"><i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}</p>
            @enderror
        </div>

        <div class="d-flex align-items-center" style="gap:12px">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save mr-1"></i> Simpan
            </button>
            @if (session('status') === 'password-updated')
                <span style="font-size:0.82rem;color:#1a6e3f"><i class="fas fa-check-circle mr-1"></i>Password diperbarui!</span>
            @endif
        </div>
    </form>
</section>