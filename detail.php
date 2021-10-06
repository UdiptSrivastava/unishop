<?php
 include("header.php");


	include ("connect.php");
    $sno=$_GET['sno'];
    $sql=mysqli_query($con,"select * from product where sno='$sno' ")or die('Error:- '.mysqli_error($con));

    while($rs=mysqli_fetch_array($sql))
    {
 ?>
<br> <br> <br>

<div class="container container-contact bootstrap snippets bootdeys bootdey">
    <div class="row decor-default">
        <div class="col-md-12">
          <div class="contact">
            <div class="controls">
              <span class="icon icon-folder" data-toggle="tooltip" data-placement="top" title="" data-original-title="Archive"></span>
              <span class="icon icon-delete" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></span>
              <span class="icon icon-close" data-toggle="tooltip" data-placement="top" title="" data-original-title="Close"></span>
              <span class="write" data-toggle="tooltip" data-placement="top" title="" data-original-title="New"></span>
              <img style="margin:20px; border-radius: 8px; border: 2px solid #ddd; padding:10px;height: 300px;width: 300px" src="image/<?php echo $rs[8];?>" alt="cover" class="cover">


            <div class="row">
              <div class="col-md-4 col-md-5 col-xs-12">
                <div style="color:white ; font-size: large;" class="row">
                  <div style="color:white ; " class="col-xs-3">
                    Name:
                  </div>
                  <div style="color:white" class="col-xs-9">
                        <?php echo $rs[1];?>
                  </div>
                  <div  style="color:white" class="col-xs-3">
                    Phone:
                  </div>
                  <div  style="color:white" class="col-xs-9">
                    <?php echo $rs[3];?>
                  </div>
                  <div  style="color:white" class="col-xs-3">
                    Address:
                  </div>
                  <div style="color:white" class="col-xs-9">
                    <?php echo $rs[2];?>
                  </div>


                  <div style="color:white" class="col-xs-3">
                    Year:
                  </div>
                  <div style="color:white" class="col-xs-9">
                  <?php echo $rs[4];?>
                  </div>
                  <div>
                    <span class="col-lg-12" ><button type="submit" class="btn btn-primary btn-md"  name="submit" value="submit" >Add to Wishlist  <img src="images/wlist.png" alt="" width="22" height="22"/></button></a> </span>
                  </div>
                </div>
              </div>

              <div style="color:white ; font-size: large; " class="col-lg-8 col-md-7 col-xs-12">
              <p style="color:white ;margin:10px; " class="contact-description">Product Name: <?php echo $rs[5];?> </p>
              <p style="color:white ;margin:10px;" class="contact-description">Product Category: <?php echo $rs[7];?> </p>
                <p style="margin:10px;color:white" class="contact-description">Product Description: <?php echo $rs[6];?> </p>
                <p style="color:white" class="contact-description">Product Price: Rs. <?php echo $rs[9];?> </p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>

 <?php }
 include("footer.php");
 ?>
