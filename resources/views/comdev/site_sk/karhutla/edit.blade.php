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
                            <input type="text" name="jangkauan_patroli" value="{{ $karhutla->jangkauan_patroli }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="font-weight-bold">Tanggal Patroli:</label>
                            <input type="date" name="tanggal_patroli" value="{{ $karhutla->tanggal_patroli }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="font-weight-bold">Titik Koordinat:</label>
                            <input type="text" name="titik_koordinat" value="{{ $karhutla->titik_koordinat }}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="font-weight-bold">Luas Lahan:</label>
                            <input type="text" name="luas_lahan" value="{{ $karhutla->luas_lahan }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="font-weight-bold">Pemilik Lahan:</label>
                            <input type="text" name="pemilik_lahan" value="{{ $karhutla->pemilik_lahan }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="font-weight-bold">Jumlah Patroli:</label>
                            <input type="text" name="jumlah_patroli" value="{{ $karhutla->jumlah_patroli }}" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="font-weight-bold">Sosialisasi:</label>
                            <input type="text" name="sosialisasi" value="{{ $karhutla->sosialisasi }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="font-weight-bold" for="file_foto">Dokumentasi:</label>
                            <input type="file" name="file_foto" class="form-control-file" id="file_foto">
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

