
<?php include "common/header.php";?>


            <!-- Sale & Revenue Start -->



         


            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                          <?php
          $query = "select * from `member`";
          $fire = mysqli_query($conn, $query);
          $total_member = mysqli_num_rows($fire);
          ?>
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                               
                                <h6 class="mb-0">Total Member</h6>
                                 <p class="mb-2"><?php echo $total_member; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                             <?php
          $query = "select * from `staff_member`";
          $fire = mysqli_query($conn, $query);
          $total_staff_member = mysqli_num_rows($fire);
          ?>
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                               
                                <h6 class="mb-0">Total Staff Member</h6>
                                 <p class="mb-2"><?php echo $total_staff_member; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                            <?php
          $query = "select * from `group`";
          $fire = mysqli_query($conn, $query);
          $total_group = mysqli_num_rows($fire);
          ?>
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                
                                <h6 class="mb-0">Total Group</h6>
                                <p class="mb-2"><?php echo $total_group; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                             <?php
          $query = "select * from `membership`";
          $fire = mysqli_query($conn, $query);
          $total_membership = mysqli_num_rows($fire);
          ?>
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                
                                <h6 class="mb-0">Total Membership</h6>
                                <p class="mb-2"><?php echo $total_membership;?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->


            


            <?php include "common/footer.php";?>