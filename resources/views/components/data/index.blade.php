<div class="card shadow-lg">
    <div class="row">
        <div class="col">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white">
                    <div class="card-title">
                      {{$title}}
                    </div>
                    <div class="float-right">
                        <a href="{{$url}}" class="btn btn-success">
                            <i class="fas fa-plus-circle"></i> Tambah Data
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                            {{$slot}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
