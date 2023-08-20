@extends('layouts.admin')

@section('title', 'Student')

@section('sidebar')
    @parent
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Students</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item">Students</div>
        </div>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Students</h4>
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
                                    <th>NISN</th>
                                    <th>Full Name</th>
                                    <th>Class</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>000489568</td>
                                    <td>Intan Scolastika</td>
                                    <td>XII - IPA - 3</td>
                                    <td><div class="badge badge-success">Aktif</div></td>
                                    <td><a href="#" class="btn btn-icon btn-info"><i class="fas fa-info-circle"></i></a>
                                        <a href="#" class="btn btn-icon btn-warning"><i class="fas fa-exclamation-triangle"></i></a>
                                        <a href="#" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
