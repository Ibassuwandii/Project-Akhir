<x-module.comdev>
    <div class="">
        <div class="card-header bg-cyan text-white">
            <h5 class="card-title">Edit Data Konservasi Mangrove Lokasi SK</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('comdev/site_sk/mangrove/' . $mangrove->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="container">
                    <div class="row">
                        {{-- <div class="col-md-4">
                            <div class="form-group">
                                <label for="semester" class="control-label">Semester </label>
                                <input type="text" name="semester" id="semester" class="form-control" value="{{ $mangrove->semester }}">
                            </div>
                        </div> --}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="bibit_disemai" class="control-label">Disemai</label>
                                <input type="text" name="bibit_disemai" id="bibit_disemai" class="form-control" value="{{ $mangrove->bibit_disemai }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="bibit_hidup" class="control-label">Hidup</label>
                                <input type="text" name="bibit_hidup" id="bibit_hidup" class="form-control" value="{{ $mangrove->bibit_hidup }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="bibit_mati" class="control-label">Mati</label>
                                <input type="text" name="bibit_mati" id="bibit_mati" class="form-control" value="{{ $mangrove->bibit_mati }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="keterangan" class="control-label">Keterangan</label>
                                <input type="text" name="keterangan" id="keterangan" class="form-control" value="{{ $mangrove->keterangan }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tanggal" class="control-label">Tanggal Penanaman</label>
                                <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{ $mangrove->tanggal }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Dokumentasi:</label><br>
                        @if ($mangrove->file_foto)
                            <a href="{{ url('public') }}/{{ $mangrove->file_foto }}" target="_blank">
                                <img src="{{ url('public') }}/{{ $mangrove->file_foto }}" alt="Gambar mangrove"
                                     style="max-width: 400px; max-height: 400px;">
                            </a>
                        @else
                            <p>Tidak ada gambar</p>
                        @endif
                    </div>
                    </div>
                    <div class="col-md-8 offset-md-4 d-flex justify-content-end">
                        <a href="{{ url('comdev/site_sk/mangrove') }}" class="btn btn-secondary mr-2">
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
</x-module.divisi-comdev>
