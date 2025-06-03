<?php include "common/header.php";?>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
<div class="message"></div>
  <div class="container">
    <div class="admin-content">
      <div class="card">
        <div class="card-header">
          <h2 class="d-inline">View Membership Details</h2>
          <a href="membership.php" class="btn btn-success float-right">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
            </svg>
            Membership List
          </a>
        </div>
        <div class="card-body position-relative">
          <div id="table-data">
            <?php
             $id = $_GET['id'];


              $query = "SELECT * FROM `membership`";

              $fire = mysqli_query($conn,$query);
              if(mysqli_num_rows($fire)>0){
                while($row = mysqli_fetch_assoc($fire)){
                $m_name = $row['m_name'];
                $m_period = $row['m_period'];
                $m_category = $row['m_category'];
                $m_amount = $row['m_amount'];
                $m_description = $row['m_description'];
              
            ?>
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="card-header bg-info">
                  <h5 class="d-inline text-white">Membership Information</h5>
                </div>
                  <div class="border p-3">
                  <table width="100%" class="view-member">
                    <tbody>
                            <tr>
                              <td class="label">Membership Name :</td>
                              <td><?php echo $m_name; ?></td>
                            </tr>
                            <tr>
                              <td class="label">Category :</td>
                              <td><?php echo $m_category; ?></td>
                            </tr>
                            <tr>
                              <td class="label">Period :</td>
                              <td><?php echo $m_period; ?> days</td>
                            </tr>
                            <tr>
                              <td class="label">Amount :</td>
                              <td><?php echo $m_amount; ?></td>
                            </tr>
                            <tr>
                              <td class="label">Description :</td>
                              <td><?php echo $m_description; ?></td>
                            </tr>
                    </tbody>
                 </table>
               </div>
              </div>
            </div>
            <?php
              }
            }
            ?>
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

<?php include "common/footer.php";?>