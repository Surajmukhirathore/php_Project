<?php 
include "common/header.php";

// Fetch members for dropdown
$members = mysqli_query($conn, "SELECT id, f_name, l_name FROM member");

if (isset($_POST['submit'])) {
  $member_id = $_POST['member_id'];
  $duration = $_POST['duration_months'];
  $amount = $_POST['amount'];
  $desc = $_POST['description'];

  $query = mysqli_query($conn, "INSERT INTO fee_plans (member_id, duration_months, amount, description) 
    VALUES ('$member_id', '$duration', '$amount', '$desc')");

  if ($query) {
    echo "<script>alert('Plan added successfully'); location.href='view-fee.php';</script>";
  } else {
    echo "<script>alert('Error adding plan');</script>";
  }
}
?>

<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
    <form method="POST">
      <div class="form-group">
        <label>Member</label>
        <select name="member_id" class="form-control" required>
          <?php while ($m = mysqli_fetch_assoc($members)) {
            echo "<option value='{$m['id']}'>{$m['f_name']} {$m['l_name']}</option>";
          } ?>
        </select>
      </div>

      <div class="form-group">
        <label>Duration (months)</label>
        <input type="number" name="duration_months" class="form-control" required>
      </div>

      <div class="form-group">
        <label for="exampleInputEmail3">Payment Status</label>
        <select class="form-control" name="amount" required>
          <option selected disabled>Select Paid/Unpaid</option>
          <option value="1">Paid</option>
          <option value="0">Unpaid</option>
        </select>
      </div>

      <div class="form-group">
        <label>Description</label>
        <textarea name="description" class="form-control"></textarea>
      </div>

      <button type="submit" name="submit" class="btn btn-primary mt-2">Add Plan</button>
    </form>
  </div>
</div>

<?php include "common/footer.php"; ?>
