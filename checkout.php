<?php
  $link = mysqli_connect("localhost", "root", "", "assignment1") or die("Could not connect to database");
  session_start();

?>

<link rel='stylesheet' href='css/checkout.css'>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" />
<script src="js/validate.js"></script>

<div class="checkoutFormContainer">
  <form action="checkoutConfirm.php" method="POST" target="view" onsubmit="return validateCheckout()">
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline" style="display: flex;flex-direction: column;">
        <label class="form-label"> First name <span>*</span></label>
        <input type="text" id="fname" name="fname" placeholder="First Name" class="inputField"/>
      </div>
    </div>
    <div class="col">
      <div class="form-outline" style="display: flex;flex-direction: column;">
        <label class="form-label"> Last name <span>*</span></label>
        <input type="text" id="lname" name="lname" placeholder="Last Name" class="inputField"/>
      </div>
    </div>
  </div>
  <div class="form-outline mb-4" style="display: flex;flex-direction: column;">
    <label class="form-label"> Email <span>*</span></label>
    <input type="email" id="email" name="email"  class="inputField" class="inputField" placeholder="Email"/>
  </div>
  <div class="form-outline mb-4" style="display: flex;flex-direction: column;">
    <label class="form-label"> Address <span>*</span></label>
    <input type="text" id="address" name="address" class="inputField" placeholder="Address"/>
  </div>
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline" style="display: flex;flex-direction: column;">
        <label class="form-label"> Suburb <span>*</span></label>
        <input type="text" id="suburb" name="suburb" placeholder="Suburb" class="inputField"/>
      </div>
    </div>
    <div class="col">
      <div class="form-outline" style="display: flex;flex-direction: column;">
        <label class="form-label" > Zip Code <span>*</span></label>
        <input type="number" id="zip" name="zip" placeholder=" Zip Code " class="inputField"/>
      </div>
    </div>
  </div>
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline" style="display: flex;flex-direction: column;">
        <label class="form-label"> Country <span>*</span></label>
        <input type="text" id="country" name="country" placeholder="Country" class="inputField"/>
      </div>
    </div>
    <div class="col">
      <div class="form-outline" style="display: flex;flex-direction: column;">
        <label class="form-label" > State <span>*</span></label>
        <input type="text" id="state" name="state" placeholder=" State " class="inputField"/>
      </div>
    </div>
  </div>
  <div style="display: flex;justify-content: center;">
    <input type="submit" value="Purchase" class="btn btn-sm btn-rounded btn-success"/>
  </div>
</form>
</div>
