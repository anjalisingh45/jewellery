
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Abaaj</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>
<style>


.div-1{
       background-image:linear-gradient(pink,grey);
	   }


</style>






<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" alt="" /><span>
              Abaaj
            </span>
          </a>

          <div class="navbar-collapse" id="">
            <div class="container">
              <div class=" mr-auto flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav justify-content-between ">
                  <div class="d-none d-lg-flex">
                    <li class="nav-item">
                      <a class="nav-link" href="fruit.html">
                        Customer Number : 01234567890</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="service.html">
                        Demo@gmail.com
                      </a>
                    </li>
                  </div>
                  <div class=" d-none d-lg-flex">
                    <li class="nav-item">
                      <a class="nav-link" href="contact.html">
                        Login / Register
                      </a>
                    </li>
                    <form class="form-inline my-2 ml-5 mb-3 mb-lg-0">
                      <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                    </form>
                  </div>
                </ul>
              </div>
            </div>

            <div class="custom_menu-btn">
              <button onclick="openNav()"></button>
            </div>
            <div id="myNav" class="overlay">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <div class="overlay-content">
                <a href="index.php">HOME</a>
                <a href="product.html">PRODUCTS</a>
				<a href="contact_us.php">CONTACT_US</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
	</div>
	
	<!-- form section -->
	
<div style= "margin:50px 55px 50px 55px;" class="div-1" >
<center><div  style= "color:white">
<h1 style="padding-top:25px; padding-bottom:50px;" > PRODUCT ORDER FORM<h1>
</div></center>

<form role="form" action=".php" method="post">
<div style="padding-left:10px;">
<label > FIRST NAME &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<label>
<input type="text" name="a" placeholder="your first name">

&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<label> LAST NAME  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<label>
<input type="text" name="b"  placeholder="your last name" required >
</div><br>
<div style="padding-left:10px;">
<label >EMAIL ADDRESS &nbsp; &nbsp;&nbsp;&nbsp; 
&nbsp; &nbsp;:&nbsp;&nbsp;&nbsp;<label>
<input type="email" name="c" placeholder="abc123@gmail.com" required>
</div><br>

<div style="padding-left:10px;">

<label>PHONE NUMBER &nbsp; &nbsp;&nbsp;&nbsp; 
&nbsp; &nbsp;:&nbsp;&nbsp;&nbsp;<label>
<input type="text" maxlength="3" size="1" value="+91" readonly required>

<input type="text" name="d"  maxlength="10"size="10" placeholder="(000)(0000)(000)" required>

</div><br>

<div class="form-group" style="padding-left:10px;">

<label>YOUR ADDRESS &nbsp; &nbsp;&nbsp;&nbsp; 
&nbsp; &nbsp;:&nbsp;&nbsp;&nbsp;<label>

<input type="text" class="form-group" size="100" name="e" placeholder="your address" required>

</div><br>

<div style="padding-left:10px;">
<label>STATE  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<label>

                                            <select name="f" id= "state" >
<option value="" >select state</option>											
<option value="a" >Andhra Pradesh</option>
<option value="b">Arunachal Pradesh</option>
<option value="c">Assam</option>
<option value="d">Bihar</option>
<option value="e">Chhattisgarh</option>
<option value="f">Goa</option>
<option value="g">Gujarat</option>
<option value="h">Haryana</option>
<option value="i">Himachal Pradesh</option>
<option value="j">Jammu and Kashmir</option>
<option value="k">Jharkhand</option>
<option value="l">Karnataka</option>
<option value="m">Kerala</option>
<option value="n">Madhya Pradesh</option>
<option value="o">Maharashtra</option>
<option value="p">Manipur</option>
<option value="q">Meghalaya</option>
<option value="r">Mizoram</option>
<option value="s">Nagaland</option>
<option value="t">Odisha</option>
<option value="u">Punjab</option>
<option value="v">Rajasthan</option>
<option value="w">Sikkim</option>
<option value="x">Tamil Nadu</option>
<option value="y">Telangana</option>
<option value="z">Tripura</option>
<option value="1">Uttarakhand</option>
<option value="2">Uttar Pradesh</option>
<option value="3">West Bengal</option>
<option value="4">Andaman and Nicobar Islands</option>
<option value="5">Chandigarh</option>
<option value="6">Dadra and Nagar Haveli</option>
<option value="7">Daman and Diu</option>
<option value="8">Delhi</option>
<option value="9">Lakshadweep</option>
<option value="10">Puducherry</option>
                                                
                                            </select>
                                        

&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<label> CITY&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp; <label>
<input type="text" placeholder="your city name" name="g" required>
</div>
<br>

<div style="padding-left:10px;">
<label > PIN CODE&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<label>
<input type="text" name="h" maxlength="6"  size="6" placeholder="pin code" required>

&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;

<label > FOR DAYS &nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<label>
<input type="text" name="i" placeholder="for which days " required>


</div>
<br><br>
<div style="padding-left:450px;">

 <button type="submit" class="btn btn-info" style="background-color:red;">
 <a class="nav-link" href="orderform.php">BACK</a></button>
 
 
 <button type="submit" name="submit" style="background-color:pink;" class="btn btn-info">NEXT →</button>
 
 
 
</div>
 <br><br>
</form>
</div>
