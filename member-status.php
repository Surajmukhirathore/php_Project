<?php include "common/header.php"; ?>


<div class="container">
    <div class="admin-content">
        <div class="card mb-4">
            <div class="card-header">
                <h2 class="d-inline">Member Attendance</h2>
                <a href="member-attendance.php" class="btn btn-info float-right">Attendance Member</a>
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
                                <th>S.N.</th>
                                <th>Member Photo</th>
                                <th>Member Name</th>
                                <!-- <th>Group Name</th> -->
                                <th>Attendance Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * 
                            FROM `member` ";

                            $fire = mysqli_query($conn, $query);
                            if (mysqli_num_rows($fire) > 0) {
                                $i = 0;
                                while ($row = mysqli_fetch_assoc($fire)) {
                                    $id = $row['id'];
                                    $photo = $row['photo'];
                                    $f_name = $row['f_name'];
                                    $l_name = $row['l_name'];
                                    // $m_group = $row['group_name'];
                                    $date = $row['date1'];
                                 $attendance_status = $row['attendance'];
                                    $i++;

                            ?>
                                    <tr>

                                        <td><?php echo $i; ?></td>
                                        <td><img src="<?php echo $photo; ?>" width="110px" height="110px"></td>
                                        <td><?php echo $f_name . ' ' . $l_name; ?></td>
                                        <td><?php echo $date;?></td>
                                        
                                        <td><?php
                                            if($row['attendance'] == '1'){
                                                echo "<div class='badge badge-success'>Present</div>";
                                            } else {
                                                echo "<div class='badge badge-danger'>Absent</div>";
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





<?php include "common/footer.php"; ?>