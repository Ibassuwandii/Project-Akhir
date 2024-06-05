<x-module.admin>
    <div class="container mt-10">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">{{ __('Edit Pegawai') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('pegawai.update', $pegawai->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-row mb-3">
                                <div class="form-group col-md-6">
                                    <label for="nama" class="col-form-label">{{ __('Nama') }}</label>
                                    <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $pegawai->nama }}" required autocomplete="nama" autofocus>
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email" class="col-form-label">{{ __('Email') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $pegawai->email }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row mb-3">
                                <div class="form-group col-md-6">
                                    <label for="username" class="col-form-label">{{ __('Username') }}</label>
                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ $pegawai->username }}" required autocomplete="username">
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="password" class="col-form-label">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="Kosongkan jika tidak ingin mengubah">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row mb-3">
                                <div class="form-group col-md-6">
                                    <label for="jabatan" class="col-form-label">{{ __('Jabatan') }}</label>
                                    <select id="jabatan" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" required>
                                        <option value="" disabled>Pilih jabatan</option>
                                        @foreach ($jabatanList as $jabatan)
                                            <option value="{{ $jabatan }}" {{ $pegawai->jabatan == $jabatan ? 'selected' : '' }}>{{ $jabatan }}</option>
                                        @endforeach
                                    </select>
                                    @error('jabatan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="file_foto" class="col-form-label">{{ __('Foto') }}</label>
                                    <input id="file_foto" type="file" class="form-control-file @error('file_foto') is-invalid @enderror" name="file_foto">
                                    @error('file_foto')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="departemen">Departemen</label>
                                    <select class="form-control" id="departemen" name="departemen" required>
                                        @foreach($departemenList as $departemen)
                                            <option value="{{ $departemen }}" {{ $pegawai->departemen == $departemen ? 'selected' : '' }}>{{ $departemen }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4 d-flex justify-content-end">
                                    <a href="{{ url('admin/master-data/pegawai') }}" class="btn btn-secondary mr-2">
                                        <i class="fas fa-times-circle"></i> Batal
                                    </a>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-save"></i> Simpan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.admin>
