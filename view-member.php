<?php $title = "Member";
include "common/header.php" ?>
<div class="message"></div>
<div class="container">
  <div class="admin-content">
    <div class="card">
      <div class="card-header">
        <h2 class="d-inline">View Member Profile</h2>
        <a href="member.php" class="btn btn-success float-right">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
          </svg>
          Member List
        </a>
      </div>
      <div class="card-body position-relative">
        <div id="table-data">
          <?php
          $id = $_GET['id'];
          $query = "select * from `member` where id='$id'";
          $fire = mysqli_query($conn, $query);
          if (mysqli_num_rows($fire) > 0) {
            while ($row = mysqli_fetch_assoc($fire)) {
              $photo = $row['photo'];
              $f_name = $row['f_name'];
              $l_name = $row['l_name'];
              $gender = $row['gender'];
              $date = $row['date'];
              $m_group = $row['me_group'];
              $address = $row['address'];
              $city = $row['city'];
              $state = $row['state'];
              $phone = $row['phone'];
              $email = $row['email'];
              $weight = $row['weight'];
              $height = $row['height'];
              $chest = $row['chest'];
              $waist = $row['waist'];
              $thigh = $row['thigh'];
              $arm = $row['arm'];
              $fat = $row['fat'];
              $s_member = $row['s_member'];
              $m_ship = $row['m_ship'];
              $date1 = $row['date1'];
              $date2 = $row['date2'];
            }
          }
          ?>
          <div class="row">
            <div class="col-md-6 mb-4">
              <div class="card-header bg-info">
                <h5 class="d-inline text-white">Personal Information</h5>
              </div>
              <div class="border p-3">

                <img src="<?php echo $photo; ?>" style="margin-bottom:20px;" width="100%" height="300px" alt="">

                <table width="100%" class="view-member">
                  <tbody>
                    <tr>
                      <td class="label">Member Name :</td>
                      <td><?php echo $f_name . ' ' . $l_name; ?></td>
                    </tr>
                    <tr>
                      <td class="label">Mobile No :</td>
                      <td><?php echo $phone; ?></td>
                    </tr>
                    <tr>
                      <td class="label">Email :</td>
                      <td><?php echo $email; ?></td>
                    </tr>
                    <tr>
                      <td class="label">Date Of Birth :</td>
                      <td><?php echo date('j F,Y', strtotime($date)); ?></td>
                    </tr>
                    <tr>
                      <td class="label">Gender :</td>
                      <td><?php echo $gender; ?></td>
                    </tr>
                    <tr>
                      <td class="label">Address :</td>
                      <td><?php echo $address; ?></td>
                    </tr>
                    <tr>
                      <td class="label">City :</td>
                      <td><?php echo $city; ?></td>
                    </tr>
                    <tr>
                      <td class="label">State :</td>
                      <td><?php echo $state; ?></td>
                    </tr>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="offset-md-1 col-md-5" style="height:100%;">
              <div class="card-header bg-info">
                <h5 class="d-inline text-white">Physical Information</h5>
              </div>
              <div class="border p-3">
                <table width="100%" class="view-member">
                  <tbody>
                    <tr>
                      <td class="label">Member Weight :</td>
                      <td><?php echo $weight . ' kg'; ?></td>
                    </tr>
                    <tr>
                      <td class="label">Member Height :</td>
                      <td><?php echo $height . ' cm'; ?></td>
                    </tr>
                    <tr>
                      <td class="label">Member Chest :</td>
                      <td><?php echo $chest . ' cm'; ?></td>
                    </tr>
                    <tr>
                      <td class="label">Member Waist :</td>
                      <td><?php echo $waist . ' Inch'; ?></td>
                    </tr>
                    <tr>
                      <td class="label">Member Thigh :</td>
                      <td><?php echo $thigh . ' inch'; ?></td>
                    </tr>
                    <tr>
                      <td class="label">Member Arm :</td>
                      <td><?php echo $arm . ' Inch'; ?></td>
                    </tr>
                    <tr>
                      <td class="label">Member Fat :</td>
                      <td><?php echo $fat . '%'; ?></td>
                    </tr>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card-header bg-info">
                <h5 class="d-inline text-white">More Information</h5>
              </div>
              <div class="border p-3">
                <table width="100%" class="view-member">
                  <tbody>
                    <?php
                    $query = "select * from `membership` where membership_id='$membership'";
                    $fire = mysqli_query($conn, $query);
                    if (mysqli_num_rows($fire) > 0) {
                      while ($row = mysqli_fetch_assoc($fire)) {
                        $membership_name = $row['membership_name'];
                      }
                    }
                    ?>
                    <tr>
                      <td class="label">Membership :</td>
                      <td><?php echo $m_ship; ?></td>
                    </tr>
                    <tr>
                      <td class="label">Joining Date :</td>
                      <td><?php echo date('j F,Y', strtotime($date1)); ?></td>
                    </tr>
                    <tr>
                      <td class="label">Expiring Date :</td>
                      <td><?php echo date('j F,Y', strtotime($date2)); ?></td>
                    </tr>
                    <tr>
                      <?php
                      $query = "select * from `group` where group_id='$m_group'";
                      $fire = mysqli_query($conn, $query);
                      if (mysqli_num_rows($fire) > 0) {
                        while ($row = mysqli_fetch_assoc($fire)) {
                          $grp_name = $row['group_name'];
                        }
                      }
                      ?>
                      <td class="label">Group :</td>
                      <td><?php echo $name; ?></td>
                    </tr>
                    <tr>
                      <?php
                      $query = "select * from `staff_member` where staff_id='$staff_member'";
                      $fire = mysqli_query($conn, $query);
                      if (mysqli_num_rows($fire) > 0) {
                        while ($row = mysqli_fetch_assoc($fire)) {
                          $f_name = $row['f_name'];
                          $l_name = $row['l_name'];
                        }
                      }
                      ?>
                      <td class="label">Staff Member :</td>
                      <td><?php echo $f_name . ' ' . $l_name; ?></td>
                    </tr>
                    </tr>
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
</div>

<?php include "common/footer.php"; ?>