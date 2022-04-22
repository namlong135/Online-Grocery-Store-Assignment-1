<?php 
  $link = mysqli_connect("aa9jwufxbxj1po.c5nezg2ijph6.us-east-1.rds.amazonaws.com", "uts", "longlong1642", "assignment1") or die("Could not connect to database");
  session_start();
  if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
  }
  $grand_total = 0;

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $suburb = $_POST['suburb'];
  $zip = $_POST['zip'];
  $country = $_POST['country'];
  $state = $_POST['state'];
?>

<link rel='stylesheet' href='css/checkout.css'>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" />

<?php
  print '
    
  ';
?>

<?php 
  if (isset($_SESSION['cart'])) {
    print '
    <div>
      <h1 class="confirmHeader">Thank you, ' . $fname . '</h1>
      <hr class="my-4">
      <h4 class="mb-3 confirmHeader"> Customer Details </h2>
      <ul>
        <li>Customer Name: ' . $fname . ' '. $lname . '</li>
        <li>Email: ' . $email . '</li>
        <li>Address: ' . $address . '</li>
        <li>Suburb: ' . $suburb . '</li>
        <li>Zip Code: ' . $zip . '</li>
        <li>Country: ' . $country . '</li>
        <li>State: ' . $state . '</li>
      </ul>
    </div>
      <h4 class="mb-3 confirmHeader"> Order Details </h2>
      <hr class="my-4">
      <div class="table-responsive">
        <table class="table align-middle mb-0 bg-white">
          <thead class="bg-dark">
            <tr class="header">
              <th> Product Name </th>
              <th> Unit Price </th>
              <th> Unit Quantity </th>
              <th> Quantity </th>
            </tr>
          </thead>
          <tbody>
            <tr>
    ';
    foreach($cart as $_id => $row) {
      $grand_total += $row['price'] * $row['quantity'];
      print '
      <tr>
        <td>
          <div class="d-flex align-items-center">
            <div class="ms-3">
              <p class="fw-bold mb-1">'. $row['name'] .'</p>
            </div>
          </div>
        </td>
        <td>
          <p class="fw-normal mb-1">' .$row['price'] .'</p>
        </td>
        <td>
          <p class="fw-normal mb-1">' . $row['unit_quantity'] . '</p>
        </td>
        <td>
          <p class="fw-normal mb-1">' . $row['quantity'] . '</p>
        </td>
      </tr>
      ';
    }
    print '
    <div class="d-flex justify-content-between mb-4" style="font-weight: 500;margin-left: 40px;margin-right: 90px;margin-top:20px;">
      <p class="mb-2">Total</p>
      <p class="mb-2"> $'.$grand_total.'</p>
    </div>
    </tr>
    </tbody>
  </table>
</div>
    ';
  }
  else {
    print '
    <p class="note note-warning">
      <strong>Cart empty:</strong> Your shopping cart is empty, please refresh the page and try again
    </p>
    ';
  }
?>


<?php
  session_destroy();
?>