<x-app-layout>
    <x-slot name="header">Profil</x-slot>

    <div class="row justify-content-center">
        <div class="col-md-8">

            {{-- Profile Info --}}
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-user-circle mr-2" style="color:var(--pharlap)"></i> Informasi Profil
                </div>
                <div class="card-body p-4">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            {{-- Update Password --}}
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-lock mr-2" style="color:var(--pharlap)"></i> Ubah Password
                </div>
                <div class="card-body p-4">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            {{-- Delete Account --}}
            <div class="card mb-4" style="border-left: 4px solid #e05560 !important;">
                <div class="card-header" style="color:#c0404a">
                    <i class="fas fa-trash mr-2"></i> Hapus Akun
                </div>
                <div class="card-body p-4">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>

        </div>
    </div>
</x-app-layout>