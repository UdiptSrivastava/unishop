<?php
   session_start();
   $_SESSION['flag']=0;
   include("connect.php");      
   if(isset($_SESSION['uid']))
   {
      $email=$_SESSION['uid'];
      $_SESSION['flag']=1;
   }
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>UniShop - Your one stop for buying and selling all you need. </title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!--enable mobile device-->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--fontawesome css-->
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <!--bootstrap css-->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!--animate css-->
      <link rel="stylesheet" href="css/animate-wow.css">
      <!--main css-->
      <link rel="stylesheet" href="css/style2.css">

      <link rel="stylesheet" href="css/bootstrap-select.min.css">
      <link rel="stylesheet" href="css/slick.min.css">
      <!--responsive css-->
      <link rel="stylesheet" href="css/responsive.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
      <link rel="stylesheet" href="css/bootstrap-social.css">

   </head>
   <body>
      <header id="header" class="top-head">
         <!-- Static navbar -->
         <nav class="navbar navbar-default">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-4 col-sm-12 left-rs">
                     <div class="navbar-header">
                        <button type="button" id="top-menu" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a href="index.php" class="navbar-brand"><img src="images/Unilogo.png" alt="" /></a>
                     </div>
                  </div>
                  <div class="col-md-8 col-sm-12">
                     <div class="right-nav">
                        <div class="login-sr">
                           <div class="login-signup">
                              <ul>
                                <?php if($_SESSION["flag"]==1) { ?>
                                 <li><a href="action.php?pid=3" class="custom-b">Logout</a></li>
                              <?php }  else { ?>
                                 <li><a href="login.php" class="custom-b">Login</a></li>
                                 <li><a class="custom-b" href="signup.php">Sign up</a></li>
                              <?php } ?>
                              </ul>
                           </div>
                        </div>
                       <div class="help-r hidden-xs">
                           <div class="help-box">
                              <ul>
                                 <li> <a data-toggle="modal" data-target="#myModal" href="#"> <span></span><?php if($_SESSION["flag"]==0){ ?> <img src="images/uni.png" alt="" width="45"  height="45"/><?php } if($_SESSION["flag"]==1){ if($_SESSION["uni"] == "DSCE"){?><img src="images/dsceflag.png" alt="" /><?php } else if( $_SESSION["uni"]=="BIT") {?> <img src="images/bitlogo.png" alt="" width="45"  height="45"/> <?php } else { ?> <img src="images/jadavpur.png" alt="" width="45"  height="45"/><?php } if($_SESSION["flag"]==1){echo $_SESSION["uni"];} }?></a> </li>
                              </ul>
                           </div>
                        </div>
<?php if($_SESSION["flag"]==1) { ?>
                                    <div class="nav-b hidden-xs">
                                       <div class="nav-box">
                                          <ul>
                                             <li><img src="images/wlist.png" alt="" width="40" height="40"/><a href="wishlist.php">Wishlist</a></li>

                                          </ul>
                                       </div>

                                    </div>

                                                 <div class="nav-b hidden-xs">
                                                   <div class="nav-box">
                                                      <ul>
                                                         <li><img src="images/ppic.png" alt="" width="40" height="40"/><a href="profile.php">Profile</a></li>

                                                      </ul>
                                                   </div>

                                                </div>

                                                <div class="nav-b hidden-xs">
                                                   <div class="nav-box">
                                                      <ul>
                                                         <li><img src="images/how.png" alt="" width="40" height="40"/><a href="howitworks.php">How it works</a></li>

                                                      </ul>

                                                   </div>

                                                </div>


                                    <?php } ?>
                     </div>
                  </div>

               </div>
            </div>

            <!--/.container-fluid -->
         </nav>
      </header>
      <!-- Modal -->
       <div class="modal fade lug" id="myModal" role="dialog">
         <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Change</h4>
               </div>
               <div class="modal-body">
                  <ul>
                     <li><a href="#"><img src="images/dscelogo.png" alt="" /> DSCE</a></li>
                     <li><a href="#"><img src="images/bitlogo.png" alt="" /> BIT </a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>

      <div id="sidebar" class="top-nav">
         <ul id="sidebar-nav" class="sidebar-nav">
            <li><a href="#">Help</a></li>
            <li><a href="howitworks.html">How it works</a></li>
            <li><a href="#">chamb for Business</a></li>
         </ul>
      </div>
