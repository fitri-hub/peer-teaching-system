<x-app-layout>
    <x-slot name="header">Buat Booking</x-slot>

    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    <span><i class="fas fa-calendar-plus mr-2" style="color:var(--pharlap)"></i>Form Booking Tutor</span>
                </div>
                <div class="card-body p-4">

                    @if($errors->any())
                        <div style="background:#fde8e8;border-radius:10px;color:#9b2335;font-size:0.85rem;padding:12px 16px;margin-bottom:20px;display:flex;align-items:center;gap:8px;">
                            <i class="fas fa-exclamation-circle"></i>
                            <span>{{ $errors->first() }}</span>
                        </div>
                    @endif

                    @if(session('success'))
                        <div style="background:#d1f0e0;border-radius:10px;color:#1a6e3f;font-size:0.85rem;padding:12px 16px;margin-bottom:20px;display:flex;align-items:center;gap:8px;">
                            <i class="fas fa-check-circle"></i>
                            <span>{{ session('success') }}</span>
                        </div>
                    @endif

                    <form action="{{ route('bookings.store') }}" method="POST">
                        @csrf

                        {{-- Pilih Tutor --}}
                        <div class="form-group mb-4">
                            <label style="font-size:0.78rem;font-weight:600;color:var(--mortar);text-transform:uppercase;letter-spacing:0.8px;display:block;margin-bottom:6px;">
                                <i class="fas fa-chalkboard-teacher mr-1" style="color:var(--pharlap)"></i> Pilih Tutor
                            </label>
                            <select name="tutor_id" required
                                style="width:100%;border:1.5px solid var(--azalea);border-radius:10px;padding:10px 14px;color:var(--mortar);font-size:0.875rem;background:#fff;font-family:'DM Sans',sans-serif;cursor:pointer;"
                                onchange="updateTutorInfo(this)">
                                <option value="">-- Pilih Tutor --</option>
                                @foreach($tutors as $tutor)
                                    <option value="{{ $tutor->id }}"
                                        data-mapel="{{ $tutor->subject->nama_mapel }}"
                                        {{ old('tutor_id') == $tutor->id ? 'selected' : '' }}>
                                        {{ $tutor->nama }} — {{ $tutor->subject->nama_mapel }}
                                    </option>
                                @endforeach
                            </select>

                            <div id="tutor-info" style="display:none;margin-top:10px;background:var(--linen);border-radius:10px;padding:10px 14px;font-size:0.82rem;color:var(--pharlap);align-items:center;gap:8px;">
                                <i class="fas fa-info-circle"></i>
                                <span id="tutor-info-text"></span>
                            </div>
                        </div>

                        {{-- Tanggal & Jam --}}
                        <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-bottom:24px;">
                            <div>
                                <label style="font-size:0.78rem;font-weight:600;color:var(--mortar);text-transform:uppercase;letter-spacing:0.8px;display:block;margin-bottom:6px;">
                                    <i class="fas fa-calendar mr-1" style="color:var(--pharlap)"></i> Tanggal
                                </label>
                                <input type="date" name="tanggal" value="{{ old('tanggal') }}" required
                                    style="width:100%;border:1.5px solid var(--azalea);border-radius:10px;padding:10px 14px;color:var(--mortar);font-size:0.875rem;font-family:'DM Sans',sans-serif;">
                            </div>
                            <div>
                                <label style="font-size:0.78rem;font-weight:600;color:var(--mortar);text-transform:uppercase;letter-spacing:0.8px;display:block;margin-bottom:6px;">
                                    <i class="fas fa-clock mr-1" style="color:var(--pharlap)"></i> Jam
                                </label>
                                <input type="time" name="jam" value="{{ old('jam') }}" required
                                    style="width:100%;border:1.5px solid var(--azalea);border-radius:10px;padding:10px 14px;color:var(--mortar);font-size:0.875rem;font-family:'DM Sans',sans-serif;">
                            </div>
                        </div>

                        {{-- Tips --}}
                        <div style="background:var(--linen);border-radius:10px;padding:10px 14px;font-size:0.8rem;color:var(--pharlap);margin-bottom:20px;display:flex;align-items:flex-start;gap:8px;">
                            <i class="fas fa-lightbulb" style="margin-top:2px;flex-shrink:0;"></i>
                            <span>Booking akan dikonfirmasi oleh tutor. Status akan berubah setelah tutor menyetujui jadwalmu.</span>
                        </div>

                        {{-- Tombol --}}
                        <div style="display:flex;align-items:center;gap:10px;flex-wrap:wrap;">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-check mr-1"></i> Booking Sekarang
                            </button>
                            <a href="{{ route('bookings.my') }}"
                                style="border:1.5px solid var(--rose-fog);border-radius:10px;color:var(--pharlap);padding:8px 20px;font-weight:500;font-size:0.875rem;text-decoration:none;transition:all 0.2s;background:transparent;display:inline-flex;align-items:center;gap:6px;"
                                onmouseover="this.style.background='var(--linen)'"
                                onmouseout="this.style.background='transparent'">
                                <i class="fas fa-history"></i> Lihat Riwayat
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function updateTutorInfo(select) {
            const info = document.getElementById('tutor-info');
            const text = document.getElementById('tutor-info-text');
            if (select.value) {
                const opt = select.options[select.selectedIndex];
                text.textContent = 'Mata pelajaran: ' + opt.getAttribute('data-mapel');
                info.style.display = 'flex';
            } else {
                info.style.display = 'none';
            }
        }

        document.addEventListener('DOMContentLoaded', function () {
            const select = document.querySelector('select[name="tutor_id"]');
            if (select && select.value) updateTutorInfo(select);
        });
    </script>
</x-app-layout>