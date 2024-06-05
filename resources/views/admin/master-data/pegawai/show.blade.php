<x-module.admin>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white text-center">
                        <h4>{{ __('Detail Pegawai') }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- Left Column -->
                            <div class="col-md-6">
                                <!-- Nama -->
                                <div class="row mb-3 align-items-center">
                                    <div class="col-md-4 text-md-right font-weight-bold">{{ __('Nama') }}</div>
                                    <div class="col-md-8">{{ $pegawai->nama }}</div>
                                </div>

                                <!-- Email -->
                                <div class="row mb-3 align-items-center">
                                    <div class="col-md-4 text-md-right font-weight-bold">{{ __('Email') }}</div>
                                    <div class="col-md-8">{{ $pegawai->email }}</div>
                                </div>

                                <!-- Username -->
                                <div class="row mb-3 align-items-center">
                                    <div class="col-md-4 text-md-right font-weight-bold">{{ __('Username') }}</div>
                                    <div class="col-md-8">{{ $pegawai->username }}</div>
                                </div>
                            </div>

                            <!-- Right Column -->
                            <div class="col-md-6">
                                <!-- Posisi -->
                                <div class="row mb-3 align-items-center">
                                    <div class="col-md-4 text-md-right font-weight-bold">{{ __('Posisi') }}</div>
                                    <div class="col-md-8">{{ $pegawai->posisi }}</div>
                                </div>

                                <!-- Dokumentasi Foto -->
                                <div class="row mb-3 align-items-center">
                                    <div class="col-md-4 text-md-right font-weight-bold">{{ __('Dokumentasi') }}</div>
                                    <div class="col-md-8">
                                        @if(is_object($pegawai) && $pegawai->file_foto)
                                            <a href="{{ asset('storage/app/' . $pegawai->file_foto) }}" target="_blank" class="btn btn-info">{{ __('Lihat Foto') }}</a>
                                        @else
                                            <p>{{ __('Tidak ada file Foto terlampir.') }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Kembali Button -->
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <a href="{{ route('pegawai.index') }}" class="btn btn-secondary">{{ __('Kembali') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.admin>
