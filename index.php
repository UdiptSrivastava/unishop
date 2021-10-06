<?php include ("header.php")

?>
<style>
   .sub{
      background: #1d99ff;
    color: #ffffff;
    min-height: 55px;
    width: 100%;
    line-height: 38px;
    font-size: 22px;
    font-weight: 500;
    border-radius: 3px;
   }
</style>
 <div class="page-content-product">
         <div class="main-product">
            <div class="container">
               <div class="row clearfix">
                  <div class="find-box">
                     <h1>Find your required product or<br>your customer here.</h1>
                     <h4>Your one stop for buying and selling all you need.</h4>
                     <div class="product-sh">
                        <div class="col-sm-6">
                           <form action="action.php?pid=5" method="POST" name="form">
                           <div class="form-sh">
                              <input type="text" name="item" placeholder="Search something you love" >

                           </div>
                        </div>

                        <div class="col-sm-3">
                           <button type="submit" name="submit" id="submit" class="sub">Search</button>
                        </div>
                     </form>

                     </div>
                  </div>
               </div>
               <div><a><br><br></a></div>
               <?php if($_SESSION['flag']==1) { ?>
               <div class="form-sh"> <a class="btn" href="sell.php">Want to sell your items? Click Here</a> </div> <?php } else { ?>
                  <div class="form-sh"> <a class="btn" href="login.php">Want to sell your items? Login Now</a> </div>
                  <?php } ?>
               <div><a><br><br> <br></a></div>
               <div class="categories_link">
                  <a href="#">Browse all categories here<br><br></a>
               </div>
               <div class="row clearfix">
                  <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="product.php?cat=Books/Notes">
                        <div class="box-img">
                           <h4>Books/Notes</h4>
                           <img src="images/product/book.png" alt="" />
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="product.php?cat=electronics">
                        <div class="box-img">
                           <h4>Electronics</h4>
                           <img src="images/product/Electronics.png" alt="" />
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="product.php?cat=Gym Essentials">
                        <div class="box-img">
                           <h4>Gym Essentials</h4>
                           <img src="images/product/gym2.png" alt="" />
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="product.php?cat=Home Essentials">
                        <div class="box-img">
                           <h4>Home Accessories</h4>
                           <img src="images/product/Kitchen.png" alt="" />
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="product.php?cat=Sports">
                        <div class="box-img">
                           <h4>Sports</h4>
                           <img src="images/product/Sports.png" alt="" />
                        </div>
                     </a>
                  </div>

                  <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="product.php?cat=Furniture">
                        <div class="box-img">
                           <h4>Furniture</h4>
                           <img src="images/product/12.png" alt="" />
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="product.php?cat=Miscellaneous">
                        <div class="box-img">
                           <h4>Miscellaneous</h4>
                           <img src="images/product/Recreational-Other.png" alt="" />
                        </div>
                     </a>
                  </div>
                  <div class="categories_link">
                     <a><br><br>MORE ABOUT US:</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="cat-main-box">
         <div class="container">
            <div class="row panel-row">
               <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay="0.0s">
                  <div class="panel panel-default">
                     <div class="panel-body">
                        <img src="images/xpann-icon.jpg" class="icon-small" alt="">
                        <h4>“UniShop” at your University</h4>
                        <p>Look through what your seniors or juniors want to sell. Find your essentials and be cost-effective.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                  <div class="panel panel-default">
                     <div class="panel-body">
                        <img src="images/create-icon.jpg" class="icon-small" alt="">
                        <h4>Create and add</h4>
                        <p>Grow easily with UniShop. Create free account.
                           Create your own channel of income. Or sell-off your unrequired stuff before graduation.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 wow fadeIn hidden-sm" data-wow-delay="0.4s">
                  <div class="panel panel-default">
                     <div class="panel-body">
                        <img src="images/get-icon.jpg" class="icon-small" alt="">
                        <h4>Get inspired</h4>
                        <p>Create your own products- Artpieces or personalised T-Shirts. Sell what you want.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="products_exciting_box">
         <div class="container">
            <div class="row">
               <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                  <div class="exciting_box f_pd">
                     <img src="images/exciting_img-01.jpg" class="icon-small" alt="" />
                     <h4>Explore <strong>exciting</strong> and essential products
                        tailored for you.
                     </h4>
                     <p>Find what you need for your life in University. Stay prepared and cost-effective.
                     </p>
                  </div>
               </div>
               <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                  <div class="exciting_box l_pd">
                     <img src="images/exciting_img-02.jpg" class="icon-small" alt="" />
                     <h4><strong>List your products on</strong> UniShop and grow connections.</h4>
                     <p>Sell your unrequired stuff to the people who may need it. Make some bank.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="start-free-box">
         <div class="container">
            <div class="row">
               <div class="container">
                  <div class="main-start-box">
                     <div class="free-box-a clearfix">
                        <div class="col-md-6 col-sm-6">
                           <div class="left-a-f">
                              <h3 style="color: white;">A platform built for students & connections. Start for free.</h3>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                           <div class="right-a-f">
                              <p>Over the comming years, UniShop hopes to expand to various colleges and universities worldwide with a single aim of providing the students with a cost-effective platform for shopping.
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
<?php include ("footer.php") ?>
