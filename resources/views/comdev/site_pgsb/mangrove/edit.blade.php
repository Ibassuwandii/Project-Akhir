<x-module.comdev>
    <x-template.button.back-button url="comdev/site_pgsb/mangrove" />
    <div class="card mt-3">
         <div class="card-header bg-cyan text-white">
            <h5 class="card-title">Edit Data Mangrove Lokasi SK</h5>
         </div>
         <div class="card-body">
            <form action="{{url('comdev/site_pgsb/mangrove', $mangrove->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="semester">Semester:</label>
                            <input type="text" name="semester" value="{{ $mangrove->semester }}" class="form-control" id="semester">
                        </div>
                        <div class="form-group">
                            <label for="bibit_disemai">Disemai:</label>
                            <input type="text" name="bibit_disemai" value="{{ $mangrove->bibit_disemai }}" class="form-control" id="bibit_disemai">
                        </div>
                        <div class="form-group">
                            <label for="bibit_hidup">Hidup:</label>
                            <input type="text" name="bibit_hidup" value="{{ $mangrove->bibit_hidup }}" class="form-control" id="bibit_hidup">
                        </div>
                        <div class="form-group">
                            <label for="bibit_mati">Mati:</label>
                            <input type="text" name="bibit_mati" value="{{ $mangrove->bibit_mati }}" class="form-control" id="bibit_mati">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tanggal">Tanggal:</label>
                            <input type="date" name="tanggal" value="{{ $mangrove->tanggal }}" class="form-control" id="tanggal">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan:</label>
                            <input type="text" name="keterangan" value="{{ $mangrove->keterangan }}" class="form-control" id="keterangan">
                        </div>
                        <div class="form-group">
                            <label for="file_foto">Foto:</label>
                            <input type="file" name="file_foto" class="form-control-file" id="file_foto">
                        </div>
                    </div>
                </div>
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                </div>
            </form>
         </div>
    </div>
</x-module.comdev>
