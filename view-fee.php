<?php include "common/header.php"; ?>

<h2>Fee Plans</h2>
<a href="add-fee.php" class="btn btn-success mb-2">Add New Plan</a>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Duration</th>
      <th>Amount</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = mysqli_query($conn, "
      SELECT f.*, m.f_name, m.l_name 
      FROM fee_plans f 
      JOIN member m ON f.member_id = m.id
    ");
    $i = 1;
    while ($row = mysqli_fetch_assoc($sql)) {
      $amount = ($row['amount'] == 1) ? 'Paid' : 'Unpaid';
      $full_name = $row['f_name'] . ' ' . $row['l_name'];

      echo "<tr>
              <td>{$i}</td>
              <td>{$full_name}</td>
              <td>{$row['duration_months']} Months</td>
              <td>{$amount}</td>
              <td>{$row['description']}</td>
            </tr>";
      $i++;
    }
    ?>
  </tbody>
</table>

<?php include "common/footer.php"; ?>
