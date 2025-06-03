<?php include "common/header.php"; ?>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">

        <div class="clearfix">
            <span class="float-start text-white fs-4">Services</span>
            <a href="add_services.php" class="btn btn-primary float-end">Add New Service</a>
        </div>

        <div class="col-sm-12">
            <div class="bg-secondary rounded h-100 p-4">

                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">S.No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Price</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = mysqli_query($conn, "SELECT * FROM `services` ORDER BY id DESC");
                        $sno = 1;
                        while ($row = mysqli_fetch_assoc($sql)) {
                            echo "<tr>
                                    <td>{$sno}</td>
                                    <td>{$row['name']}</td>
                                    <td>{$row['description']}</td>
                                    <td>{$row['price']}</td>
                                    <td>" . date('d M Y', strtotime($row['created_at'])) . "</td>
                                    <td>
                                        <a class='btn btn-sm btn-info' href='edit_services.php?id={$row['id']}'><i class='fa fa-edit'></i></a>
                                        <a class='btn btn-sm btn-danger' href='delete_service.php?id={$row['id']}'><i class='fa fa-trash'></i></a>
                                    </td>
                                </tr>";
                            $sno++;
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

<?php include "common/footer.php"; ?>
