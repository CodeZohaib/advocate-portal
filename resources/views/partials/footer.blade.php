<!-- /.content-wrapper -->
<footer class="main-footer">
  <strong>
    &copy; 2025&nbsp;
    <a href="#" class="text-decoration-none">Lawyer Case Management System</a>.
  </strong>
  All Rights Reserved.

  <div class="float-right d-none d-sm-inline-block">
    Designed & Developed by <strong>Zohaib Khan</strong> | <b><a href="https://codezohaib.github.io/portfolio/">Porfolio</a></b> 
  </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->




<!-- Modal -->
<div class="modal fade" id="addClientModal" tabindex="-1" role="dialog" aria-labelledby="addClientModal" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title font-weight-semibold" id="addClientModalLabel">
          <i class="bi bi-person-plus mr-2"></i> Add New Client & Case
        </h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!-- Modal Body -->
      <form id="addClientForm" method="POST" action="/project/saveClient.php" enctype="multipart/form-data">
        <div class="modal-body py-4 px-4">

          <!-- Client Info Section -->
          <h6 class="text-primary font-weight-bold mb-3 border-bottom pb-2">
            <i class="bi bi-person-lines-fill mr-1"></i> Client Information
          </h6>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label class="font-weight-semibold">Full Name</label>
              <input type="text" class="form-control" name="full_name" placeholder="Enter full name" required>
            </div>
            <div class="form-group col-md-6">
              <label class="font-weight-semibold">Father Name</label>
              <input type="text" class="form-control" name="father_name" placeholder="Enter father name">
            </div>
            <div class="form-group col-md-6">
              <label class="font-weight-semibold">CNIC</label>
              <input type="text" class="form-control" name="cnic" placeholder="12345-6789012-3">
            </div>
            <div class="form-group col-md-6">
              <label class="font-weight-semibold">Contact No</label>
              <input type="text" class="form-control" name="contact_no" placeholder="03XXXXXXXXX">
            </div>
            <div class="form-group col-12">
              <label class="font-weight-semibold">Address</label>
              <textarea class="form-control" name="address" rows="2" placeholder="Enter full address"></textarea>
            </div>

            <!-- CNIC PDF Upload -->
            <div class="form-group col-md-6">
              <label class="font-weight-semibold">Upload CNIC (PDF only)</label>
              <input type="file" class="form-control-file border rounded p-2" name="cnic_pdf" accept="application/pdf">
              <small class="text-muted">Upload client's CNIC in PDF format (optional)</small>
            </div>
          </div>

          <!-- Divider -->
          <hr class="my-4">

          <!-- Case Info Section -->
          <h6 class="text-primary font-weight-bold mb-3 border-bottom pb-2">
            <i class="bi bi-folder2-open mr-1"></i> Case Details
          </h6>

          <div class="form-row">
            <div class="form-group col-md-4">
              <label class="font-weight-semibold">Case Number</label>
              <input type="text" class="form-control" name="case_number" placeholder="e.g. C-1234/2025">
            </div>
            <div class="form-group col-md-4">
              <label class="font-weight-semibold">On Behalf Of</label>
              <select class="form-control" name="on_behalf">
                <option value="petitioner">Petitioner</option>
                <option value="respondent">Respondent</option>
              </select>
            </div>
            <div class="form-group col-md-4">
              <label class="font-weight-semibold">Section</label>
              <input type="text" class="form-control" name="section" placeholder="e.g. Section 302">
            </div>
            <div class="form-group col-md-6">
              <label class="font-weight-semibold">Judge Name</label>
              <input type="text" class="form-control" name="judge_name" placeholder="Enter judge name">
            </div>
            <div class="form-group col-md-3">
              <label class="font-weight-semibold">Case Status</label>
              <select class="form-control" name="status">
                <option value="open">Open</option>
                <option value="closed">Closed</option>
                <option value="inactive">Inactive</option>
              </select>
            </div>
            <div class="form-group col-md-3">
              <label class="font-weight-semibold">Filed Date</label>
              <input type="date" class="form-control" name="filed_date">
            </div>

            <!-- Case PDF Upload -->
            <div class="form-group col-12">
              <label class="font-weight-semibold">Upload Case Document (PDF only)</label>
              <input type="file" class="form-control-file border rounded p-2" name="case_pdf" accept="application/pdf">
              <small class="text-muted">Attach any relevant case file or document in PDF format (optional)</small>
            </div>
          </div>

        </div>

        <!-- Modal Footer -->
        <div class="modal-footer bg-light">
          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">
            <i class="bi bi-x-circle mr-1"></i> Close
          </button>
          <button type="submit" class="btn btn-primary btn-sm">
            <i class="bi bi-save mr-1"></i> Save Client
          </button>
        </div>
      </form>

    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="viewUserModal" tabindex="-1" role="dialog" aria-labelledby="viewUserModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content border-0 shadow-lg">

      <!-- Header -->
      <div class="modal-header bg-info text-white">
        <h5 class="modal-title font-weight-semibold" id="viewUserModalLabel">
          <i class="bi bi-person-badge mr-2"></i> Client Details
        </h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!-- Body -->
      <div class="modal-body px-4 py-3">
        <!-- Client Info -->
        <h6 class="text-info border-bottom pb-2 mb-3">
          <i class="bi bi-person-lines-fill mr-1"></i> Client Information
        </h6>
        <div class="row mb-3">
          <div class="col-md-6">
            <strong>Full Name:</strong> <span>Ali Khan</span>
          </div>
          <div class="col-md-6">
            <strong>Father Name:</strong> <span>Rehman Khan</span>
          </div>
          <div class="col-md-6">
            <strong>CNIC:</strong> <span>12345-6789012-3</span>
          </div>
          <div class="col-md-6">
            <strong>Contact No:</strong> <span>0300-1234567</span>
          </div>
          <div class="col-6">
            <strong>Address:</strong> <span>Nowshera City, KPK</span>
          </div>
          <div class="col-6">
            <strong>CNIC PDF:</strong>
            <a href="/uploads/cnic_ali_khan.pdf" target="_blank" class="btn btn-outline-primary btn-xs ml-2 py-0 px-2" style="font-size: 12px;">
              <i class="bi bi-file-earmark-pdf mr-1" style="font-size: 13px;"></i> View
            </a>
          </div>
        </div>

        <hr>

        <!-- Case Info -->
        <h6 class="text-info border-bottom pb-2 mb-3">
          <i class="bi bi-folder2-open mr-1"></i> Related Cases
        </h6>

        <div class="table-responsive">
          <table class="table table-bordered table-sm text-center">
            <thead class="bg-light">
              <tr>
                <th>#</th>
                <th>Case Number</th>
                <th>Judge Name</th>
                <th>Status</th>
                <th>Filed Date</th>
                <th>PDF File</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>C-101/2025</td>
                <td>Justice Ahmed</td>
                <td><span class="badge badge-success">Open</span></td>
                <td>2025-03-12</td>
                <td><a href="/uploads/case1.pdf" target="_blank" class="btn btn-outline-primary btn-sm"><i class="bi bi-file-earmark-pdf"></i></a></td>
              </tr>
              <tr>
                <td>2</td>
                <td>C-202/2025</td>
                <td>Justice Khan</td>
                <td><span class="badge badge-danger">Closed</span></td>
                <td>2025-04-20</td>
                <td><a href="/uploads/case2.pdf" target="_blank" class="btn btn-outline-primary btn-sm"><i class="bi bi-file-earmark-pdf"></i></a></td>
              </tr>
              <tr>
                <td>3</td>
                <td>C-303/2025</td>
                <td>Justice Ali</td>
                <td><span class="badge badge-warning text-white">Inactive</span></td>
                <td>2025-06-05</td>
                <td><a href="/uploads/case3.pdf" target="_blank" class="btn btn-outline-primary btn-sm"><i class="bi bi-file-earmark-pdf"></i></a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Footer -->
      <div class="modal-footer bg-light">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">
          <i class="bi bi-x-circle mr-1"></i> Close
        </button>
      </div>

    </div>
  </div>
</div>


<!-- ================= EDIT USER MODAL ================= -->
<div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <!-- Header -->
      <div class="modal-header bg-warning text-white">
        <h5 class="modal-title" id="editUserModalLabel">✏️ Edit User</h5>
        <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
      </div>

      <!-- Body -->
      <div class="modal-body">
        <form id="editUserForm" enctype="multipart/form-data">
          <div class="form-group">
            <label class="font-weight-semibold">Full Name</label>
            <input type="text" class="form-control" name="full_name" value="Ali Khan">
          </div>

          <div class="form-group">
            <label class="font-weight-semibold">Contact No</label>
            <input type="text" class="form-control" name="contact_no" value="0300-1234567">
          </div>

          <div class="form-group">
            <label class="font-weight-semibold">Address</label>
            <input type="text" class="form-control" name="address" value="Nowshera City, KPK">
          </div>

          <!-- CNIC PDF Section -->
          <div class="form-group">
            <label class="font-weight-semibold d-block">CNIC PDF</label>
            
            <!-- View Existing CNIC -->
            <a href="/uploads/cnic_ali_khan.pdf" target="_blank" 
               class="btn btn-outline-primary btn-xs py-0 px-2 mb-2" style="font-size: 12px;">
              <i class="bi bi-file-earmark-pdf mr-1" style="font-size: 13px;"></i> View Current CNIC
            </a>

            <!-- Upload New CNIC -->
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="cnic_pdf" name="cnic_pdf" accept="application/pdf">
              <label class="custom-file-label" for="cnic_pdf">Choose new CNIC PDF (optional)</label>
            </div>
            <small class="form-text text-muted">Upload only PDF file (Max 2MB)</small>
          </div>
        </form>
      </div>

      <!-- Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
        <button type="submit" form="editUserForm" class="btn btn-warning btn-sm">
          <i class="bi bi-save mr-1"></i> Save Changes
        </button>
      </div>
    </div>
  </div>
</div>


<!-- ================= DELETE USER MODAL ================= -->
<div class="modal fade" id="deleteUserModal" tabindex="-1" role="dialog" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="deleteUserModalLabel">🗑️ Confirm Delete</h5>
        <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body text-center">
        <p>Are you sure you want to delete <strong>Ali Khan</strong>?</p>
        <p class="text-muted mb-0">This action cannot be undone.</p>
      </div>
      <div class="modal-footer justify-content-center">
        <button class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
        <button class="btn btn-danger btn-sm">Yes, Delete</button>
      </div>
    </div>
  </div>
</div>



<!-- Add Case Modal -->
<div class="modal fade" id="addCaseModal" tabindex="-1" role="dialog" aria-labelledby="addCaseModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <!-- Header -->
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="addCaseModalLabel">
          <i class="bi bi-folder-plus mr-2"></i> Add New Case for Client
        </h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!-- Body -->
      <form id="addCaseForm" method="POST" action="/project/saveCase.php" enctype="multipart/form-data">
        <div class="modal-body py-4 px-4">

          <!-- Client CNIC -->
          <div class="form-group">
            <label class="font-weight-semibold text-primary">Client CNIC</label>
            <input type="text" name="cnic" class="form-control" placeholder="Enter client CNIC (e.g. 12345-6789012-3)" required>
            <small class="form-text text-muted">Enter valid CNIC to assign case to an existing client.</small>
          </div>

          <hr>

          <!-- Case Details -->
          <h6 class="text-primary font-weight-bold mb-3 border-bottom pb-2">
            <i class="bi bi-folder2-open mr-1"></i> Case Information
          </h6>

          <div class="form-row">
            <div class="form-group col-md-4">
              <label>Case Number</label>
              <input type="text" class="form-control" name="case_number" placeholder="e.g. C-1023/2025" required>
            </div>
            <div class="form-group col-md-4">
              <label>On Behalf Of</label>
              <select class="form-control" name="on_behalf">
                <option value="petitioner">Petitioner</option>
                <option value="respondent">Respondent</option>
              </select>
            </div>
            <div class="form-group col-md-4">
              <label>Section</label>
              <input type="text" class="form-control" name="section" placeholder="e.g. Section 302">
            </div>
            <div class="form-group col-md-6">
              <label>Judge Name</label>
              <input type="text" class="form-control" name="judge_name" placeholder="Enter judge name">
            </div>
            <div class="form-group col-md-3">
              <label>Case Status</label>
              <select class="form-control" name="status">
                <option value="open">Open</option>
                <option value="closed">Closed</option>
                <option value="inactive">Inactive</option>
              </select>
            </div>
            <div class="form-group col-md-3">
              <label>Filed Date</label>
              <input type="date" class="form-control" name="filed_date">
            </div>
          </div>

          <!-- Case PDF Upload -->
          <div class="form-group">
            <label class="font-weight-semibold">Upload Case PDF (optional)</label>
            <input type="file" name="case_file" class="form-control-file" accept="application/pdf">
            <small class="form-text text-muted">Upload any important document related to this case.</small>
          </div>

        </div>

        <!-- Footer -->
        <div class="modal-footer bg-light">
          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">
            <i class="bi bi-x-circle mr-1"></i> Close
          </button>
          <button type="submit" class="btn btn-primary btn-sm">
            <i class="bi bi-save mr-1"></i> Save Case
          </button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Delete Hearing Modal -->
<div class="modal fade" id="deleteHearingModal" tabindex="-1" role="dialog" aria-labelledby="deleteHearingModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title"><i class="bi bi-trash"></i> Delete Hearing</h5>
        <button type="button" class="close text-white" data-dismiss="modal"><span>&times;</span></button>
      </div>

      <div class="modal-body text-center">
        <i class="bi bi-exclamation-triangle text-danger display-4"></i>
        <p class="mt-3 mb-1">Are you sure you want to delete this hearing record?</p>
        <p><strong>Case ID:</strong> 8900 — <strong>Zohaib Khan</strong></p>
      </div>

      <div class="modal-footer bg-light">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
          <i class="bi bi-x-circle"></i> Cancel
        </button>
        <button type="button" class="btn btn-danger">
          <i class="bi bi-trash"></i> Delete
        </button>
      </div>

    </div>
  </div>
</div>





<!-- View Hearing Modal -->
<div class="modal fade" id="viewHearingModal" tabindex="-1" role="dialog" aria-labelledby="viewHearingModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">

      <div class="modal-header bg-info text-white">
        <h5 class="modal-title" id="viewHearingModalLabel">
          <i class="bi bi-eye me-2"></i> View Hearings
        </h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <!-- Hearing List -->
        <table class="table table-bordered table-striped">
          <thead class="table-info">
            <tr>
              <th>#</th>
              <th>Date</th>
              <th>Status</th>
              <th>Judge Remarks</th>
              <th>Document</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <!-- Static example data -->
            <tr>
              <td>1</td>
              <td>2025-10-05</td>
              <td>Pending</td>
              <td>Next hearing scheduled after two weeks.</td>
              <td><a href="/uploads/hearing1.pdf" target="_blank" class="btn btn-sm btn-outline-primary"><i class="bi bi-file-earmark-pdf"></i> View</a></td>
              <td>
                <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#hearingDetailsModal">
                  <i class="bi bi-eye"></i> Details
                </button>
              </td>
            </tr>

            <tr>
              <td>2</td>
              <td>2025-11-01</td>
              <td>Completed</td>
              <td>Case discussed and adjourned to next date.</td>
              <td><a href="/uploads/hearing2.pdf" target="_blank" class="btn btn-sm btn-outline-primary"><i class="bi bi-file-earmark-pdf"></i> View</a></td>
              <td>
                <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#hearingDetailsModal">
                  <i class="bi bi-eye"></i> Details
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
          <i class="bi bi-x-circle"></i> Close
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Hearing Details Modal (nested) -->
<div class="modal fade" id="hearingDetailsModal" tabindex="-1" role="dialog" aria-labelledby="hearingDetailsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="hearingDetailsModalLabel">
          <i class="bi bi-journal-text me-2"></i> Hearing Details
        </h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <p><strong>Date:</strong> 2025-10-05</p>
        <p><strong>Status:</strong> Pending</p>
        <p><strong>Judge Remarks:</strong> The case has been postponed due to absence of one party.</p>
        <p><strong>Uploaded Document:</strong> <a href="/uploads/hearing1.pdf" target="_blank" class="btn btn-outline-primary btn-sm"><i class="bi bi-file-earmark-pdf"></i> Open PDF</a></p>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
          <i class="bi bi-x-circle"></i> Close
        </button>
      </div>
    </div>
  </div>
</div>
