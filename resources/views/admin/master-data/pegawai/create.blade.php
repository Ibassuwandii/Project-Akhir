<x-module.admin>
    <div class="container mt-10">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white ">{{ __('Tambah Pegawai Baru') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('pegawai.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-row mb-3">
                                <div class="form-group col-md-6">
                                    <label for="nama" class="col-form-label">{{ __('Nama') }}</label>
                                    <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus>
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email" class="col-form-label">{{ __('Email') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
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
                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="password" class="col-form-label">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
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
                                        <option value="" disabled selected>Pilih jabatan</option>
                                        @foreach ($jabatanList as $jabatan)
                                            <option value="{{ $jabatan }}">{{ $jabatan }}</option>
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
                                    <input id="file_foto" type="file" class="form-control-file @error('file_foto') is-invalid @enderror" name="file_foto" required>
                                    @error('file_foto')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="form-group">
                                <label for="departemen">Departemen</label>
                                <select class="form-control" id="departemen" name="departemen" required>
                                    @foreach($departemenList as $departemen)
                                        <option value="{{ $departemen }}">{{ $departemen }}</option>
                                    @endforeach
                                </select>
                            </div> --}}

                            <div class="form-row mb-0">
                                <div class="col-md-12 text-right">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Simpan') }}
                                    </button>
                                    <a href="{{ route('pegawai.index') }}" class="btn btn-secondary ml-2">{{ __('Batal') }}</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.admin>
