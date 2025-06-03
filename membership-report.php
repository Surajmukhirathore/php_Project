<?php include "common/header.php" ?>
  <div class="message"></div>

  <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
  <div class="container">
    <div class="admin-content">
      <div class="card mb-4">
        <div class="card-header">
          <h2 class="d-inline text-danger">Membership Report</h2>
        </div>
        <div class="card-body">
          <div class="membership-report">
            <div class="card-header bg-info border mb-4">
              <h5 class="d-inline text-white">Membership Report List</h5>
            </div>
            <table class="table-data table table-bordered">
              <?php
                // $db = new Database();

                // $db->sql("SELECT membership.membership_id,membership.membership_name,count(member.membership) AS membership FROM membership
                //           LEFT JOIN member ON member.membership=membership.membership_id GROUP BY membership.membership_id");
                // $result = $db->getResult();
              
                
              ?>
              <thead class="thead-light">
                <tr>
                  <th>S.No</th>
                  <th>Membership Name</th>
                  <th>Total Member</th>
                </tr>
              </thead>
              <?php
          function mcount($id){
            global $conn;
              $query1 = "SELECT count(m_ship) AS total from `member` where m_ship = $id";
              $result = mysqli_query($conn, $query1);
              if ($result && $row = mysqli_fetch_assoc($result)) {
                    return $row['total'];
                }
              return 0;
          }


              $query = "SELECT *from `membership`";
              $fire = mysqli_query($conn, $query);
              if (mysqli_num_rows($fire) > 0) {
                $i=0;
                while ($row = mysqli_fetch_assoc($fire)) {
                  $id = $row['id'];
                  $m_name = $row['m_name'];
                  
                $i++;
                
              ?>
              <tbody>
                <tr>
                  <td><?php echo $id; ?></td>
                  <td><?php echo $m_name; ?></td>
                <td>   <?php echo mcount($id); ?></td>
                </tr>
              </tbody>
              <?php
                }
              }
              ?>
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
