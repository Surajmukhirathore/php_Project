<?php include "common/header.php"; ?>

<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
    <div class="col-sm-12">
      <div class="bg-secondary rounded h-100 p-4">

        <div class="clearfix">
          <span class="float-start mb-3">Edit Settings</span>
        </div>

        <?php
        $query = "SELECT * FROM `settings`";
        $fire = mysqli_query($conn, $query);
        if (mysqli_num_rows($fire) > 0) {
          while ($row = mysqli_fetch_assoc($fire)) {
            $gym_name = $row['gym_name'];
            $old_gym_logo = $row['gym_logo'];
            $gym_currency = $row['gym_currency'];
          }
        }
        ?>

        <form method="POST" enctype="multipart/form-data">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput"
              placeholder="name@example.com" name="gym_name" value="<?php echo $gym_name; ?>">
            <label for="floatingInput">Gym Name</label>
          </div>

          <div class="row mb-3">
            <div class="col-md-5">
              <label for="image-upload" class="form-label">Gym Logo</label>
              <input type="file" class="form-control" id="image-upload" name="gym_logo">
            </div>

            <div class="col-md-2">
              <label class="form-label">Current Logo</label>
              <img width="100px" id="image-preview" src="<?php echo $old_gym_logo; ?>" alt="Gym Logo">
            </div>
          </div>

          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingPassword"
              placeholder="Currency" name="gym_currency" value="<?php echo $gym_currency; ?>" required>
            <label for="floatingPassword">Currency Format</label>
          </div>

          <div class="clearfix">
            <button type="submit" name="save" class="btn btn-primary float-end">Update</button>
          </div>
        </form>

        <?php
        if (isset($_POST['save'])) {
          $gym_name = mysqli_real_escape_string($conn, $_POST['gym_name']);
          $gym_currency = mysqli_real_escape_string($conn, $_POST['gym_currency']);

          // Check if a new image was uploaded
          if (isset($_FILES['gym_logo']) && $_FILES['gym_logo']['error'] === UPLOAD_ERR_OK) {
            $file_tmp = $_FILES['gym_logo']['tmp_name'];
            $file_name = time() . '_' . basename($_FILES['gym_logo']['name']);
            $target_dir = 'img/gym-logo/';
            $target_path = $target_dir . $file_name;

            // Create directory if it doesn't exist
            if (!is_dir($target_dir)) {
              mkdir($target_dir, 0777, true);
            }

            // Move uploaded file
            if (move_uploaded_file($file_tmp, $target_path)) {
              // Delete old image if it exists
              if (file_exists($old_gym_logo)) {
                unlink($old_gym_logo);
              }
              $gym_logo = $target_path;
            } else {
              // Fallback to old logo if upload fails
              $gym_logo = $old_gym_logo;
            }
          } else {
            $gym_logo = $old_gym_logo;
          }

          // Update settings
          $query = "UPDATE `settings` SET 
                    `gym_name`='$gym_name',
                    `gym_logo`='$gym_logo',
                    `gym_currency`='$gym_currency' 
                    WHERE 1";
          $fire = mysqli_query($conn, $query);

          if ($fire) {
            echo "<script>alert('Gym Setting Updated'); window.location.href='settings.php';</script>";
          } else {
            echo "Error: " . mysqli_error($conn);
          }
        }
        ?>

      </div>
    </div>

<?php include "common/footer.php"; ?>

<script>
  document.getElementById('image-upload').addEventListener('change', function(event) {
    var input = event.target;
    var reader = new FileReader();

    reader.onload = function() {
      var imgElement = document.getElementById('image-preview');
      imgElement.src = reader.result;
    };

    reader.readAsDataURL(input.files[0]);
  });
</script>
