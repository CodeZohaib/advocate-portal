@extends('layouts.master')

@section('title', 'Closed Cases')

@section('content')

<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Close Cases</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Close Cases</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<!-- Main content -->
<div class="app-content">
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12 connectedSortable">
                    <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                                <h3 class="card-title mb-0 text-danger">Close Cases</h3>

                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                    </div>
                                </div>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                <th>ID</th>
                                <th>Client Name</th>
                                <th>Father Name</th>
                                <th>Behalf of</th>
                                <th>Case No</th>
                                <th>Next Hearing</th>
                                <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Afaq Ali</td>
                                    <td>Zohaib Khan</td>
                                    <td>Respondent</td>
                                    <td>8900</td>
                                    <th>10/01/2025</th>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-success me-1" title="Add">
                                            <i class="bi bi-plus-circle"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-info me-1" title="View">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-warning me-1" title="Edit">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-danger" title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                        
                                    </td>

                                </tr>

                                <tr>
                                    <td>1</td>
                                    <td>Afaq Ali</td>
                                    <td>Zohaib Khan</td>
                                    <td>Respondent</td>
                                    <td>8900</td>
                                    <th>10/01/2025</th>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-success me-1" title="Add">
                                            <i class="bi bi-plus-circle"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-info me-1" title="View">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-warning me-1" title="Edit">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-danger" title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                        
                                    </td>
                                </tr>

                                <tr>
                                    <td>1</td>
                                    <td>Afaq Ali</td>
                                    <td>Zohaib Khan</td>
                                    <td>Respondent</td>
                                    <td>8900</td>
                                    <th>10/01/2025</th>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-success me-1" title="Add">
                                            <i class="bi bi-plus-circle"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-info me-1" title="View">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-warning me-1" title="Edit">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-danger me-1" title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                        
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    </div>
            </div>
    </div>
</div>
<!-- /.content -->

@endsection