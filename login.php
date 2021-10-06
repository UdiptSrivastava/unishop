<?php
 include ("header.php") ;
    if(isset($_GET['page']) ){

    }else{
        unset($_SESSION['passmsg']) ;
        unset($_SESSION['ermsg']) ;
        unset($_SESSION['usermsg']) ;
    }

 ?>

 <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Login </h3>
                        <p>Fill in the data below.</p>
                        <form class="requires-validation" novalidate name="form" method="POST" action="action.php?pid=1">

                            <div class="col-md-12">
                                <input class="form-control" type="username" name="username" placeholder="Username" required>
                                 <!-- <div class="valid-feedback">Email field is valid!</div> -->
                                 <?php if(isset($_SESSION['usermsg'])){ ?>
                                    <div class="invalid-feedback">Username field cannot be blank!</div>;
                                 <?php }
                                 ?>
                            </div>


                           <div class="col-md-12">
                              <input class="form-control" type="password" name="password" placeholder="Password" required>
                               <!-- <div class="valid-feedback">Password field is valid!</div> -->
                               <?php if(isset($_SESSION['passmsg'])){ ?>
                                    <div class="invalid-feedback">Password field cannot be blank!</div>;
                                <?php }
                                 ?>
                           </div>


                            <div class="form-button mt-3">
                                <button id="submit" type="submit" name="submit" class="btn btn-primary">Sign In</button>
                            </div>
                            <br>


                        </form>

                        <?php if(isset($_SESSION['ermsg'])){ ?>

                            <div class="invalid-feedback">Invalid Credentials</div>;
                            <?php }
                        ?>
                        <div>
                            
                        </div>
                          <li><p style="font-size:24px; font-family:'Georgia'"><br><br><h3>Do not have an account? </h3><a class="btn btn-primary" href="signup.php">Register here</a></p></li>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php include ("footer.php") ?>
