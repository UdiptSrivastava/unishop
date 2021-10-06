<?php include("header.php");
  
   $sql=mysqli_query($con," SELECT *  FROM wishlists WHERE username='$_SESSION[uid]'")or die('Error:- '.mysqli_error($con));
?>
<div class="page-content-product">
	 <div class="main-product">
            <div class="container">
            	<div class="row clearfix">
                  <div class="find-box">
                     
                     <div class="product-sh">
                        <div class="col-sm-6">
                           
                        </div>
                       
                        <div class="col-sm-3">
                           
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
                                 <form action="action.php?pid=8" method="POST" name="form">
                                 <div class="col-md-4 mt-1"><img  style="border-radius: 8px; border: 2px solid #ddd;   " class="img-fluid img-responsive rounded product-image" src="image/<?php echo $rs[4];?>"></div>
                                 <div class="col-md-6 mt-1">
                                       <h3 style="color:white"><?php echo $rs[3];?></h3>
                                        <input type="hidden" name="sno" value="<?php echo $rs[1]; ?>">
                           
                                 </div>

                                  <div class="d-flex flex-column mt-4"><a href="detail.php?sno=<?php echo $rs[1]?>"><button class="btn btn-primary btn-md"  name="details" type="button">Details</button></a>

                                     <span class="d-flex flex-column mt-4"><button class="btn btn-primary btn-md"  name="submit" type="submit">Remove</button></span>
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
