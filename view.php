
<?php
   $link = mysqli_connect("localhost", "root", "", "assignment1") or die("Could not connect to database");

if (isset($_GET['id'])) {
   $product_id = mysqli_real_escape_string($link, $_GET['id']);
   $product_query = "SELECT * FROM products WHERE product_id =" .$product_id;
   $result = mysqli_query($link, $product_query);

?>  
   <link rel='stylesheet' href='css/view.css' />
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet" />
   <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
   <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" />  
   <script src="js/validate.js"></script>
   <script src="js/constant.js"></script>

   <table class="table align-middle mb-0 bg-white">
    <thead class="bg-dark">
      <tr class="header">
         <th> Product ID </th>
         <th> Product Name </th>
         <th> Unit Price </th>
         <th> Unit Quantity </th>
         <th> In Stock </th>
         <th> Quantity </th>
      </tr>
    </thead>
    <tbody>
      <tr>
         <?php
            while ($row = mysqli_fetch_assoc($result)) {
               print '<th>' . $row['product_id'] . '</th>';
               print '<td>' . $row['product_name'] . '</td>';
               print '<td>' . $row['unit_price'] . '</td>';
               print '<td>' . $row['unit_quantity'] . '</td>';
               print '<td>' . $row['in_stock'] . '</td>';   
            }
         ?>
         <?php
            $product_id = mysqli_real_escape_string($link, $_GET['id']);
            $product_query  = "SELECT in_stock FROM products WHERE product_id=" . $product_id;
            $result = mysqli_query($link, $product_query);
            $stock = mysqli_fetch_assoc($result)['in_stock'];
         ?>
         <td>
            <form id="add-cart" action="cart.php?action=add&id=<?php print $_GET['id']; ?>" method="POST" target="cart" class="inputContainer">
               <input type="text" id="quantity" name="quantity" value="1" class=""/>
               <input type="submit" value="Add" class="btn btn-sm btn-rounded btn-success"/>
            </form>
         </td>
      </tr>
    </tbody>
  </table>

<?php
} 
else {
   print '<h1 style="text-align: center;">';
   print 'No products selected...';
   print '</h1>';
}
?>
