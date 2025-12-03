@extends('layouts.master')

@section('title', 'Payment Invoice')

@section('content')

 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Payment Invoice</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Invoice</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
        <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="callout callout-info">
              <h5><i class="fas fa-info"></i> Note:</h5>
              This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
            </div>


               <!-- Main content -->
                <div class="invoice p-3 mb-3">
                <!-- title row -->
                <div class="row">
                    <div class="col-12">
                    <h4>
                        <i class="fas fa-scale-balanced"></i> Lawyer Case Management System
                        <small class="float-right">Date: 11/10/2025</small>
                    </h4>
                    </div>
                </div>
                <!-- info row -->
                <div class="row invoice-info">
                    <div class="col-sm-4 invoice-col">
                    From
                    <address>
                        <strong>Zohaib Khan (Advocate)</strong><br>
                        Paradise City Chambers<br>
                        Nowshera, KPK, Pakistan<br>
                        Phone: +92 336 9403961<br>
                        Email: info@lawyerportal.com
                    </address>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 invoice-col">
                    To
                    <address>
                        <strong>Ahmad Khan</strong><br>
                        Gulberg Town, Peshawar<br>
                        Phone: +92 312 4567890<br>
                        Email: ahmad.khan@example.com
                    </address>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 invoice-col">
                    <b>Receipt #000123</b><br><br>
                    <b>Case ID:</b> LCM-245<br>
                    <b>Case Title:</b> Property Dispute<br>
                    <b>Next Hearing:</b> 22/10/2025
                    </div>
                </div>
                <!-- /.row -->

                <!-- Payment Table -->
                <div class="row">
                    <div class="col-12 table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>Amount (PKR)</th>
                            <th>Payment Method</th>
                            <th>Remarks</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>2025-09-20</td>
                            <td>5,000</td>
                            <td>Cash</td>
                            <td>Initial case filing payment</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>2025-10-05</td>
                            <td>3,000</td>
                            <td>Bank Transfer</td>
                            <td>Paid after hearing</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>2025-10-10</td>
                            <td>2,000</td>
                            <td>Cash</td>
                            <td>Monthly installment</td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>

                <!-- Totals -->
                <div class="row">
                    <div class="col-6">
                    <p class="lead">Case Payment Summary:</p>
                    <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                        This receipt confirms that payments listed above were received by Advocate <strong>Zohaib Khan</strong> from the client as part of the agreed case fee. Remaining balance must be cleared before final judgment or case closure.
                    </p>
                    </div>
                    <div class="col-6">
                    <p class="lead">Amount Details</p>
                    <div class="table-responsive">
                        <table class="table">
                        <tr>
                            <th style="width:50%">Total Case Fee:</th>
                            <td>30,000 PKR</td>
                        </tr>
                        <tr>
                            <th>Total Paid:</th>
                            <td>10,000 PKR</td>
                        </tr>
                        <tr>
                            <th>Remaining Balance:</th>
                            <td><strong>20,000 PKR</strong></td>
                        </tr>
                        </table>
                    </div>
                    </div>
                </div>

               <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="{{ route('payment.invoicePrint') }}" rel="noopener" target="_blank"type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Print PDF
                  </a>
                </div>
              </div>
                </div>
                <!-- /.invoice -->

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection