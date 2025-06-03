<?php 
include "common/header.php" ?>
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
<div class="container">
  <div class="admin-content">
    <div class="card">
      <div class="card-header">
        <h2 class="d-inline text-danger">Member List</h2>
        <a href="add-member.php"< class="btn btn-primary float-end">Add Member</a>
      </div>
      <div class="card-body position-relative">
        <div class="message"></div>
        <div id="table-data">

          <table class="table-data table table-bordered">
            <thead class="thead-light">
              <tr>
                <th>S.No</th>
                <th>Photo</th>
                <th>Name</th>
                <th>Join Date</th>
                <th>Expire Date</th>
                <th>Phone</th>
                <th>Email</th>
                <th style="width:100px;">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $query = "select * from `member` order by id DESC";
              $fire = mysqli_query($conn, $query);
              if (mysqli_num_rows($fire) > 0) {
                $i=0;
                while ($row = mysqli_fetch_assoc($fire)) {
                  $id = $row['id'];
                  $photo = $row['photo'];
                  $f_name = $row['f_name'];
                  $l_name = $row['l_name'];
                  $date1 = $row['date1'];
                  $date2 = $row['date2'];
                  $phone = $row['phone'];
                  $email = $row['email'];
                $i++;
              ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td>


                      <img src="<?php echo $photo; ?>" width="60px" height="60px" style="border-radius:50%; object-fit: cover;" alt="">

                    </td>
                    <td><?php echo $f_name . ' ' . $l_name; ?></td>
                    <td><?php echo date('j M, Y', strtotime($date1)); ?></td>
                    <td>
                      <?php echo date('j M, Y', strtotime($date2)); ?>
                  
                    </td>
                    <td><?php echo $phone; ?></td>
                    <td><?php echo $email; ?></td>
                    <td>
                      <ul class="action-list d-flex list-unstyled">
                        <li class="me-2"><a href="member.php? d=<?php echo $id; ?>" class="btn btn-success btn-sm "><img src="img/eye.png" width="20px" height="20px" alt=""></a></li>
                        <li class="me-2"><a href="edit-member.php?id=<?php echo $id; ?>" class="btn btn-primary btn-sm"><img src="img/edit.png" width="20px" height="20px" alt=""></a></li>
                        <li class="me-2"><a href="delete-member.php?id=<?php echo $id; ?>" class="btn btn-danger btn-sm"><img src="img/delete.png" width="20px" height="20px" alt=""></a></li>
                        <li class="me-2"><a href="edit-fee.php?id=<?php echo $id; ?>" class="btn btn-danger btn-sm">fees</a></li>
                      </ul>
                    </td>
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