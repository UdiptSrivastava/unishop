<?php include("header.php");
 $fla=0;
 if(isset($_GET['er']) ){

   }else{
       unset($_SESSION['addmsgg']) ;
       unset($_SESSION['yearmsgg']) ;
       unset($_SESSION['pnamemsg']) ;
       unset($_SESSION['catmsg']) ;
       unset($_SESSION['detailmsg']) ;
       unset($_SESSION['pricemsg']) ;
   }
$sql1=mysqli_query($con,"select * from login where username = '$_SESSION[uid]'")or die('Error:- '.mysqli_error($con));
$rs = mysqli_fetch_array($sql1);

 ?>

 <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Sell Your Product</h3>
                        <p>Fill in the data below.</p>
                        <form class="requires-validation" novalidate name="form" action="action.php?pid=4" method="POST" enctype="multipart/form-data" >

                            <div class="col-md-12">
                               <input class="form-control" style="font-weight: bold; color:black;" type="text" name="name" value="<?php echo $rs[1]?>" readonly>


                            </div>

                            <div class="col-md-12">
                               <input class="form-control" style="font-weight: bold; color:black;" type="text" name="username" value="<?php echo $rs[2]?>" readonly>

                            </div>
                            <div class="col-md-12">
                               <input class="form-control" style="font-weight: bold; color:black;" type="text" name="uni" value="<?php echo $rs[6]?>" readonly>

                            </div>


                            <div class="col-md-12">
                                <input class="form-control" style="font-weight: bold; color:black;" type="text" name="add" placeholder="Your Address Around the Campus" required>
                                <?php if(isset($_SESSION['addmsgg'])){ ?>
                                    <div class="invalid-feedback">Address cannot be blank!</div>;
                                 <?php }
                                 ?>

                             </div>
                             <div class="col-md-12">
                               <input class="form-control" style="font-weight: bold; color:black;" type="text" name="cno" value="<?php echo $rs[5]?>" readonly>

                            </div>



                             <div class="col-md-12">
                                <select class="form-select mt-3"  style="font-weight: bold; color:black;" required name="year">
                                      <option selected disabled value="">Your current year </option>
                                      <option value="first">1st</option>
                                      <option value="second">2nd</option>
                                      <option value="third">3rd</option>
                                      <option value="fourth">4th</option>
                               </select>
                               <?php if(isset($_SESSION['yearmsgg'])){ ?>
                                    <div class="invalid-feedback">Year field cannot be blank!</div>;
                                 <?php }
                                 ?>

                           </div>

                            <div class="col-md-12">
                                <input class="form-control" style="font-weight: bold; color:black;" type="text" name="pname" placeholder="Product Name" required>
                                <?php if(isset($_SESSION['pnamemsg'])){ ?>
                                    <div class="invalid-feedback"> Product Name  cannot be blank!</div>;
                                 <?php }
                                 ?>

                            </div>
                            <div class="col-md-12">
                                <input class="form-control" style="font-weight: bold; color:black;" type="number" name="price" placeholder="Product Price" required>
                                <?php if(isset($_SESSION['pricemsg'])){ ?>
                                    <div class="invalid-feedback">Invalid Price</div>;
                                 <?php }
                                 ?>

                            </div>
                            <div class="col-md-12">
                                <input class="form-control" style="font-weight: bold; color:black;" type="text" name="detail" placeholder="Product Description" required>
                                <?php if(isset($_SESSION['detailmsg'])){ ?>
                                    <div class="invalid-feedback">Product Description cannot be blank!</div>;
                                 <?php }
                                 ?>

                            </div>

                           <div class="col-md-12">
                                <select class="form-select mt-3"  style="font-weight: bold; color:black;" required name="cat">
                                      <option selected disabled value="">Product Category</option>
                                      <option value="Books/Notes">Books</option>
                                      <option value="Furniture">Furniture</option>
                                      <option value="Sports">Sports</option>
                                      <option value="Gym Essentials">Gym Essentials</option>
                                      <option value="Electronics">Electronics</option>
                                      <option value="Home Essentials">Kitchen Accessories</option>
                                      <option value="Miscellaneous">Other</option>
                               </select>
                               <?php if(isset($_SESSION['catmsg'])){ ?>
                                    <div class="invalid-feedback">Category cannot be blank!</div>;
                                 <?php }
                                 ?>

                           </div>
                           <div class="col-md-12">
                                <input class="form-control" type="file" id="img" name="img">
                                <?php if(isset($_SESSION['imgmsg'])){ ?>
                                    <div class="invalid-feedback">Select an image</div>;
                                 <?php }
                                 ?>

                            </div>




                            <div class="form-button mt-3">
                                <button id="submit" type="submit" name="submit"  class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include("footer.php") ?>
