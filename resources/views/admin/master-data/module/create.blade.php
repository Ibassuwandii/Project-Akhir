<x-module.admin>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Tambah Data Module
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/master-data/module') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="app" class="control-label">App</label>
                            <input type="text" name="app" class="form-control" value="{{ old('app') }}">
                            @error('app')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tag" class="control-label">Tag</label>
                            <input type="text" name="tag" class="form-control" value="{{ old('tag') }}">
                            @error('tag')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name" class="control-label">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title" class="control-label">Title</label>
                            <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="subtitle" class="control-label">Sub Title</label>
                            <input type="text" name="subtitle" class="form-control" value="{{ old('subtitle') }}">
                            @error('subtitle')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="color" class="control-label">Color</label>
                            <input type="text" name="color" class="form-control" value="{{ old('color') }}">
                            @error('color')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="menu" class="control-label">Menu</label>
                            <input type="text" name="menu" class="form-control" value="{{ old('menu') }}">
                            @error('menu')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="url" class="control-label">Url</label>
                            <input type="text" name="url" class="form-control" value="{{ old('url') }}">
                            @error('url')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-row mb-0">
                    <div class="col-md-12 text-right">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Simpan') }}
                        </button>
                        <a href="{{ route('module.index') }}" class="btn btn-secondary ml-2">{{ __('Batal') }}</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-module.admin>
