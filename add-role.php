<?php include "common/header.php"; ?>
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
    <div class="col-sm-12">
      <div class="bg-secondary rounded h-100 p-4">

        <div class="clearfix">
          <span class="float-start">Add Role</span>
          <span> <a href="view-role.php" <button type="button" class="btn btn-primary float-end mb-4"> Role List</button></a></span>
        </div>


        <form method="POST" enctype="multipart/form-data">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput"
              placeholder="name@example.com" name="name">
            <label for="floatingInput"> Name </label>
          </div>

          <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here"
              id="floatingTextarea" style="height: 150px;" name="description"></textarea>
            <label for="floatingTextarea"> description</label>
          </div>
          <div class="clearfix">

            <span> <button type="submit" name="submit" class="btn btn-primary float-end mt-3"> Save</button></a></span>
          </div>

        </form>

        <?php

        if (isset($_POST['submit'])) {




          $name = $_POST['name'];

          $description = $_POST['description'];

          $sql = mysqli_query($conn, "INSERT INTO `role`(`name`, `description`)
 VALUES ('$name','$description')");


          if ($sql) {
            echo "<script>alert('Role added successfully');location.href='view-role.php';</script>";
          } else {
            echo "<script>alert('error');location.href='view-role.php';</script>";
          }
        }
        ?>









      </div>




    </div>




  </div>



</div>

<?php include "common/footer.php"; ?>