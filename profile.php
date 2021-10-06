<?php include("header.php");

if($_SESSION["flag"]==1)
{
    $sql=mysqli_query($con,"SELECT * from login  where username='$_SESSION[uid]' ")or die('ERROR'.mysqli_error($con));
    $rs=mysqli_fetch_array($sql);
}


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
              <img style="margin:20px; border-radius: 8px; border: 2px solid #ddd; padding:10px;" src="images/pro.png" alt="cover" width="200" height="200" class="cover">


            <div class="row">
              <div class="col-md-4 col-md-5 col-xs-12">
                <div style="color:white ; font-size: large;" class="row">
                  <div style="color:white ; " class="col-xs-3">
                    Name:
                  </div>
                  <div style="color:white" class="col-xs-9">
                        <?php echo $rs[1];?>
                  </div>
                  <div style="color:white ; " class="col-xs-3">
                    Username:
                  </div>
                  <div style="color:white" class="col-xs-9">
                        <?php echo $rs[2];?>
                  </div>
                  <div  style="color:white" class="col-xs-3">
                    Phone:
                  </div>
                  <div  style="color:white" class="col-xs-9">
                    <?php echo $rs[5];?>
                  </div>
                  <div  style="color:white" class="col-xs-3">
                    University:
                  </div>
                  <div style="color:white" class="col-xs-9">
                    <?php echo $rs[6];?>
                  </div>


                  <div style="color:white" class="col-xs-3">
                    Gender:
                  </div>
                  <div style="color:white" class="col-xs-9">
                  <?php echo $rs[4];?>
                  </div>
                  <div>
                    <span class="col-lg-12" ><a href="seller.php" action="seller.php"><button type="submit" class="btn btn-primary btn-md"  name="submit" value="submit" >Items You are Selling  <img src="images/s.png" alt="" width="25" height="25"/></button></a> </span>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
  </div>

<?php include("footer.php"); ?>
