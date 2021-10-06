<footer>
    <!--fontawesome css-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
         <div class="main-footer">
            <div class="container">
               <div class="row">

                  <div class="footer-link-box clearfix">
                     <div class="col-md-6 col-sm-6">
                        <div class="left-f-box">
                           <div class="col-sm-4">
                             <h2>SELL ON UniShop</h2>
                              <ul>
                                 <li><a href="signup.php">Create account</a></li>
                                 <li><a href="howitworks.php">How it works suppliers</a></li>

                              </ul>
                           </div>
                           <div class="col-sm-4">
                              <h2>BUY ON Unishop</h2>
                              <ul>
                                 <li><a href="signup.php">Create account</a></li>
                                 <li><a href="howitworks.php">How it works buyers</a></li>
                                 <li><a href="index.php">Categories</a></li>
                              </ul>
                           </div>

                        </div>
                     </div>

                  </div>
               </div>
            </div>
         </div>
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-md-8">
                     <p><img width="90" src="images/Unilogo.png" alt="#" style="margin-top: -5px;" /> All Rights Reserved. UniShop © 2021</p>
                  </div>
                  <div class="col-md-4">

                     <ul class="right-flag">
                         <li> <a data-toggle="modal" data-target="#myModal" href="#" > <span></span><?php if($_SESSION["flag"]==0){ ?> <img src="images/uni.png" alt="" width="115"  height="115"  /><?php } if($_SESSION["flag"]==1){ if($_SESSION["uni"] == "DSCE"){?><img src="images/dsceflag.png" alt="" width="115"  height="115"/><?php } else if( $_SESSION["uni"]=="BIT") {?> <img src="images/bitlogo.png" alt="" width="115"  height="115"/> <?php } else { ?> <img src="images/jadavpur.png" alt="" width="115"  height="115"/><?php } if($_SESSION["flag"]==1){echo $_SESSION["uni"];} }?></a> </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </footer>

   </body>
</html>
