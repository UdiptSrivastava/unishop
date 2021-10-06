<?php
  include ("header.php");
  $fla=0;
  if(isset($_GET['page']) ){

    }else{
        unset($_SESSION['pasmsg']) ;
        unset($_SESSION['emsg']) ;
        unset($_SESSION['namemsg']) ;
        unset($_SESSION['usemsg']) ;
        unset($_SESSION['phmsg']) ;
        unset($_SESSION['unimsg']) ;
        unset($_SESSION['pricemsg']) ;
        unset($_SESSION['imgmsg']) ;
    }
    if(isset($_GET['name']) ){
        $name=$_GET['name'];
        $username=$_GET['username'];
        $fla=1;

    }
  ?>
 <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <?php if($fla==1){ ?>
                            <h3>Complete the Form to Register</h3>
                          <?php }else{   ?>
                             <h3>Register</h3>
                           <?php } ?>  
                        <p>Fill in the data below.</p>
                        <?php if($fla==1){ ?>
                            <form class="requires-validation" novalidate name="form" method="POST" action="action.php?pid=9">
                          <?php }else{   ?>
                            <form class="requires-validation" novalidate name="form" method="POST" action="action.php?pid=2">
                           <?php } ?>  
                        
                            <?php if($fla==0){ ?>
                            <div class="col-md-12">
                               <input class="form-control" style="font-weight: bold; color:black;" type="text" name="name" placeholder="Full Name" required>
                               <?php if(isset($_SESSION['namemsg'])){ ?>
                                    <div class="invalid-feedback">Name field cannot be blank!</div>;
                                 <?php }
                                 ?>
                            </div>
                            <?php }
                            else{
                                ?>
                                <div class="col-md-12">
                               <input class="form-control" style="font-weight: bold; color:black;" type="text" name="name" value="<?php echo $name ?>" placeholder="<?php echo $name ?>" required readonly>
                               <?php if(isset($_SESSION['namemsg'])){ ?>
                                    <div class="invalid-feedback">Name field cannot be blank!</div>;
                                 <?php }
                                 ?>
                            </div>
                            <?php }?>


                            <?php if($fla==0){ ?>
                            <div class="col-md-12">
                                <input class="form-control" style="font-weight: bold; color:black;" type="text" name="username" placeholder="Username" required >
                                <?php if(isset($_SESSION['usemsg'])){ ?>
                                    <div class="invalid-feedback">Username field cannot be blank!</div>;
                                 <?php }
                                 ?>
                            </div>
                            <?php }
                            else{
                                ?>
                                 <div class="col-md-12">
                                <input class="form-control" type="text" style="font-weight: bold; color:black;" name="username" value="<?php echo $username ?>" placeholder="<?php echo $username ?>"  required readonly>
                                <?php if(isset($_SESSION['usemsg'])){ ?>
                                    <div class="invalid-feedback">Username field cannot be blank!</div>;
                                 <?php }
                                 ?>
                            </div>
                            <?php }?>
                            

                       

                            <div class="col-md-12">
                                <input class="form-control" type="text" style="font-weight: bold; color:black;" name="phonenumber" placeholder="Phone number:" required>
                                <?php if(isset($_SESSION['phmsg'])){ 
                                    if($_SESSION['phmsg']=='1'){ ?>
                                        <div class="invalid-feedback">Phone Number field cannot be blank!</div>;
                                    <?php } else if($_SESSION['phmsg']=='2') {?>
                                        <div class="invalid-feedback">Phone Number must be 10 digits</div>;
                                 <?php } else if($_SESSION['phmsg']=='3') {?>
                                        <div class="invalid-feedback">Phone number can only contain numbers</div>;
                                <?php }
                                }
                                 ?>
                            </div>
                            <div class="col-md-12">
                                <select class="form-select mt-3" style="font-weight: bold; color:black;" required name="university">
                                      <option selected disabled value="">Select Your University</option>
                                      <option value="DSCE">DSCE</option>
                                      <option value="BIT">BIT</option>
                                      <option value="Jadavpur">Jadavpur</option>
                                     
                               </select>
                               <?php if(isset($_SESSION['unimsg'])){ ?>
                                    <div class="invalid-feedback">University field cannot be blank!</div>;
                                 <?php }
                                 ?>
                           </div>

                            <?php if($fla==0){ ?>
                           <div class="col-md-12">
                              <input class="form-control" type="password" style="font-weight: bold; color:black;" name="password" placeholder="Password" required>
                                 <?php if(isset($_SESSION['pasmsg'])){ ?>
                                    <div class="invalid-feedback">Password field cannot be blank!</div>;
                                 <?php }
                                 ?>
                           </div>
                           <?php } ?>


                           <div class="col-md-12 mt-3">
                            <label class="mb-3 mr-1" for="gender">Gender: </label>

                            <input type="radio" class="btn-check" name="gender" id="male" value="male" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="male">Male</label>

                            <input type="radio" class="btn-check" name="gender" id="female" value="female" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="female">Female</label>

                            <input type="radio" class="btn-check" name="gender" id="other" value="other" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="female">Other</label>

                            <input type="radio" class="btn-check"  checked name="gender" id="secret" value="unknown" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="secret">Secret</label>



                            <div class="form-button mt-3">
                                <button id="submit" type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                            <br>
                        </form>
                        <?php if(isset($_SESSION['emsg'])){ ?>

                        <div class="invalid-feedback">This Username is already Registered. Go to Login Page </div>;
                        <?php }
                        ?>
                        <div>
                            <?= $login_button ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include ("footer.php") ?>
