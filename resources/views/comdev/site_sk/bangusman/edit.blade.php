<x-module.comdev>
    <div class="card mt-2">
         <div class="card-header bg-cyan text-white">
            <h5 class="card-title">Edit Ayo Data Bangusman Lokasi SK</h5>
         </div>
         <div class="card-body">
            <form action="{{url('comdev/site_sk/bangusman', $bangusman->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="font-weight-bold">Nama KUB:</label>
                            <input type="text" name="nama_kub" value="{{ $bangusman->nama_kub }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="font-weight-bold">Nama Penerima Manfaat:</label>
                            <input type="text" name="nama_penerima" value="{{ $bangusman->nama_penerima }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="font-weight-bold">Jumlah Investasi:</label>
                            <input type="text" name="jumlah_investasi" value="{{ $bangusman->jumlah_investasi }}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="font-weight-bold">Komuditas:</label>
                            <input type="text" name="komuditas" value="{{ $bangusman->komuditas }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="font-weight-bold">Masa Pengembalian hasil:</label>
                            <input type="text" name="masa_pengembalian" value="{{ $bangusman->masa_pengembalian }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="font-weight-bold">Tanggal Investasi:</label>
                            <input type="date" name="tanggal_investasi" value="{{ $bangusman->tanggal_investasi }}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4 d-flex justify-content-end">
                        <a href="{{ url('comdev/site_sk/bangusman') }}" class="btn btn-secondary mr-2">
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
</x-module.comdev>

