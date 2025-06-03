<?php include "common/header.php"; 


function countGroupMembers($group_id) {
                global $conn;
                $query = "SELECT COUNT(*) as total FROM member WHERE m_group = $group_id";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($result);
                return $row['total'];
            }
?>
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">

    <div class="clearfix mb-3">
      <span class="float-start h4">Group List</span>
      <a href="add-group.php" class="btn btn-primary float-end">Add New Group</a>
    </div>

    <div class="col-sm-12">
      <div class="bg-secondary rounded h-100 p-4">
        <table class="table table-dark">
          <thead>
            <tr>
              <th scope="col">S.No</th>
              <th scope="col">Group Name</th>
              <th scope="col">Total Group Members</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $sql = "SELECT * 
                    FROM `group` 
                    ";
            $fire = mysqli_query($conn, $sql);
            if (mysqli_num_rows($fire) > 0) {
              $i = 0;
              while ($row = mysqli_fetch_assoc($fire)) {
                $group_id = $row['id'];
                $group_name = $row['name'];

                $i++;
            ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $group_name; ?></td>
                 <td><?php echo countGroupMembers($group_id); ?></td>
                  <td>
                    
                    <ul class="action-list list-inline">
                      <li class="list-inline-item">
                        <a href="edit-group.php?group_id=<?php echo $group_id; ?>" class="btn btn-primary btn-sm" title="Edit Group">
                          <img src="img/edit.png" height="20px" width="20px" alt="Edit">
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="delete-group.php?group_id=<?php echo $group_id; ?>" class="btn btn-danger btn-sm" title="Delete Group" onclick="return confirm('Are you sure you want to delete this group?');">
                          <img src="img/delete.png"height="20px" width="20px"  alt="Delete">
                        </a>
                      </li>

                      <li class="list-inline-item">
                        <a href="see-group.php?group_id=<?php echo $group_id; ?>" class="btn btn-danger btn-sm" title="See Group">
                          <img src="img/eye.png"height="20px" width="20px"  alt="Delete">
                        </a>
                      </li>
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

<?php include "common/footer.php"; ?>
