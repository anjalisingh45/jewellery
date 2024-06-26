<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; 
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%;
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; 
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #5c7dba;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #92a8d1;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>


<center>
<h1  > -----PRODUCT ORDER FORM-----<h1>
</center>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="insertorder.php" role="form" method="post">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> First Name</label>
            <input type="text"  name="a" >
			<label for="fname"><i class="fa fa-user"></i> Last Name</label>
            <input type="text"  name="b" >
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text"  name="c" placeholder="abc123@example.com">
			<label for="number">PHONE NUMBER <label>
           <input type="text" maxlength="3" size="1" value="+91" readonly>
     <input type="text" name="d"  maxlength="10"size="10" placeholder="(000)(0000)(000)">
			
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text"  name="e"  size="100" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" " name="g" placeholder="Pune">
			<label for="fordays">For Days</label>
            <input type="text"  name="i" >

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text"  name="f" placeholder="MI">
				
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text"  name="h" maxlength="6"  size="6" placeholder="10001">
              </div>
            </div>
          </div>

          <!--<div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div> -->
          
        </div> 
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
   
		<button type="submit" name="submit"  class="btn btn-info">Continue to checkout </button>
		<center><a class="nav-link" href="index.php">BACK</a></center>
      </form>
    </div>
  </div> 
  <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a href="#">Day 1</a> <span class="price">Rs.100</span></p>
      <p><a href="#">Day 2</a> <span class="price">Rs.200</span></p>
      <p><a href="#">Day 3</a> <span class="price">Rs.300</span></p>
      <p><a href="#">Day 4</a> <span class="price">Rs.400</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>Rs.400</b></span></p>
    </div>
  </div>
</div>
</div>

</body>
</html>
