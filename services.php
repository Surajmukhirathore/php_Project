
<?php include "common/header.php"; ?>
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">

<h2>Our Services</h2>
<table class="table table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">S.No</th>
                                        <th scope="col"> Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Price</th>
                                        
                                    </tr>
                                </thead>
<tbody>
    <?php
    $query = "SELECT * FROM services";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['name']}</td>
                <td>{$row['description']}</td>
                <td>{$row['price']}</td>
              </tr>";
    }
    ?>
    </tbody>
</table>
</div>
</div>

<?php include "common/footer.php"; ?>
