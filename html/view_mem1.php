<?php include "common/header.php"; ?>




<?php include "common/header.php"; ?>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">



        <div class="clearfix">
            <span class="float-start">Staff Member List</span>
            <span> <a href="add-staffmember.php" <button type="button" class="btn btn-primary float-end">Add Staff Member</button></a></span>
        </div>
        <div class="col-sm-12">
            <div class="bg-secondary rounded h-100 p-4">

                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">S.No</th>
                            <th scope="col"> Photo</th>
                            <th scope="col"> Member Name</th>
                            <th scope="col">Mobile No.</th>
                            <th scope="col">Email</th>
                            <th scope="col">Date Of Birth</th>

                            <th scope="col">Gender</th>

                            <th scope="col">Address</th>
                            <th scope="col">City</th>
                            <th scope="col">State</th>

                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        $sql = mysqli_query($conn, "SELECT * FROM `staff_member` order by id desc");
                        while ($row = mysqli_fetch_assoc($sql)) {

                            $photo = $row['photo'];
                            $name = $row['name'];
                            $phone = $row['phone'];
                            $email = $row['email'];
                            $dob = $row['date'];
                            $gender = $row['gender'];
                            $address = $row['address'];
                            $city = $row['city'];
                            $state = $row['state'];

                            ?>
                            
                            

                     <tr>
                               
                               <td><img src=\"{$row['photo']}\" width=\"50px\" height=\" 50px\" alt=\"\"></td>
                               <td><?php echo $name;?></td>
                                <td><?php echo $phone;?></td>
                                <td><?php echo $email;?></td>
                               <td><?php echo $date;?></td>
                               <td><?php echo $gender;?></td>
                               <td><?php echo $address;?></td>
                               <td><?php echo $city;?></td>
                               <td><?php echo $state;?></td>
                               <td><a class='btn btn-sm btn-info' href='edit-staffmember.php?id={$row['id']}'><i class='fa fa-edit'></i></a> 
                   <a class='btn btn-sm btn-danger' href='delete_staffmember.php?id={$row['id']}'><i class='fa fa-trash'></i></a></td>
                             </tr>
                             <?php
                        }
                        ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php include "common/footer.php"; ?>


























<?php include "common/footer.php"; ?>