<x-module.biodiv>
    <x-utils.notif />
    <div class="container">
        <div class="card shadow-sm border-light">
            <div class="card-header bg-primary text-white">
                <h4 class="card-title m-0">Edit Data Observasi</h4>
            </div>
            <div class="card-body">
                <!-- Form to Edit Data -->
                <form action="{{ url('biodiv/survei/' . $survei->id) }}" method="POST">
                    @csrf
                    @method('PUT') <!-- Use PUT method for updates -->

                    <div class="form-group">
                        <label for="bulan">Bulan</label>
                        <input type="month" id="bulan" name="bulan" class="form-control @error('bulan') is-invalid @enderror" value="{{ old('bulan', $survei->bulan) }}">
                        @error('bulan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="taxa">Taxa</label>
                        <input type="text" id="taxa" name="taxa" class="form-control @error('taxa') is-invalid @enderror" value="{{ old('taxa', $survei->taxa) }}">
                        @error('taxa')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="species">Species</label>
                        <input type="text" id="species" name="species" class="form-control @error('species') is-invalid @enderror" value="{{ old('species', $survei->species) }}">
                        @error('species')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="english_name">English Name</label>
                        <input type="text" id="english_name" name="english_name" class="form-control @error('english_name') is-invalid @enderror" value="{{ old('english_name', $survei->english_name) }}">
                        @error('english_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="daftar_merah">IUCN Red List Status</label>
                        <input type="text" id="daftar_merah" name="daftar_merah" class="form-control @error('daftar_merah') is-invalid @enderror" value="{{ old('daftar_merah', $survei->daftar_merah) }}">
                        @error('daftar_merah')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="law">Protected by Indonesia Law</label>
                        <input type="text" id="law" name="law" class="form-control @error('law') is-invalid @enderror" value="{{ old('law', $survei->law) }}">
                        @error('law')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="observation">Observations</label>
                        <textarea id="observation" name="observation" class="form-control @error('observation') is-invalid @enderror" rows="4">{{ old('observation', $survei->observation) }}</textarea>
                        @error('observation')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-end">
                        <a href="{{ url('biodiv/survei') }}" class="btn btn-secondary mr-2">
                            <i class="fas fa-arrow-left"></i> Back
                        </a>
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-save"></i> Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-module.biodiv>
