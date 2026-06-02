<section>
    <p style="font-size:0.82rem;color:#888;margin-bottom:20px">
        Setelah akun dihapus, semua data akan hilang permanen. Pastikan kamu sudah mengunduh data penting sebelum menghapus akun.
    </p>

    <button type="button" onclick="document.getElementById('deleteModal').style.display='flex'"
        style="background:linear-gradient(135deg,#c0404a,#e05560);border:none;border-radius:10px;color:#fff;padding:9px 20px;font-size:0.875rem;font-weight:500;cursor:pointer;font-family:'DM Sans',sans-serif">
        <i class="fas fa-trash mr-1"></i> Hapus Akun
    </button>

    {{-- Modal --}}
    <div id="deleteModal"
        style="display:none;position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(72,64,77,0.5);z-index:9999;align-items:center;justify-content:center">
        <div style="background:#fff;border-radius:18px;padding:32px;max-width:440px;width:90%;box-shadow:0 20px 60px rgba(72,64,77,0.2)">
            <h5 style="font-family:'Playfair Display',serif;color:var(--mortar);font-size:1.1rem;margin-bottom:8px">
                Yakin ingin menghapus akun?
            </h5>
            <p style="font-size:0.82rem;color:#888;margin-bottom:20px">
                Tindakan ini tidak bisa dibatalkan. Masukkan password untuk konfirmasi.
            </p>

            <form method="post" action="{{ route('profile.destroy') }}">
                @csrf
                @method('delete')

                <div class="form-group mb-4">
                    <label style="font-size:0.8rem;font-weight:600;color:var(--mortar);text-transform:uppercase;letter-spacing:0.8px">
                        Password
                    </label>
                    <input name="password" type="password" placeholder="Masukkan password kamu"
                        class="form-control mt-1"
                        style="border:1.5px solid var(--azalea);border-radius:10px;padding:10px 14px;color:var(--mortar);font-size:0.875rem;font-family:'DM Sans',sans-serif">
                    @error('password', 'userDeletion')
                        <p style="font-size:0.78rem;color:#c0404a;margin-top:5px">{{ $message }}</p>
                    @enderror
                </div>

                <div class="d-flex justify-content-end" style="gap:10px">
                    <button type="button" onclick="document.getElementById('deleteModal').style.display='none'"
                        style="background:var(--linen);border:1.5px solid var(--rose-fog);border-radius:10px;color:var(--pharlap);padding:8px 20px;font-size:0.875rem;font-weight:500;cursor:pointer;font-family:'DM Sans',sans-serif">
                        Batal
                    </button>
                    <button type="submit"
                        style="background:linear-gradient(135deg,#c0404a,#e05560);border:none;border-radius:10px;color:#fff;padding:8px 20px;font-size:0.875rem;font-weight:500;cursor:pointer;font-family:'DM Sans',sans-serif">
                        <i class="fas fa-trash mr-1"></i> Hapus
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>