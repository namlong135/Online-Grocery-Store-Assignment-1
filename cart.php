<?php
  $link = mysqli_connect("localhost", "root", "", "assignment1") or die("Could not connect to database");
  session_start();


  if (isset($_GET['action'])) {
    $action = $_GET['action'];
    if($action === 'add') {
      $product_id  = $_GET['id'];
      $quantity    = $_POST['quantity'];
  
      $query  = "SELECT product_name, unit_price, in_stock FROM Products ";
      $query .= "WHERE product_id=".$product_id.";";
      $result = mysqli_query($link, $query);
  
      $name = ''; $price = 0; $stock = 0;
      while($row = mysqli_fetch_assoc($result)) {
        $name  = $row['product_name'];
        $price = $row['unit_price'];
        $stock = $row['in_stock'];
      }
  
      if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
  
        $item = array(
            'name'     => $name,
            'quantity' => $quantity,
            'price'    => $price
        );
  
        $_SESSION['cart']['_'.$product_id] = $item;
  
      } else {
  
        $item = array(
            'name'     => $name,
            'quantity' => $quantity,
            'price'    => $price
        );
  
        if (!isset($_SESSION['cart']['_'.$product_id])) {
            $_SESSION['cart']['_'.$product_id] = $item;
  
        } else {
            $newQuantity = $_SESSION['cart']['_'.$product_id]['quantity'] + $quantity;
  
            if ($newQuantity <= $stock) {
              $_SESSION['cart']['_'.$product_id]['quantity'] = $newQuantity;
            } else if ($newQuantity < 0) {
              print '<script language="javascript">';
              print 'alert("quantities CAN NOT be a negative value")';
              print '</script>';
            } else {
              print '<script language="javascript">';
              print 'alert("specified quantity MUST NOT exceed the inventory size")';
              print '</script>';
            }
        }
      }
    }
    else if($action === 'del') {
      $product_id  = $_GET['id'];
      $item_num = sizeof($SESSION['cart']);
  
      if($item_num <= 1) {
        unset($_SESSION['cart']);
      }
      else {
        unset($_SESSION['cart'][$product_id]);
      }
    }
    else if($action === 'clear') {
      unset($_SESSION['cart']);
    }
  }

?>

<link rel='stylesheet' href='css/cart.css'>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" />
<title> Document </title> 

<body style="background: #E7E9EB;">
  <section class="h-100 h-custom" style="background: #E7E9EB;">
    <div class="container h-100 py-5">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">

          <div class="table-responsive">
            <table class="table">
              <thead>
                <?php
                  if(isset($_SESSION['cart'])) {
                  print '<tr>';
                  print '<th scope="col" class="h5">Shopping Cart</th>';
                  print '<th scope="col">Quantity</th>';
                  print '<th scope="col">Unit Price</th>';
                  print '<th scope="col">Sub Total</th>';
                  print '</tr>';
                  }
                ?>
              </thead>
              <tbody>
                <?php
                if (isset($_SESSION['cart'])) {
                  $cart = $_SESSION['cart'];
                  $grand_total = 0;
                  foreach($cart as $_id => $data) {
                    $total = $data['quantity'] * $data['price'];
                    $grand_total += $total; 
                    print '<tr>';
                    print '<th scope="row">';
                    print '<div class="d-flex align-items-center">';
                    print '<div class="flex-column ms-4">';
                    print '<p class="mb-2">' .$data['name']. '<p>';
                    print '</div>';
                    print '</div>';
                    print '</div>';
                    print '</div>';
                    print '<td class="align-middle>';
                    print '<p class="mb-0">'.$data['quantity'].'</p>';
                    print '</td>';
                    print '<td class="align-middle>';
                    print '<p class="mb-0">'.$data['quantity'].'</p>';
                    print '</td>';
                    print '<td class="align-middle>';
                    print '<p class="mb-0">'.$data['quantity'].'</p>';
                    print '</td>';
                    print '</tr>';
                  }
                }
                else {
                  print '<tr>';
                  print '<td colspan=5><h1>Cart Is Empty</h1></td>';
                  print '</tr>';
               }
                ?>
              </tbody>
            </table>
          </div>
          <div class="card shadow-2-strong mb-5 mb-lg-0" style="border-radius: 16px;">
            <div class="card-body p-4">
              <div class="row">
                <div class="col-lg-4 col-xl-3" style="width: 100%">
                  <div class="d-flex justify-content-between mb-4" style="font-weight: 500;">
                    <p class="mb-2">Total</p>
                    <p class="mb-2">$26.48</p>
                  </div>

                  <button type="button" class="btn btn-primary btn-block btn-lg">
                    <div class="d-flex justify-content-between">
                      <span>Checkout</span>
                      <span>$26.48</span>
                    </div>
                  </button>
                  <button type="button" class="btn btn-primary btn-block btn-lg">
                    <div class="d-flex justify-content-between">
                      <span>Clear</span>
                    </div>
                  </button>

                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
</body>
