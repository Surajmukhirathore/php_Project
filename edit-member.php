

<?php include "common/header.php";

$id= $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM `member` where `id`='$id'");
$row = mysqli_fetch_assoc($sql);
?>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12">
            <div class="bg-secondary rounded h-100 p-4">
                


                <div class="clearfix">
                    <span class="float-start">Add Staff Member</span>
                    <span> <a href="view-member.php" <button type="button" class="btn btn-primary float-end mb-4">Staff Member List</button></a></span>
                </div>


                <form method="POST" enctype="multipart/form-data">



                    <h5 class="mb-3">Personal Information</h5>


                    <div class="row form-floating mb-3">
                        <div class="col-md-10">
                            <div class="form-group">

                                <input type="file" class="form-control" id="image-upload" placeholder="name@example.com" name="photo">

                            </div>
                        </div>

                        <div class="col-md-2">
                            <img width="100px" id="image-preview" src="<?php echo $row['photo']; ?>" alt="">
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput"
                            placeholder="name@example.com" name="f_name" value="<?php echo $row['f_name']; ?>">
                        <label for="floatingInput">First Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingPassword"
                            placeholder="Password" name="l_name" value="<?php echo $row['l_name']; ?>">
                        <label for="floatingPassword">Last Name</label>
                    </div>


                    
                    <span>Gender :</span>

                    <?php if ($row['gender'] == 'male') { ?>

                    <div class="form-check form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="<?php echo $row['gender']; ?>" checked >
                        <label class="form-check-label" for="exampleRadios1">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="exampleRadios1" name="gender" value="<?php echo $row['gender']; ?>">
                        <label class="form-check-label" for="exampleRadios1">Female</label>
                    </div>
                    <?php }else{ ?>

                    <div class="form-check form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="<?php echo $row['gender']; ?>"  >
                        <label class="form-check-label" for="exampleRadios1">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="exampleRadios1" name="gender" value="<?php echo $row['gender']; ?>" checked>
                        <label class="form-check-label" for="exampleRadios1">Female</label>
                    </div>
                        <?php } ?>


                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="floatingPassword"
                            placeholder="Password" name="date" value="<?php echo $row['date']; ?>">
                        <label for="floatingPassword"></label>
                    </div>


                    <div class="form-floating mb-3">
                        <select class="form-control" id="group_id" name="m_group">
                            <option selected disabled>Open this select group</option>
                            <?php
                            $menu_sql = mysqli_query($conn, "SELECT * FROM `group`");
                            while ($menu_row = mysqli_fetch_assoc($menu_sql)) {
                            ?>
                                <option value="<?php echo $menu_row['id']; ?>"> <?php echo $menu_row['name']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <label for="group_id">group</label>
                    </div>





                    <h5 class="mb-3">Contact Information</h5>


                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingPassword"
                            placeholder="Password" name="address" value="<?php echo $row['address']; ?>">
                        <label for="floatingPassword">Address</label>
                    </div>


                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingPassword"
                            placeholder="Password" name="city" value="<?php echo $row['city']; ?>">
                        <label for="floatingPassword">City</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingPassword"
                            placeholder="Password" name="state" value="<?php echo $row['state']; ?>">
                        <label for="floatingPassword">State</label>
                    </div>


                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingPassword"
                            placeholder="Password" name="phone" value="<?php echo $row['phone']; ?>">
                        <label for="floatingPassword">Phone</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingPassword"
                            placeholder="Password" name="email" value="<?php echo $row['email']; ?>">
                        <label for="floatingPassword">Email</label>
                    </div>


                    <h5 class="mb-3">Physical Information</h5>


                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingPassword"
                            placeholder="Password" name="weight" value="<?php echo $row['weight']; ?>">
                        <label for="floatingPassword">Weight</label>
                    </div>


                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingPassword"
                            placeholder="Password" name="height" value="<?php echo $row['height']; ?>">
                        <label for="floatingPassword">Height</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingPassword"
                            placeholder="Password" name="chest" value="<?php echo $row['chest']; ?>">
                        <label for="floatingPassword">Chest</label>
                    </div>


                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingPassword"
                            placeholder="Password" name="waist" value="<?php echo $row['waist']; ?>">
                        <label for="floatingPassword">Waist</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingPassword"
                            placeholder="Password" name="thigh" value="<?php echo $row['thigh']; ?>">
                        <label for="floatingPassword">Thigh</label>
                    </div>


                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingPassword"
                            placeholder="Password" name="arms" value="<?php echo $row['arms']; ?>">
                        <label for="floatingPassword">Arms</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingPassword"
                            placeholder="Password" name="fat" value="<?php echo $row['fat']; ?>">
                        <label for="floatingPassword">Fat</label>
                    </div>



                    <h5 class="mb-3">More Information</h5>

                    <div class="form-floating mb-3">

                        <select class="form-control" id="staff_member_id" name="s_member">
                            <option selected disabled>Open this select staff member</option>
                            <?php
                            $menu_sql = mysqli_query($conn, "SELECT * FROM staff_member");
                            while ($menu_row = mysqli_fetch_assoc($menu_sql)) {
                            ?>

                                <option value="<?php echo  $menu_row['id']; ?>"> <?php echo  $menu_row['f_name']; ?></option>
                            <?php
                            }
                            ?>
                        </select>

                        <label for="staff_member_id">Select Staff Member</label>
                    </div>



                    <div class="form-floating mb-3">

                        <select class="form-control" id="membership_id" name="m_ship">
                            <option selected disabled>Open this select membership</option>
                            <?php
                            $menu_sql = mysqli_query($conn, "SELECT * FROM `membership`");
                            while ($menu_row = mysqli_fetch_assoc($menu_sql)) {
                            ?>
                                <option value="<?php echo $menu_row['id']; ?>"> <?php echo $menu_row['m_name']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <label for="membership_id"> Membership</label>
                    </div>



                    <div class="row">

                        <span class="form-floating mb-3 col-md-5">
                            <input type="date" class="form-control" id="floatingPassword" name="date1"
                                placeholder="" value="<?php echo $row['date1']; ?>">

                        </span>
                        To
                        <span class="form-floating mb-3 col-md-6 float-end">
                            <input type="date" class="form-control " id="floatingPassword"
                                placeholder="" name="date2" value="<?php echo $row['date2']; ?>">

                        </span>


                    </div>
                    <div class="clearfix">

                        <span> <button type="submit" name="submit" class="btn btn-primary float-end">Save</button></span>
                    </div>

                </form>


                <?php

                if (isset($_POST['submit'])) {


                    $photo = upload_image('photo', 'img/');

                    $f_name = $_POST['f_name'];
                    $l_name = $_POST['l_name'];
                    $gender = $_POST['gender'];
                    $date = $_POST['date'];
                    $m_group = $_POST['m_group'];
                    $address = $_POST['address'];
                    $city = $_POST['city'];
                    $state = $_POST['state'];
                    $phone = $_POST['phone'];
                    $email = $_POST['email'];
                    $weight = $_POST['weight'];
                    $height = $_POST['height'];
                    $chest = $_POST['chest'];
                    $waist = $_POST['waist'];
                    $thigh = $_POST['thigh'];
                    $arms = $_POST['arms'];
                    $fat = $_POST['fat'];
                    $s_member = $_POST['s_member'];
                    $m_ship = $_POST['m_ship'];

                    $date1 = $_POST['date1'];
                    $date2 = $_POST['date2'];


                    $sql = mysqli_query($conn, "UPDATE `member` SET
        
         `photo`='$photo',
         `f_name`='$f_name',
         `l_name`='$l_name',
         `gender`='$gender',
         `date`='$date',
          `m_group`='$m_group',
          `address`='$address',
          `city`='$city',
          `state`='$state',
          `phone`='$phone',
          `email`='$email',
          `weight`='$weight',
          `height`='$height',
          `chest`='$chest',
          `waist`='$waist',
          `thigh`='$thigh',
          `arms`='$arms',
          `fat`='$fat',
          `s_member`='$s_member',
         `m_ship`='$m_ship',
         `date1`='$date1',
         `date2`='$date2'
        
          WHERE `id` = '$id'");


                    if ($sql) {
                        echo "<script>alert('Staff member added successfully');location.href='member.php';</script>";
                    } else {
                        echo "<script>alert('error');location.href='member.php';</script>";
                    }
                }
                ?>







            </div>
        </div>

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