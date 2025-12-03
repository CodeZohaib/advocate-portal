@extends('layouts.master')

@section('title', 'Active Clients')

@section('content')
  <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Active Client</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Active Client</li>
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
                                <h3 class="card-title mb-0 text-primary">Active Client</h3> &nbsp;&nbsp;&nbsp;
                               
                                <div class="card-tools">
                                  
                                    <div class="input-group input-group-sm" style="width: 300px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                        </button>
                                    </div>&nbsp;&nbsp;&nbsp;&nbsp;
                                    
                                      <!-- Bootstrap 4 correct syntax -->
                                      <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addClientModal">
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
                                        <th>Name</th>
                                        <th>Father Name</th>
                                        <th>CNIC</th>
                                        <th>Mobile No</th>
                                        <th>Total Cases</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>John Doe</td>
                                        <td>Zohaib Khan</td>
                                        <td>17201-989878-9</td>
                                        <td>03139943227</td>
                                        <td><span class="badge bg-primary">3</span></td>
                                        <td>
                                          <a href="#viewUserModal" class="btn btn-info btn-sm viewUserBtn" data-id="1" data-toggle="modal" data-target="#viewUserModal">
                                              <i class="bi bi-eye"></i>
                                          </a>
                                          <a href="#editUserModal" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editUserModal">
                                            <i class="bi bi-pencil-square"></i>
                                          </a>
                                          <a href="#deleteUserModal" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteUserModal">
                                            <i class="bi bi-trash"></i>
                                          </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>John Doe</td>
                                        <td>Zohaib Khan</td>
                                        <td>17201-989878-9</td>
                                        <td>03139943227</td>
                                        <td><span class="badge bg-primary">6</span></td>
                                        <td>
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
                                        <td>3</td>
                                        <td>John Doe</td>
                                        <td>Zohaib Khan</td>
                                        <td>17201-989878-9</td>
                                        <td>03139943227</td>
                                        <td><span class="badge bg-danger">0</span></td>
                                        <td>
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