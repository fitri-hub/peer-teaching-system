<x-app-layout>
    <x-slot name="header">Beri Rating</x-slot>

    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-star mr-2" style="color:var(--pharlap)"></i>
                    Form Rating Tutor
                </div>
                <div class="card-body p-4">
                    @if($errors->any())
                        <div class="alert" style="background:#fde8e8;border-radius:10px;border:none;color:#9b2335;font-size:0.85rem;padding:12px 16px">
                            <i class="fas fa-exclamation-circle mr-2"></i>
                            {{ $errors->first() }}
                        </div>
                    @endif

                    <form action="{{ route('ratings.store') }}" method="POST">
                        @csrf

                        <div class="form-group mb-4">
                            <label style="font-size:0.8rem;font-weight:600;color:var(--mortar);text-transform:uppercase;letter-spacing:0.8px">
                                <i class="fas fa-chalkboard-teacher mr-1" style="color:var(--pharlap)"></i> Pilih Tutor
                            </label>
                            <select name="tutor_id" class="form-control mt-1" style="border:1.5px solid var(--azalea);border-radius:10px;padding:10px 14px;color:var(--mortar);font-size:0.875rem;background:#fff">
                                <option value="">-- Pilih Tutor --</option>
                                @foreach($tutors as $tutor)
                                    <option value="{{ $tutor->id }}">
                                        {{ $tutor->nama }} — {{ $tutor->subject->nama_mapel }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-4">
                            <label style="font-size:0.8rem;font-weight:600;color:var(--mortar);text-transform:uppercase;letter-spacing:0.8px">
                                <i class="fas fa-star mr-1" style="color:var(--pharlap)"></i> Rating
                            </label>
                            <div class="mt-2 d-flex" style="gap:8px">
                                @for($i = 1; $i <= 5; $i++)
                                <label style="cursor:pointer">
                                    <input type="radio" name="rating" value="{{ $i }}" style="display:none" class="rating-radio">
                                    <div class="rating-star" data-val="{{ $i }}"
                                        style="width:42px;height:42px;border-radius:10px;border:1.5px solid var(--azalea);display:flex;align-items:center;justify-content:center;font-size:1.1rem;transition:all 0.2s;color:var(--rose-fog)">
                                        {{ $i }}
                                    </div>
                                </label>
                                @endfor
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label style="font-size:0.8rem;font-weight:600;color:var(--mortar);text-transform:uppercase;letter-spacing:0.8px">
                                <i class="fas fa-comment mr-1" style="color:var(--pharlap)"></i> Komentar
                            </label>
                            <textarea name="komentar" rows="4" class="form-control mt-1"
                                placeholder="Tulis komentar kamu tentang tutor ini..."
                                style="border:1.5px solid var(--azalea);border-radius:10px;padding:10px 14px;color:var(--mortar);font-size:0.875rem;resize:none"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-paper-plane mr-1"></i> Kirim Rating
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.rating-radio').forEach(radio => {
            radio.addEventListener('change', function() {
                const val = this.value;
                document.querySelectorAll('.rating-star').forEach(star => {
                    if (parseInt(star.dataset.val) <= parseInt(val)) {
                        star.style.background = 'linear-gradient(135deg, var(--pharlap), #c4898f)';
                        star.style.color = '#fff';
                        star.style.borderColor = 'var(--pharlap)';
                    } else {
                        star.style.background = '#fff';
                        star.style.color = 'var(--rose-fog)';
                        star.style.borderColor = 'var(--azalea)';
                    }
                });
            });
        });
    </script>
</x-app-layout>