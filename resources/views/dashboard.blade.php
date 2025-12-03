@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')

   <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="app-content">
                <!--begin::Container-->
                <div class="container-fluid">
                    <!--begin::Row-->
                    <!-- Add Font Awesome (for icons like fa-users, fa-folder, etc.) -->
                  <div class="row">
                    <!-- Total Active Clients -->
                    <div class="col-lg-3 col-6">
                      <div class="small-box bg-success">
                        <div class="inner">
                          <h3>85</h3>
                          <p>Total Active Clients</p>
                        </div>
                        <div class="icon">
                          <i class="fa-solid fa-users"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                          More info <i class="fa-solid fa-arrow-circle-right"></i>
                        </a>
                      </div>
                    </div>

                    <!-- Total Active Cases -->
                    <div class="col-lg-3 col-6">
                      <div class="small-box bg-info">
                        <div class="inner">
                          <h3>150</h3>
                          <p>Total Active Cases</p>
                        </div>
                        <div class="icon">
                          <i class="fa-solid fa-folder-open"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                          More info <i class="fa-solid fa-arrow-circle-right"></i>
                        </a>
                      </div>
                    </div>

                    <!-- Closed Cases (This Month) -->
                    <div class="col-lg-3 col-6">
                      <div class="small-box bg-danger">
                        <div class="inner">
                          <h3>12</h3>
                          <p>Closed Cases (This Month)</p>
                        </div>
                        <div class="icon">
                          <i class="fa-solid fa-folder-xmark"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                          More info <i class="fa-solid fa-arrow-circle-right"></i>
                        </a>
                      </div>
                    </div>

                    <!-- Payments (This Month) -->
                    <div class="col-lg-3 col-6">
                      <div class="small-box bg-warning">
                        <div class="inner">
                          <h3>75,000</h3>
                          <p>Payments (This Month)</p>
                        </div>
                        <div class="icon">
                          <i class="fa-solid fa-credit-card"></i>
                        </div>
                        <a href="#" class="small-box-footer text-dark">
                          More info <i class="fa-solid fa-arrow-circle-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row">
                    <!-- Start col -->
                    <div class="col-lg-6 connectedSortable">
                        <div class="card mb-4">
                            <div class="card-header bg-success">
                                <h3 class="card-title">5 Latest Clients</h3>
                            </div>
                            <table class="table table-bordered card-body">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Name</th>
                                        <th>CNIC</th>
                                        <th>Mobile No</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Zohaib Khan</td>
                                        <td>17201-6098766-2</td>
                                        <td>03139943227</td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Zohaib Khan</td>
                                        <td>17201-6098766-2</td>
                                        <td>03139943227</td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Zohaib Khan</td>
                                        <td>17201-6098766-2</td>
                                        <td>03139943227</td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>Zohaib Khan</td>
                                        <td>17201-6098766-2</td>
                                        <td>03139943227</td>
                                    </tr>
                                    <tr>
                                        <td>5.</td>
                                        <td>Zohaib Khan</td>
                                        <td>17201-6098766-2</td>
                                        <td>03139943227</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card -->

                        <div class="mb-4">
                            <div class="card">
                                <div class="card-header bg-danger">
                                    <h3 class="card-title"></h3>5 Latest Close Cases
                                </div>
                                <table class="table table-bordered card-body">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Client name</th>
                                            <th>Court name</th>
                                            <th>Case Type</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Zohaib Khan</td>
                                            <td>Sindh High Court</td>
                                            <td>Family</td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Rizwan Ali</td>
                                            <td>Lahore High Court</td>
                                            <td>Civil</td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Zohaib Khan</td>
                                            <td>Sindh High Court</td>
                                            <td>Family</td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Rizwan Ali</td>
                                            <td>Lahore High Court</td>
                                            <td>Civil</td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Zohaib Khan</td>
                                            <td>Sindh High Court</td>
                                            <td>Family</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <!-- /.Start col -->

                    <!-- Start col -->
                    <div class="col-lg-6 connectedSortable">
                        <div class="card mb-4">
                            <div class="card-header bg-primary">
                                <h3 class="card-title"></h3>5 Latest New Cases
                            </div>
                            <table class="table table-bordered card-body">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Client name</th>
                                        <th>Court name</th>
                                        <th>Case Type</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Zohaib Khan</td>
                                        <td>Sindh High Court</td>
                                        <td>Family</td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Rizwan Ali</td>
                                        <td>Lahore High Court</td>
                                        <td>Civil</td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Zohaib Khan</td>
                                        <td>Sindh High Court</td>
                                        <td>Family</td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>Rizwan Ali</td>
                                        <td>Lahore High Court</td>
                                        <td>Civil</td>
                                    </tr>
                                    <tr>
                                        <td>5.</td>
                                        <td>Zohaib Khan</td>
                                        <td>Sindh High Court</td>
                                        <td>Family</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="mb-4">
                            <div class="card">
                                <div class="card-header bg-warning">
                                    <h3 class="card-title"></h3>5 Latest Payments
                                </div>
                                <table class="table table-bordered card-body">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Client name</th>
                                            <th>Case No</th>
                                            <th>Payment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Zohaib Khan</td>
                                            <td>2322</td>
                                            <td>3000</td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Rizwan Ali</td>
                                            <td>8474</td>
                                            <td>8700</td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Zohaib Khan</td>
                                            <td>3434</td>
                                            <td>4000</td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Rizwan Ali</td>
                                            <td>9878</td>
                                            <td>15000</td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Zohaib Khan</td>
                                            <td>4637</td>
                                            <td>10000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.Start col -->


                </div>
                <!-- /.row (main row) -->
            </div>
    </section>

@endsection