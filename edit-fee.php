<?php
include "common/header.php";

$members = mysqli_query($conn, "SELECT id, f_name, l_name FROM member");
$plans = mysqli_query($conn, "SELECT * FROM fee_plans");

if (isset($_POST['submit'])) {
  $member_id = $_POST['member_id'];
  $plan_id = $_POST['fee_plan_id'];
  $payment_date = $_POST['payment_date'];
  $amount_paid = $_POST['amount_paid'];

  $query = mysqli_query($conn, "INSERT INTO member_fees (member_id, fee_plan_id, payment_date, amount_paid, status) 
    VALUES ('$member_id', '$plan_id', '$payment_date', '$amount_paid', 'Paid')");

  if ($query) {
    echo "<script>alert('Fee assigned'); location.href='view-fee.php';</script>";
  } else {
    echo "<script>alert('Error');</script>";
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
    <label>Fee Plan</label>
    <select name="fee_plan_id" class="form-control" required>
      <?php while ($p = mysqli_fetch_assoc($plans)) {
        echo "<option value='{$p['id']}'>{$p['plan_name']} - ₹{$p['amount']}</option>";
      } ?>
    </select>
  </div>
  <div class="form-group">
    <label>Payment Date</label>
    <input type="date" name="payment_date" class="form-control" required>
  </div>
  <!-- <div class="form-group">
    <label>Amount Paid</label>
    <input type="number" name="amount_paid" class="form-control" required>
  </div> -->




<!-- Amount Paid field auto-filled based on plan -->
<!-- <div class="form-group mt-2">
  <label>Amount Paid</label>
  <select id="amount_paid" name="amount_paid" class="form-control" required>
    <option value="">-- Select Amount --</option>
    <option value="500">₹500</option>
    <option value="1000">₹1000</option>
    <option value="1500">₹1500</option>
    <option value="2000">₹2000</option>
    <option value="2500">₹2500</option>
  </select>
</div> -->

<!-- <script>
  document.getElementById('fee_plan_id').addEventListener('change', function () {
    var selected = this.options[this.selectedIndex];
    var amount = selected.getAttribute('data-amount');
    
    var amountDropdown = document.getElementById('amount_paid');
    amountDropdown.innerHTML = ''; // clear old options

    if (amount) {
      amountDropdown.innerHTML = '<option value="' + amount + '">₹' + amount + '</option>';
    } else {
      amountDropdown.innerHTML = '<option value="">-- Select Amount --</option>';
    }
  });
</script> -->
 <div class="form-group">
                    <label for="exampleInputEmail3">Amount Status</label>
                    <select class="form-control" name="menu_status">
                  <option selected disabled>Select Paid/Unpaid</option>
                        <option value="1">Paid</option>
                          <option value="0">Unpaid</option>
                  </select>
                       </div>

  <button type="submit" name="submit" class="btn btn-success mt-2">Assign Fee</button>
</form>

</div>
</div>

<?php include "common/footer.php";?>