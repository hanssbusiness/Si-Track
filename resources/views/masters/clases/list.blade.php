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
                            <a href="#" class="btn btn-primary"><i class="far fa-edit"></i> Tambah Data</a>
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
                                    <td>3</td>
                                    <td class="align-middle">
                                        <div class="progress progress-bar bg-success" data-width="80" data-height="5" data-toggle="tooltip" title="80%">
                                        </div>
                                    </td>
                                    <td><div class="badge badge-success">Aktif</div></td>
                                    <td><a href="#" class="btn btn-icon btn-info"><i class="fas fa-info-circle"></i></a>
                                        <a href="#" class="btn btn-icon btn-warning"><i class="fas fa-exclamation-triangle"></i></a>
                                        <a href="#" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a>
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
@endsection
