<x-module.comdev>
    <x-template.button.back-button url="comdev/site_sk/karhutla" />
    <div class="card mt-2">
        <div class="card-header bg-cyan text-white">
            <h5 class="card-title">Edit Data Patroli Karhutla Lokasi SK</h5>
        </div>
        <div class="card-body">
            <form action="{{url('comdev/site_sk/karhutla', $karhutla->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="font-weight-bold">Jangkauan Patroli:</label>
                            <input type="text" name="jangkauan_patroli" value="{{ old('jangkauan_patroli', $karhutla->jangkauan_patroli) }}" class="form-control @error('jangkauan_patroli') is-invalid @enderror">
                            @error('jangkauan_patroli')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="font-weight-bold">Tanggal Patroli:</label>
                            <input type="date" name="tanggal_patroli" value="{{ old('tanggal_patroli', $karhutla->tanggal_patroli) }}" class="form-control @error('tanggal_patroli') is-invalid @enderror">
                            @error('tanggal_patroli')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="font-weight-bold">Titik Koordinat:</label>
                            <input type="text" name="titik_koordinat" value="{{ old('titik_koordinat', $karhutla->titik_koordinat) }}" class="form-control @error('titik_koordinat') is-invalid @enderror">
                            @error('titik_koordinat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="font-weight-bold">Luas Lahan:</label>
                            <input type="text" name="luas_lahan" value="{{ old('luas_lahan', $karhutla->luas_lahan) }}" class="form-control @error('luas_lahan') is-invalid @enderror">
                            @error('luas_lahan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="font-weight-bold">Pemilik Lahan:</label>
                            <input type="text" name="pemilik_lahan" value="{{ old('pemilik_lahan', $karhutla->pemilik_lahan) }}" class="form-control @error('pemilik_lahan') is-invalid @enderror">
                            @error('pemilik_lahan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="font-weight-bold">Jumlah Patroli:</label>
                            <input type="text" name="jumlah_patroli" value="{{ old('jumlah_patroli', $karhutla->jumlah_patroli) }}" class="form-control @error('jumlah_patroli') is-invalid @enderror">
                            @error('jumlah_patroli')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="font-weight-bold">Sosialisasi:</label>
                            <input type="text" name="sosialisasi" value="{{ old('sosialisasi', $karhutla->sosialisasi) }}" class="form-control @error('sosialisasi') is-invalid @enderror">
                            @error('sosialisasi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-right">
                        <button class="btn btn-primary">
                            <i class="fas fa-save"></i> Simpan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-module.comdev>
