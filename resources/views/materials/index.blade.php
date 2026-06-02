<x-app-layout>
    <x-slot name="header">Daftar Materi</x-slot>

    <div class="card">
        <div class="card-header">
            <i class="fas fa-folder-open mr-2" style="color:var(--pharlap)"></i>Materi Tersedia
        </div>
        <div class="card-body p-0">
            @if($materials->isEmpty())
                <div class="text-center py-5">
                    <i class="fas fa-folder-open" style="font-size:2.5rem;color:var(--rose-fog)"></i>
                    <p class="mt-3" style="color:var(--pharlap);font-size:0.9rem">Belum ada materi tersedia.</p>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Tutor</th>
                                <th>Mata Pelajaran</th>
                                <th>File</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($materials as $i => $material)
                            <tr>
                                <td style="color:var(--pharlap);font-weight:600">{{ $i + 1 }}</td>
                                <td style="font-weight:500">{{ $material->judul }}</td>
                                <td style="color:#888;font-size:0.82rem">{{ $material->deskripsi }}</td>
                                <td>{{ $material->tutor->nama }}</td>
                                <td>{{ $material->tutor->subject->nama_mapel }}</td>
                                <td>
                                    <a href="{{ route('materials.download', $material->id) }}" class="btn btn-primary btn-sm">
                                        <i class="fas fa-download mr-1"></i> Download
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>