<?php include "common/header.php";?>

<div class="container">
  <div class="admin-content">
    <div class="card mb-4">
      <div class="card-header">
        <h2 class="d-inline text-danger">Attendance Report</h2>
      </div>
      <div class="card-body position-relative">
        <!-- <form class="yourform" id="attendance-report" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" autocomplete="on"> -->
          <div class="row">
            <div class="col-md-6 text-center">
              <div class="form-group">
                <a href="member-att-status.php">
                  <h3 class="text-danger">Member Attendance Report</h3>
                </a>
                <!-- <input type="date" class="form-control start_date" name="start_date" value="" required> -->
              </div>
            </div>
            <div class="col-md-6 text-center">
              <div class="form-group">
                <a href="staff-att-status.php">
                  <h3 class="text-danger">Staff-Member Attendance Report</h3>
                </a>
                <!-- <input type="date" class="form-control endd_date" name="endd_date" value="" required> -->
              </div>
            </div>
            <!-- <div class="col-md-3">
              <input type="submit" name="save" class="btn btn-info float-right" style="margin-top:31px;" value="Take/View Report" required>
            </div> -->
          </div>
        <!-- </form> -->
      </div>
    </div>
<!-- 
    <div class="attendance-report">
      <div class="card">
        <div class="card-header bg-info">
          <h2 class="d-inline text-white">Attendance Report List</h2>
        </div>
        <div class="card-body">
          <table class="attendance-table table table-bordered">
            <thead class="thead-light">
              <tr>
                <th>S.No</th>
                <th>Member Photo</th>
                <th>Member Name</th>
                <th>Group Name</th>
                <th>Attendance Date</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
          </table>

        </div>
      </div>
    </div>  -->
  </div>
</div>

<?php include "common/footer.php";?>