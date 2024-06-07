<x-module.edukasi>
    <x-utils.notif />
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <div class="card-title">
                Tambah Data Visit School
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('edukasi/instagram') }}">
                @csrf
                <div class="form-group">
                    <label for="jenis_postingan">Jenis Postingan</label>
                    <input type="text" name="jenis_postingan" id="jenis_postingan" class="form-control" required>
                    @error('jenis_postingan')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">
                    <label for="jumlah_folower">Jumlah Follower</label>
                    <input type="text" name="jumlah_folower" id="jumlah_folower" class="form-control" required>
                    @error('jumlah_folower')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">
                    <label for="bulan">Bulan</label>
                    <select name="bulan" id="bulan" class="form-control" required>
                        <option value="Jan">Januari</option>
                        <option value="Feb">Februari</option>
                        <option value="Mar">Maret</option>
                        <option value="Apr">April</option>
                        <option value="May">Mei</option>
                        <option value="Jun">Juni</option>
                        <option value="Jul">Juli</option>
                        <option value="Aug">Agustus</option>
                        <option value="Sep">September</option>
                        <option value="Oct">Oktober</option>
                        <option value="Nov">November</option>
                        <option value="Dec">Desember</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="penayangan">Penayangan</label>
                    <input type="text" name="penayangan" id="penayangan" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="like">Like</label>
                    <input type="text" name="like" id="like" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="coment">Coment</label>
                    <input type="text" name="coment" id="coment" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="share">Share</label>
                    <input type="text" name="share" id="share" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Simpan
                </button>
                <a href="{{ url('edukasi/instagram') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </form>
        </div>
    </div>
</x-module.edukasi>
