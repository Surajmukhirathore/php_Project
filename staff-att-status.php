<?php $title = "Staff Member Attendance";
include "common/header.php" ?>
<div class="message"></div>
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
<div class="container">
    <div class="admin-content">
        <div class="card mb-4">
            <div class="card-header">
                <h2 class="d-inline">Staff Member List</h2>
                <a href="staff-attendance.php" class="btn btn-info float-right">Attendance Staff Member</a>
            </div>
            <div class="card-body">
                <!-- <form class="yourform" id="staff-attendance" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" autocomplete="off">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Date</label>
                    <input type="date" class="form-control staff_date" name="current_date" value="<?php echo date('Y-m-d'); ?>" required>
                  </div>
                </div>
              </div>
          </form> -->
                <div class="staff-attendance">
                    <!-- <div class="card-header bg-info border mb-4">
                        <h5 class="d-inline text-white">Member List</h5>
                    </div> -->
                    <table class="staff-table table-data table table-bordered">

                        <thead class="thead-light">
                            <tr>
                                <th>S.No</th>
                                <th>Photo</th>
                                <th>Staff Member Name</th>
                                <th>Role</th>
                                <th>Mobile No.</th>
                                <th>Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "select * from `staff_member`";
                            $fire = mysqli_query($conn, $query);
                            if (mysqli_num_rows($fire) > 0) {
                                while ($row = mysqli_fetch_assoc($fire)) {
                                    $id = $row['id'];
                                    $photo = $row['photo'];
                                    $f_name = $row['f_name'];
                                    $l_name = $row['l_name'];
                                    $a_role = $row['a_role'];
                                    $status = $row['status'];
                                    $date = $row['date'];
                                    $phone = $row['phone'];
                            ?>
                                    <tr>

                                        <td><?php echo $id; ?></td>
                                        <td><img src="<?php echo $photo; ?>" width="80px" height="80px"></td>
                                        <td><?php echo $f_name . ' ' . $l_name; ?></td>
                                        <td><?php echo $a_role; ?></td>
                                        <td><?php echo $phone; ?></td>
                                        <td><?php echo $date; ?></td>
                                        <td><?php
                                            if ($status == 1) {
                                                echo "<div style='color:green;'>Present</div>";
                                            } else {
                                                echo "<div style='color:red;'>Absent</div>";
                                            }
                                            ?></td>

                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
</div>
</div>
    </div>
</div>
</div>
</div>
</div>


<?php include "common/footer.php" ?>