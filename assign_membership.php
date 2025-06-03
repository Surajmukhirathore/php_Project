<?php include "common/header.php";

function getServiceName($service_id) {
    global $conn;
    $service_id = intval($service_id);
    $query = "SELECT name FROM services WHERE id = $service_id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    return $row ? $row['name'] : 'Unknown';
}

function getMemberName($id) {
    global $conn;
    $id = intval($id);
    $query = "SELECT f_name FROM member WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    return $row ? $row['f_name'] : 'Unknown';
}
?>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="clearfix">
            <span class="float-start">Role List</span>
            <a href="add_services.php" class="btn btn-primary float-end">Add New Service</a>
        </div>
        <div class="col-sm-12">
            <div class="bg-secondary rounded h-100 p-4">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">S.No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Service</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = mysqli_query($conn, "SELECT * FROM `memberss` ORDER BY id DESC");
                        while ($row = mysqli_fetch_assoc($sql)) {
                            echo "<tr>
                                <td>{$row['id']}</td>
                                <td>" . getMemberName($row['name']) . "</td>
                                <td>" . getServiceName($row['service']) . "</td>
                                <td>
                                    <a class='btn btn-sm btn-info' href='edit_services.php?id={$row['id']}'><i class='fa fa-edit'></i></a>
                                    <a class='btn btn-sm btn-danger' href='delete_services.php?id={$row['id']}'><i class='fa fa-trash'></i></a>
                                </td>
                            </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include "common/footer.php"; ?>
