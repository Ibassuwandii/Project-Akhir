<x-module.admin>
    <div class="container mt-10">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">{{ __('Detail Pegawai') }}</div>

                    <div class="card-body">
                        <div class="form-row mb-3">
                            <div class="form-group col-md-6">
                                <label for="nama" class="col-form-label">{{ __('Nama') }}</label>
                                <input id="nama" type="text" class="form-control" name="nama" value="{{ $pegawai->nama }}" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email" class="col-form-label">{{ __('Email') }}</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ $pegawai->email }}" readonly>
                            </div>
                        </div>

                        <div class="form-row mb-3">
                            <div class="form-group col-md-6">
                                <label for="username" class="col-form-label">{{ __('Username') }}</label>
                                <input id="username" type="text" class="form-control" name="username" value="{{ $pegawai->username }}" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="jabatan" class="col-form-label">{{ __('Jabatan') }}</label>
                                <input id="jabatan" type="text" class="form-control" name="jabatan" value="{{ $pegawai->jabatan }}" readonly>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Foto Pegawai</label><br>
                                @if ($pegawai->file_foto)
                                    <a href="{{ url('public') }}/{{ $pegawai->file_foto }}" target="_blank">
                                        <img src="{{ url('public') }}/{{ $pegawai->file_foto }}" alt="Gambar Produksi Tebu"
                                             style="max-width: 400px; max-height: 400px;">
                                    </a>
                                @else
                                    <p>Tidak ada gambar</p>
                                @endif
                            </div>
                        </div>

                        <div class="form-row mb-0">
                            <div class="col-md-12 text-right">
                                <a href="{{ route('pegawai.index') }}" class="btn btn-secondary ml-2">{{ __('Kembali') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.admin>
