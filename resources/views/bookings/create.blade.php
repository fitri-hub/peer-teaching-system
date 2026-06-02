<x-app-layout>
    <x-slot name="header">Buat Booking</x-slot>

    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-calendar-plus mr-2" style="color:var(--pharlap)"></i>
                    Form Booking Tutor
                </div>
                <div class="card-body p-4">
                    @if($errors->any())
                        <div class="alert" style="background:#fde8e8;border-radius:10px;border:none;color:#9b2335;font-size:0.85rem;padding:12px 16px">
                            <i class="fas fa-exclamation-circle mr-2"></i>
                            {{ $errors->first() }}
                        </div>
                    @endif

                    <form action="{{ route('bookings.store') }}" method="POST">
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
                                <i class="fas fa-calendar mr-1" style="color:var(--pharlap)"></i> Tanggal
                            </label>
                            <input type="date" name="tanggal" class="form-control mt-1"
                                style="border:1.5px solid var(--azalea);border-radius:10px;padding:10px 14px;color:var(--mortar);font-size:0.875rem">
                        </div>

                        <div class="form-group mb-4">
                            <label style="font-size:0.8rem;font-weight:600;color:var(--mortar);text-transform:uppercase;letter-spacing:0.8px">
                                <i class="fas fa-clock mr-1" style="color:var(--pharlap)"></i> Jam
                            </label>
                            <input type="time" name="jam" class="form-control mt-1"
                                style="border:1.5px solid var(--azalea);border-radius:10px;padding:10px 14px;color:var(--mortar);font-size:0.875rem">
                        </div>

                        <div class="d-flex" style="gap:10px">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-check mr-1"></i> Booking Sekarang
                            </button>
                            <a href="{{ route('bookings.my') }}" class="btn btn-sm"
                                style="border:1.5px solid var(--rose-fog);border-radius:10px;color:var(--pharlap);padding:8px 20px;font-weight:500">
                                Lihat Riwayat
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>