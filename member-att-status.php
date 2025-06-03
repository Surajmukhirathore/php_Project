<?php $title = "Staff Member Attendance";
include "common/header.php" ?>
<div class="message"></div>
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
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
                                <th>Group Name</th>
                                <th>Attendance Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
function groupname($id){
global $conn;
$query1 = "SELECT `name` from `group` where id = $id";
$result = mysqli_query($conn, $query1);
$row = mysqli_fetch_assoc($result);
return $row['name'];

}
function astatus($id) {
    global $conn;

    $id = (int)$id; // sanitize input
    $query = "SELECT `attendance_status` FROM `attendance` WHERE member_id = $id";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row['attendance_status'];
    } else {
        return null; // or a default like 'absent' or 'unknown'
    }
}

function getMemberinfo($id) {
    global $conn;



    $sql = mysqli_query($conn, "SELECT * FROM `member` WHERE `id` = $id");

    if ($sql && mysqli_num_rows($sql) > 0) {
        $row = mysqli_fetch_assoc($sql);
        return $row;
    }


}



                            $query = "select * from `attendance`";
                            $fire = mysqli_query($conn, $query);
                            if (mysqli_num_rows($fire) > 0) {
                                $i = 0;
                                while ($row = mysqli_fetch_assoc($fire)) {
                                    $id = $row['member_id'];
                                    $attendance_date = $row['attendance_date'];
                                    $attan = astatus($id);
                                    $getMemberinfo = getMemberinfo($id);
                                    $i++;

                            ?>
                                    <tr>

                                        <td><?php echo $i; ?></td>
                                        <td><img src="<?php echo $getMemberinfo['photo'];?>" height="100px" width="100px"></td>
                                        <td><?php echo $getMemberinfo['f_name'] .' '.$getMemberinfo['l_name'];?></td>
                                       <td><?php echo groupname($id) ?></td>
                                 <td><?php echo $attendance_date;?></td>
            
                                        <td><?php
                                            if ($attan == 1) {
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