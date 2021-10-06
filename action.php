<?php
session_start();
	$pid=$_GET['pid'];
	$cd=date("d-m-y");
	include ("connect.php");
	if($pid==1) //sign in
	{
		if(isset($_POST['submit']))
		{
			$flagg=0;
			if (empty ($_POST["username"])) {
				$_SESSION['usermsg']="Username cannot be empty";
				$flagg=1;
			} else {
				$username = $_POST["username"];
				unset($_SESSION['usermsg']) ;
			}
			if (empty ($_POST["password"])) {
				$_SESSION['passmsg']="Password cannot be empty";
				$flagg=1;
			} else {
				$pass = $_POST["password"];
				unset($_SESSION['passmsg']) ;
			}
			if($flagg==0)///password/ username not empty
			{

				$sql=mysqli_query($con,"select * from login where username='$username'")or die('Error:- '.mysqli_error($con));
				$rs =mysqli_fetch_array($sql);
				$passs=$rs[3];


				if(mysqli_num_rows($sql)>0 )//username matched
				{
					// echo $passs;
					if(password_verify($pass, $passs))//password match
					{

						$_SESSION['uid']=$username;
						$_SESSION['uni']=$rs[6];
						unset($_SESSION['ermsg']) ;
						header('location:index.php');
					}
					else//password did not match
					{
						$_SESSION['ermsg']="Password did not match";
						header('location:login.php?page=1');
					}
				}

				else//username did not match
				{
					$_SESSION['ermsg']="Invalid Username";
					header('location:login.php?page=1');
				}

			}
			else//password or username is empty
			{
				unset($_SESSION['ermsg']) ;
				header('location:login.php?page=1');
			}
		}
	}


	if($pid==2) //sign up
		{
			if(isset($_POST['submit']))
			{
				$flagg=0;
				if (empty ($_POST["username"])) {
					$_SESSION['usemsg']="Username cannot be empty";
					$flagg=1;
				} else {
					$username = $_POST["username"];
					unset($_SESSION['usemsg']) ;
				}
				if (empty ($_POST["password"])) {
					$_SESSION['pasmsg']="Password cannot be empty";
					$flagg=1;
				} else {
					$passs=$_POST['password'];
					$pass= password_hash($passs, PASSWORD_DEFAULT);
					unset($_SESSION['pasmsg']) ;
				}
				if (empty ($_POST["name"])) {
					$_SESSION['namemsg']="Name cannot be empty";
					$flagg=1;
				} else {
					$name = $_POST["name"];
					unset($_SESSION['namemsg']) ;
				}
				if (empty ($_POST["university"])) {
					$_SESSION['unimsg']="University cannot be empty";
					$flagg=1;
				} else {
					$_SESSION['uni'] = $_POST["university"];
					unset($_SESSION['unimsg']) ;
				}
				if (empty ($_POST["phonenumber"])) {
					$_SESSION['phmsg']="1";
					$flagg=1;
				} 
				else if(strlen($_POST["phonenumber"])<10 or strlen($_POST["phonenumber"])>10)
				{
					$_SESSION['phmsg']="2";
					$flagg=1;
					
				}else if(preg_match('#[^0-9]#',$_POST["phonenumber"])){
					$_SESSION['phmsg']="3";
					$flagg=1;
					
				}
				else{
					$name = $_POST["phonenumber"];
					unset($_SESSION['phmsg']) ;
				}

				
				if($flagg==0)
				{
					$sql1=mysqli_query($con,"select * from login where username='$username'")or die('Error:- '.mysqli_error($con));
					if(mysqli_num_rows($sql1)>0)// when already a member
					{
						$_SESSION['emsg']="Already registered!!";
						header('location:signup.php?page=1');

					}
					else // sign up
					{
						$sql2=mysqli_query($con,"insert into login (name,username,password,gender,contact,university) values('$_POST[name]','$_POST[username]','$pass','$_POST[gender]','$_POST[phonenumber]','$_POST[university]')")or die('Error:- '.mysqli_error($con));
						unset($_SESSION['emsg']) ;
						$_SESSION['uid']=$username;
						header('location:index.php');
					}

				}
				else
				{
					unset($_SESSION['emsg']) ;
					header('location:signup.php?page=1');

				}
			}
		}

	if($pid==3) // logout button
	{
		unset($_SESSION['uid']) ;
		unset($_SESSION['uni']) ;
		header('location:index.php');

	}
	if($pid==4) // adding item to sell(sell.php)
	{
		if(isset($_POST['submit']))
		{
				$flagg=0;
				if (empty ($_POST["add"])) {
					$_SESSION['addmsgg']="Address cannot be empty";
					$flagg=1;
				} else {
				
					unset($_SESSION['addmsgg']) ;
				}

				
				if (empty ($_POST["year"])) {
					$_SESSION['yearmsgg']="Year cannot be empty";
					$flagg=1;
				} else {
			
					unset($_SESSION['yearmsgg']) ;
				}

				if (empty ($_POST["pname"])) {
					$_SESSION['pnamemsg']="Product Name cannot be empty";
					$flagg=1;
				} else {
					$name = $_POST["pname"];
					unset($_SESSION['pnamemsg']) ;
				}


				if (empty ($_POST["cat"])) {
					$_SESSION['catmsg']="Category cannot be empty";
					$flagg=1;
				} else {
					unset($_SESSION['catmsg']) ;
				}


				if (empty ($_POST["detail"])) {
					$_SESSION['detailmsg']="Detail cannot be empty";
					$flagg=1;
				} else {
					unset($_SESSION['detailmsg']) ;
				}


				if (empty ($_POST["price"])) {
					$_SESSION['pricemsg']="1";
					$flagg=1;
				} 
				else if(preg_match('#[^0-9]#',$_POST["price"])){
					$_SESSION['pricemsg']="2";
					$flagg=1;
					
				}
				else{
					unset($_SESSION['pricemsg']) ;
				}

			$file_name=$_FILES["img"]["name"];
			if($file_name==""){
				$_SESSION['imgmsg']="1";
					$flagg=1;
			}else{
				unset($_SESSION['imgmsg']) ;
			}



			if($flagg==0)
			{
				$file_location=$_FILES["img"]["tmp_name"];
				$ext=end(explode('.', $file_name));
				$num=rand(100000,999999);
				$img=$num."."."$ext";
				$upload_path="image/".$img;
					move_uploaded_file($file_location,$upload_path);

				$sql=mysqli_query($con,"insert into product(name,address,contact,year,pname,detail,cat,image,price,university,username) values ('$_POST[name]','$_POST[add]','$_POST[cno]','$_POST[year]','$_POST[pname]','$_POST[detail]','$_POST[cat]','$img','$_POST[price]','$_POST[uni]','$_POST[username]')")or die('Error:- '.mysqli_error($con));
				//header('location:detail.php');
				$_SESSION['msg']="Record saved !!!";
				header('location:index.php');
			}else{
				header('location:sell.php?er=1');
			}

		}
	}

	if($pid==5) 
	{
		if(isset($_POST['submit']))
		{
			$val=$_POST['item'];
			$sql=mysqli_query($con," SELECT *  FROM product WHERE pname LIKE '%$val%';")or die('Error:- '.mysqli_error($con));
			header("location:item.php?val=$val");
		}

	}
	if($pid==6)//add to wishlist from item page
	{
		if(isset($_POST['submit']))
		{
			$sno=$POST['sno'];
			$sql=mysqli_query($con,"select * from product where sno='$sno' ")or die('Error:- '.mysqli_error($con));
			$rs=mysqli_fetch_array($sql);
			
			
			$sql=mysqli_query($con,"insert into wishlists(pid,username,item,image) values('$rs[0]','$_SESSION[uid]','$rs[5]','$rs[8]')")or die('Error:- '.mysqli_error($con));
			header("location:wishlist.php");
		}

	}
	if($pid==7) // adding to wishlist
	{
		if(isset($_POST['submit']))
		{
			$val=$_POST['name'];
			$cat=$_POST['cat'];
			$img=$_POST['img'];
			$sql=mysqli_query($con,"insert into wishlists(pid,username,item,image) values('$_POST[sno]','$_SESSION[uid]','$val','$img')")or die('Error:- '.mysqli_error($con));
			header("location:product.php?cat=$cat");
		}
	}
	if($pid==8) //delete from wishlist
	{
		if(isset($_POST['submit']))
		{

			$sql=mysqli_query($con,"delete from wishlists where pid='$_POST[sno]' and username='$_SESSION[uid]'")or die('Error:- '.mysqli_error($con));
			header("location:wishlist.php");
		}
	}
	if($pid==9) //sign up with google
		{
			if(isset($_POST['submit']))
			{
				$flagg=0;
				if (empty($_POST["university"])) {
					$_SESSION['unimsg']="University cannot be empty";
					$flagg=1;
				} else {
					$_SESSION['uni'] = $_POST["university"];
					unset($_SESSION['unimsg']) ;
				}
				if (empty ($_POST["phonenumber"])) {
					$_SESSION['phmsg']="1";
					$flagg=1;
				} 
				else if(strlen($_POST["phonenumber"])<10 or strlen($_POST["phonenumber"])>10)
				{
					$_SESSION['phmsg']="2";
					$flagg=1;
					
				}else if(preg_match('#[^0-9]#',$_POST["phonenumber"])){
					$_SESSION['phmsg']="3";
					$flagg=1;
					
				}
				else{
					$name = $_POST["phonenumber"];
					unset($_SESSION['phmsg']) ;
				}

				
				if($flagg==0)
				{
						$sql2=mysqli_query($con,"insert into login (name,username,password,gender,contact,university) values('$_POST[name]','$_POST[username]','$pass','$_POST[gender]','$_POST[phonenumber]','$_POST[university]')")or die('Error:- '.mysqli_error($con));
						unset($_SESSION['emsg']) ;
						$_SESSION['uid']=$_POST["username"];
						header("location:index.php");
				}
				else
				{
					unset($_SESSION['emsg']) ;
					header("location:signup.php?page=1&name=".$_POST['name']."&username=".$_POST['username']);

				}
			}
		}
		if($pid==10) //delete from product table
	{
		if(isset($_POST['submit']))
		{

			$sql=mysqli_query($con,"delete from product where image='$_POST[img]' and username='$_SESSION[uid]'")or die('Error:- '.mysqli_error($con));
			header("location:seller.php");
		}
	}
?>
