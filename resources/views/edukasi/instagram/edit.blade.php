<x-module.edukasi>
    <x-utils.notif />
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <div class="card-title">
                Edit Data Visit School
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('edukasi/instagram/' . $instagram->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="jenis_postingan">Jenis Postingan</label>
                    <input type="text" name="jenis_postingan" id="jenis_postingan" class="form-control" value="{{ $instagram->jenis_postingan }}" required>
                    @error('jenis_postingan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jumlah_folower">Jumlah Follower</label>
                    <input type="text" name="jumlah_folower" id="jumlah_folower" class="form-control" value="{{ $instagram->jumlah_folower }}" required>
                    @error('jumlah_folower')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="bulan">Bulan</label>
                    <select name="bulan" id="bulan" class="form-control" required>
                        <option value="Jan" {{ $instagram->bulan == 'Jan' ? 'selected' : '' }}>Januari</option>
                        <option value="Feb" {{ $instagram->bulan == 'Feb' ? 'selected' : '' }}>Februari</option>
                        <option value="Mar" {{ $instagram->bulan == 'Mar' ? 'selected' : '' }}>Maret</option>
                        <option value="Apr" {{ $instagram->bulan == 'Apr' ? 'selected' : '' }}>April</option>
                        <option value="May" {{ $instagram->bulan == 'May' ? 'selected' : '' }}>Mei</option>
                        <option value="Jun" {{ $instagram->bulan == 'Jun' ? 'selected' : '' }}>Juni</option>
                        <option value="Jul" {{ $instagram->bulan == 'Jul' ? 'selected' : '' }}>Juli</option>
                        <option value="Aug" {{ $instagram->bulan == 'Aug' ? 'selected' : '' }}>Agustus</option>
                        <option value="Sep" {{ $instagram->bulan == 'Sep' ? 'selected' : '' }}>September</option>
                        <option value="Oct" {{ $instagram->bulan == 'Oct' ? 'selected' : '' }}>Oktober</option>
                        <option value="Nov" {{ $instagram->bulan == 'Nov' ? 'selected' : '' }}>November</option>
                        <option value="Desember" {{ $instagram->bulan == 'Desember' ? 'selected' : '' }}>Desember</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="penayangan">Penayangan</label>
                    <input type="text" name="penayangan" id="penayangan" class="form-control" value="{{ $instagram->penayangan }}" required>
                </div>
                <div class="form-group">
                    <label for="like">Like</label>
                    <input type="text" name="like" id="like" class="form-control" value="{{ $instagram->like }}" required>
                </div>
                <div class="form-group">
                    <label for="coment">Coment</label>
                    <input type="text" name="coment" id="coment" class="form-control" value="{{ $instagram->coment }}" required>
                </div>
                <div class="form-group">
                    <label for="share">Share</label>
                    <input type="text" name="share" id="share" class="form-control" value="{{ $instagram->share }}" required>
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
