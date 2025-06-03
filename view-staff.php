
<?php include "common/header.php";?>

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
                                        <th scope="col">Staff Member Name</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Mobile No.</th>
                                         <th scope="col">Action</th>
                                    </tr>
                                </thead>
                              <tbody>

          <?php

 $sql = mysqli_query($conn, "SELECT * FROM `staff_member` order by id desc");
                   while ($row = mysqli_fetch_assoc($sql)) {

                      $photo = $row['photo'];
                  
                       echo "<tr>
                               <td>{$row['id']}</td>
                               <td><img src=\"{$row['photo']}\" width=\"50px\" height=\" 50px\" alt=\"\"></td>
                               <td>{$row['f_name']}</td>
                               <td>{$row['a_role']}</td>
                              <td>{$row['email']}</td>
                               <td>{$row['phone']}</td>
                              
                               <td><a class='btn btn-sm btn-info' href='view-staff.php?id={$row['id']}'><i class='fa fa-edit'></i></a> 
                   <a class='btn btn-sm btn-danger' href='delete_staffmember.php?id={$row['id']}'><i class='fa fa-trash'></i></a></td>
                             </tr>";
                   }
                   ?>


                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                </div>


<?php include "common/footer.php";?>








