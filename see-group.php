<?php include "common/header.php";

$id = $_GET['group_id'];

?>

<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
    <div class="col-sm-12">
      <div class="bg-secondary rounded h-100 p-4">

        <div class="clearfix mb-3">
          <span class="float-start">Edit Group</span>
          <span><a href="view-group.php" class="btn btn-primary float-end">Group List</a></span>
        </div>

        

        <!-- Members Table -->
        <hr>
        <h5 class="mt-4 mb-3 text-white">Members in This Group</h5>
        <table class="table table-bordered text-white">
          <thead>
            <tr>
              <th>#</th>
              <th>Photo</th>
              <th>Name</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $members = mysqli_query($conn, "SELECT * FROM member WHERE m_group = '$id'");
            if (mysqli_num_rows($members) > 0) {
              $i = 1;
              while ($member = mysqli_fetch_assoc($members)) {
                echo "<tr>";
                echo "<td>{$i}</td>";
                echo "<td><img src='{$member['photo']}' width='50' height='50' style='border-radius:50%; object-fit:cover;'></td>";
                echo "<td>{$member['f_name']} {$member['l_name']}</td>";
                echo "</tr>";
                $i++;
              }
            } else {
              echo "<tr><td colspan='3'>No members found in this group.</td></tr>";
            }
            ?>
          </tbody>
        </table>

        <?php
        if (isset($_POST['submit'])) {
          $name = $_POST['name'];
          $description = $_POST['description'];

          $update = mysqli_query($conn, "UPDATE `group` SET `name`='$name', `description`='$description' WHERE `id`='$id'");

          if ($update) {
            echo "<script>alert('Group updated successfully'); location.href='view-group.php';</script>";
          } else {
            echo "<script>alert('Update failed');</script>";
          }
        }
        ?>

      </div>
    </div>
  </div>
</div>

<?php include "common/footer.php"; ?>
