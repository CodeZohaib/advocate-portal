@extends('layouts.master')

@section('title', 'InActive Clients')

@section('content')

 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Client Payment</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Payment</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
      <div class="app-content">
            <div class="row">
                <!-- Start col -->
                 <div class="col-lg-12 connectedSortable">
                         <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                <h3 class="card-title mb-0 text-primary">All Payment</h3>

                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 300px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                        </button>
                                    </div>

                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <!-- Add new button -->
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-lg">
                                      <i class="bi bi-plus-circle me-1"></i> Add New
                                    </button>
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
                                        <th>Case No</th>
                                        <th>Payment</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Zohaib Khan</td>
                                        <td>1211</td>
                                        <td>3</td>
                                        <td>31-04-2025</td>
                                        <td>
                                        <a href="#" class="btn btn-sm btn-info me-1" title="View">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-danger" title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                         <a href="{{ route('payment.invoice') }}" class="btn btn-sm btn-secondary" title="Print">
                                                    <i class="bi bi-printer"></i>
                                                </a>
                                        </td>
                                        
                                    </tr>

                                   <tr>
                                        <td>2</td>
                                        <td>Zohaib Khan</td>
                                        <td>1211</td>
                                        <td>6000</td>
                                        <td>31-04-2025</td>
                                        <td>
                                        <a href="#" class="btn btn-sm btn-info me-1" title="View">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-danger" title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </a>

                                         <a href="{{ route('payment.invoice') }}" class="btn btn-sm btn-secondary" title="Print">
                                              <i class="bi bi-printer"></i>
                                          </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Zohaib Khan</td>
                                        <td>1211</td>
                                        <td>3800</td>
                                        <td>31-04-2025</td>
                                        <td>
                                        <a href="#" class="btn btn-sm btn-info me-1" title="View">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-danger" title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                         <a href="{{ route('payment.invoice') }}" class="btn btn-sm btn-secondary" title="Print">
                                              <i class="bi bi-printer"></i>
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