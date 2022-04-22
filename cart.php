<?php
  $link = mysqli_connect("localhost", "root", "", "assignment1") or die("Could not connect to database");
  session_start();

  if (isset($_GET['action'])) {
    $action = $_GET['action'];
    if($action === 'add') {
      $product_id  = $_GET['id'];
      $quantity    = $_POST['quantity'];
  
      $query  = "SELECT * FROM products WHERE product_id = " .$product_id;
      $result = mysqli_query($link, $query);
  
      $name = ''; 
      $price = 0; 
      $stock = 0; 
      $unit_quantity='';
      while($row = mysqli_fetch_assoc($result)) {
        $name  = $row['product_name'];
        $unit_quantity = $row['unit_quantity'];
        $price = $row['unit_price'];
        $stock = $row['in_stock'];
      }
      if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
        $item = array(
            'name'     => $name,
            'unit_quantity' => $unit_quantity,
            'quantity' => $quantity,
            'price'    => $price
        );
        $_SESSION['cart']['_'.$product_id] = $item;
      } else {
        $item = array(
            'name'     => $name,
            'unit_quantity' => $unit_quantity,
            'quantity' => $quantity,
            'price'    => $price
        );
        if (!isset($_SESSION['cart']['_'.$product_id])) {
            $_SESSION['cart']['_'.$product_id] = $item;
        } 
        else {
          $newQuantity = $_SESSION['cart']['_'.$product_id]['quantity'] + $quantity;
          if ($newQuantity <= $stock) {
            $_SESSION['cart']['_'.$product_id]['quantity'] = $newQuantity;
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
                  print '
                    <tr>
                      <th scope="col" class="h5">Shopping Cart</th>
                      <th scope="col">Unit Quantity</th>
                      <th scope="col">Quantity</th>
                      <th scope="col">Unit Price</th>
                      <th scope="col">Sub Total</th>
                    </tr>
                  ';
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
                    print '
                    <tr>
                      <th scope="row">
                        <div class="d-flex align-items-center">
                          <div class="flex-column ms-4">
                            <p class="mb-2">' .$data['name']. '<p>
                          </div>
                        </div>
                      </th>
                      <td class="align-middle>
                        <p class="mb-0">'.$data['unit_quantity'].'</p>
                      </td>
                      <td class="align-middle>
                        <p class="mb-0">'.$data['quantity'].'</p>
                      </td>
                      <td class="align-middle>
                        <p class="mb-0">'.$data['price'].'</p>
                      </td>
                      <td class="align-middle>
                        <p class="mb-0"> $'.$total.'</p>
                      </td>
                    </tr>
                    ';
                  }
                  print '
                    <div class="card-body p-4">
                      <div class="row">
                        <div class="col-lg-4 col-xl-3" style="width: 100%">
                          <div class="d-flex justify-content-between mb-4" style="font-weight: 500;">
                            <p class="mb-2">Total</p>
                            <p class="mb-2"> $'.$grand_total.'</p>
                          </div>
                          <div class="buttonContainer">
                            <a href="cart.php?action=clear" style="width: 30%;">
                              <button type="button" class="btn btn-primary btn-block btn-lg btn-danger" style="display: flex;justify-content: center;">
                                <div class="d-flex justify-content-between">
                                  <span>Clear</span>
                                </div>
                              </button>
                            </a>
                            <a href="checkout.php" target="view" style="width: 30%;">
                              <button type="button" class="btn btn-primary btn-block btn-lg" style="display: flex;justify-content: center;">
                                <div class="d-flex justify-content-between">
                                  <span>Checkout</span>
                                </div>
                              </button>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  ';
                }
                else {
                  print '
                  <tr>
                    <td colspan=5><h1 style="display: flex;justify-content: center;">Cart Is Empty</h1></td>
                  </tr>
                  ';
               }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
