<?php include "common/header.php"; ?>



<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12">
            <div class="bg-secondary rounded h-100 p-4">

                <div class="clearfix">
                    <span class="float-start">Add Staff Member</span>
                    <span> <a href="view-staff.php" <button type="button" class="btn btn-primary float-end mb-4">Staff Member List</button></a></span>
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
                            <img width="100px" id="image-preview" src="" alt="">
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput"
                            placeholder="name@example.com" name="f_name">
                        <label for="floatingInput">First Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingPassword"
                            placeholder="Password" name="l_name">
                        <label for="floatingPassword">Last Name</label>
                    </div>


                    <span>Gender :</span>
                    <div class="form-check form-check-inline mb-2">

                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="male" checked>

                        <label class="form-check-label" for="exampleRadios1">
                            Male
                        </label>

                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="exampleRadios1" name="gender" value="female">
                        <label class="form-check-label" for="exampleRadios1">
                            Female
                        </label>
                    </div>




                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="floatingPassword"
                            placeholder="Password" name="date">
                        <label for="floatingPassword"></label>
                    </div>


                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingPassword"
                            placeholder="Password" name="a_role">
                        <label for="floatingPassword">Assign Role</label>
                    </div>



                    <h5 class="mb-3">Contact Information</h5>



                   
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingPassword"
                            placeholder="Password" name="address">
                        <label for="floatingPassword">Address</label>
                    </div>


                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingPassword"
                            placeholder="Password" name="city">
                        <label for="floatingPassword">City</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingPassword"
                            placeholder="Password" name="state">
                        <label for="floatingPassword">State</label>
                    </div>


                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="floatingPassword"
                            placeholder="Password" name="phone">
                        <label for="floatingPassword">Phone</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingPassword"
                            placeholder="Password" name="email">
                        <label for="floatingPassword">Email</label>
                    </div>



                    <div class="clearfix">

                        <span> <button type="submit" name="submit" class="btn btn-primary float-end">Save</button></span>
                    </div>

                </form>



<?php

if(isset($_POST['submit'])){


     $photo = upload_image('photo', 'img/');
          
       $f_name = $_POST['f_name'];
        $l_name = $_POST['l_name'];
         $gender=$_POST['gender'];
         $date = $_POST['date'];
          $a_role = $_POST['a_role'];
         $address = $_POST['address'];
         $city = $_POST['city'];
          $state = $_POST['state'];
          $phone = $_POST['phone'];
          $email = $_POST['email'];
        
$sql = mysqli_query($conn,"INSERT INTO `staff_member`(`photo`, `f_name`, `l_name`, `gender`, `date`, `a_role`, `address`, `city`, `state`, `phone`, `email`)
 VALUES ('$photo','$f_name','$l_name','$gender','$date','$a_role','$address','$city','$state','$phone','$email')");

         
        if($sql){
            echo "<script>alert('Staff member added successfully');location.href='view-staff.php';</script>";
        }else{
            echo "<script>alert('error');location.href='view-staff.php';</script>";
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