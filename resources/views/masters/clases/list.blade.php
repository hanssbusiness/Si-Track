@extends('layouts.admin')

@section('title', 'Clases')

@section('sidebar')
    @parent
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Clases</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item">Clases</div>
        </div>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Kelas</h4>
                        <div class="card-header-form">
                            <a href="#" class="btn btn-info"><i class="fa fa-light fa-file-import"></i> Import Data</a>
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addData"><i class="far fa-edit"></i> Tambah Data</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th> # </th>
                                    <th>Class Code</th>
                                    <th>Class Name</th>
                                    <th>Capacity</th>
                                    <th>Students</th>
                                    <th>Percentage</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($kelas as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->code}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->capacity}}</td>
                                    <td>-</td>
                                    <td class="align-middle">
                                        <div class="progress progress-bar bg-success" data-width="80" data-height="5" data-toggle="tooltip" title="80%">
                                        </div>
                                    </td>
                                    <td><div class="badge badge-success">Aktif</div></td>
                                    <td><a href="#" class="btn btn-icon btn-info" data-toggle="modal" data-target="#info-{{$item->uuid}}"><i class="fas fa-info-circle"></i></a>
                                        <a href="#" class="btn btn-icon btn-warning"><i class="fas fa-exclamation-triangle"></i></a>
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('clases.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i class="fas fa-times"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" tabindex="-1" role="dialog" id="addData">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">Add Data Class</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('clases.store')}}" method="POST">
                    @csrf
                <div class="form-group">
                    <label>Class Class</label>
                    <input type="text" name="code" class="form-control" placeholder="Input Class Code">
                    <label>Class Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Input Class Name">
                    <label>Class Capacity</label>
                    <input type="number" name="capacity" class="form-control" placeholder="Input Class Capacity">
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
            </div>
        </div>
        </div>
</div>
@foreach ($kelas as $info)
<div class="modal fade" tabindex="-1" role="dialog" id="info-{{$info->uuid}}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">Kelas {{$info->name}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <p>Class Code : {{$info->code}}</p>
                <p>Class Name : {{$info->name}}</p>
                <p>Class Capacity : {{$info->capacity}}</p>
            </div>
            <div class="modal-footer bg-whitesmoke br">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </form>
            </div>
        </div>
        </div>
</div>
@endforeach
@endsection
