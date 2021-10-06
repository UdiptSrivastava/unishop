<?php include("header.php");
   $cat="";
    if(isset($_GET['cat']))
    {
    	$cat=$_GET['cat'];
      if($_SESSION["flag"]==1)
                  {
    	               $sql=mysqli_query($con,"SELECT * from product
						         where cat='$cat' and university='$_SESSION[uni]'")or die('ERROR'.mysqli_error($con));
                   }else
                   {
                     $sql=mysqli_query($con,"SELECT * from product
						         where cat='$cat'")or die('ERROR'.mysqli_error($con));
                   }
    }

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
                     <h4>It has never been easier.</h4>
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
               </div>
               <div><a><br><br></a></div>
               <div><a><br><br></a></div>
 <div class="row clearfix">
 					<?php
                $count=0;
 					while($rs=mysqli_fetch_array($sql))
					{
                  $count+=1;
                  ?>

                  <div class="container mt-5 mb-5">
                     <div class="d-flex justify-content-center row">
                           <div style="margin:10px;" class="col-md-10">
                              <div class="row p-2 bg-white border rounded">
                                 <form action="action.php?pid=7" method="POST" name="form">
                                 <div class="col-md-4 mt-1"><img  style="border-radius: 8px; border: 2px solid #ddd;   " class="img-fluid img-responsive rounded product-image" src="image/<?php echo $rs[8];?>"></div>
                                 <div class="col-md-6 mt-1">
                                       <h3 style="color:white"><?php echo $rs[5];?></h3>
                                        <input type="hidden" name="name" value="<?php echo $rs[6]; ?>">
                                        <input type="hidden" name="cat" value="<?php echo $cat; ?>">
                                        <input type="hidden" name="img" value="<?php echo $rs[9]; ?>">
                                         <input type="hidden" name="sno" value="<?php echo $rs[0]; ?>">

                                       <div class="mt-1 mb-1 spec-1" ><span style="color:white">Category: </span><span class="dot"></span><span style="color:white"><?php echo $rs[7]; ?></span><span class="dot"></span></div>

                                       <p style="color:white" class="text-justify text-truncate para mb-0"><span style="color:white">Description: </span><?php echo $rs[6];?> <br><br></p>
                                 </div>
                                 <div class="align-items-center align-content-center col-md-4 border-left mt-1">
                                       <div class="d-flex flex-row align-items-center">
                                          <h3 style="color:white" class="mr-1">Rs. <?php echo $rs[9];?></h3>
                                       </div>

																			 <div class="d-flex flex-column mt-4"><a href="detail.php?sno=<?php echo $rs[0]?>"><button class="btn btn-primary btn-md"  name="details" type="button">Details</button></a>

                                                           <span  class="d-flex flex-column mt-4"><button type="submit" class="btn btn-primary btn-md"  name="submit" value="submit" >Add to Wishlist  <img src="images/wlist.png" alt="" width="22" height="22"/></button></a> </span>
                                                        </div>
                                 </div>
                              </form>
                              </div>


                           </div>
                     </div>
                  </div>


              <?php } ?>
              <?php if($count==0) { ?>

                  <div class="container mt-5 mb-5">
                     <div class="d-flex justify-content-center row">
                           <div style="margin:10px;" class="col-md-10">
                              <div class="row p-2 bg-white border rounded">
                                 <div class="col-md-4 mt-1"><img class="img-fluid img-responsive rounded product-image" width="1000" height="1200" style="border-radius: 8px; border: 2px solid #ddd;"  src="image/notfound.jpg"></div>
                                 <div class="col-md-6 mt-1">
                                       <h3 style="color:white">SORRY! No Item Found.</h3>


                                 </div>

                              </div>


                           </div>
                     </div>
                  </div>

                 <?php }?>

                  <div class="categories_link">
                     <a href="index.php">Browse all categories here</a>
                  </div>
               </div>
           </div>
       </div>
   </div>

<?php include("footer.php") ?>
