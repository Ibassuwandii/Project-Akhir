<x-module.admin>
    <div class="card">
         <div class="card-header">

            <div class="card-title">
                Edit Data module
            </div>
         </div>
         <div class="card-body">
            <form action="{{url('admin/master-data/module', $module->id)}}" method="post">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">App</label>
                            <input type="text" name="app" value="{{ $module->app }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Tag</label>
                        <input type="text" name="tag" value="{{ $module->tag }}" class="form-control">
                    </div>
                </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Name</label>
                                <input type="text" name="name" value="{{ $module->name }}" class="form-control">
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Title</label>
                                <input type="text" name="title" value="{{ $module->title }}" class="form-control">
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Sub Title</label>
                                <input type="text" name="subtitle" value="{{ $module->subtitle }}" class="form-control">
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Color</label>
                                <input type="text" name="color" value="{{ $module->color }}" class="form-control">
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Menu</label>
                                <input type="text" name="menu" value="{{ $module->menu }}" class="form-control">
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Url</label>
                                <input type="text" name="url" value="{{ $module->url }}" class="form-control">
                            </div>
                         </div>

                    {{-- <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                    </div> --}}
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4 d-flex justify-content-end">
                        <a href="{{ url('admin/master-data/module') }}" class="btn btn-secondary mr-2">
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
</x-module.admin>
