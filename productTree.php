<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="stylesheet" href="css/productTree.css"/>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet" />
      <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
      <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" />
   </head>
   <body>
      <div class="visual-map">
            <img id="categories" class="categories" src="images/categories.png" usemap="#map-categories">
            <map id="map-categories" name="map-categories">
               <area class="category" title="frozen-food" coords="5,141,88,180" shape="rect" onmouseover="onMouseOver('frozen-food', frozenFoodScale)">
               <area class="category" title="fresh-food" coords="101,141,181,180" shape="rect" onmouseover="onMouseOver('fresh-food', freshFoodScale)">
               <area class="category" title="beverages" coords="196,140,277,180" shape="rect" onmouseover="onMouseOver('beverages', beveragesScale)">
               <area class="category" title="home-health" coords="293,141,373,180" shape="rect" onmouseover="onMouseOver('home-health', homeHealthScale)">
               <area class="category" title="pet-food" coords="387,142,468,180" shape="rect" onmouseover="onMouseOver('pet-food', petFoodScale)">
            </map>

            <img id="frozen-food" class="img-category" src="images/frozen-food.png" usemap="#map-frozen-food">
            <map id="map-frozen-food" name="map-frozen-food">
               <area id='1000' target="view" href="productView.php?id=1000" title="fishfingers-500g" coords="61,250,143,290" shape="rect">
               <area id='1001' target="view" href="productView.php?id=1001" title="fishfingers-1000g" coords="156,250,236,291" shape="rect">
               <area id='1002' target="view" href="productView.php?id=1002" title="patties" coords="7,132,88,172" shape="rect">
               <area id='1003' target="view" href="productView.php?id=1003" title="shelled-prawns" coords="196,132,278,174" shape="rect">
               <area id='1004' target="view" href="productView.php?id=1004" title="icecream-1L" coords="254,248,336,290" shape="rect">
               <area id='1005' target="view" href="productView.php?id=1005" title="iceream-2L" coords="346,248,429,289" shape="rect">
            </map>

            <img id="fresh-food" class="img-category" src="images/fresh-food.png" usemap="#map-fresh-food">
            <map id="map-fresh-food" name="map-fresh-food">
               <area id='3000' target="view" href="productView.php?id=3000" title="cheddar-500g" coords="34,248,115,292" shape="rect">
               <area id='3001' target="view" href="productView.php?id=3001" title="cheddar-1000g" coords="128,249,210,291" shape="rect">
               <area id='3002' target="view" href="productView.php?id=3002" title="tbone-steak" coords="5,130,68,171" shape="rect">
               <area id='3003' target="view" href="productView.php?id=3003" title="oranges" coords="141,130,206,171" shape="rect">
               <area id='3004' target="view" href="productView.php?id=3004" title="bananas" coords="213,130,276,171" shape="rect">
               <area id='3005' target="view" href="productView.php?id=3005" title="peaches" coords="420,130,483,170" shape="rect">
               <area id='3006' target="view" href="productView.php?id=3006" title="grapes" coords="282,130,346,171" shape="rect">
               <area id='3007' target="view" href="productView.php?id=3007" title="apples" coords="351,130,416,170" shape="rect">
            </map>

            <img id="beverages" class="img-category" src="images/beverages.png" usemap="#map-beverages">
            <map id="map-beverages" name="map-beverages">
               <area id='4000' target="view" href="productView.php?id=4000" title="tea-pack25" coords="160,245,223,285" shape="rect">
               <area id='4001' target="view" href="productView.php?id=4001" title="tea-pack100" coords="228,245,293,285" shape="rect">
               <area id='4002' target="view" href="productView.php?id=4002" title="tea-pack200" coords="300,245,363,284" shape="rect">
               <area id='4003' target="view" href="productView.php?id=4003" title="coffee-200g" coords="20,245,83,284" shape="rect">
               <area id='4004' target="view" href="productView.php?id=4004" title="coffee-500g" coords="90,245,154,284" shape="rect">
               <area id='4005' target="view" href="productView.php?id=4005" title="chocobar" coords="393,136,474,178" shape="rect">
            </map>

            <img id="home-health" class="img-category" src="images/home-health.png" usemap="#map-home-health">
            <map id="map-home-health"name="map-home-health">
               <area id='2000' target="view" href="productView.php?id=2000" title="panadol-pack24" coords="63,250,143,290" shape="rect">
               <area id='2001' target="view" href="productView.php?id=2001" title="panadol-bottle50" coords="156,250,237,290" shape="rect">
               <area id='2002' target="view" href="productView.php?id=2002" title="bath-soap" coords="8,131,88,169" shape="rect">
               <area id='2003' target="view" href="productView.php?id=2003" title="garbage-bags-small-pack10" coords="255,249,336,289" shape="rect">
               <area id='2004' target="view" href="productView.php?id=2004" title="garbage-bags-large-pack-50" coords="349,249,430,289" shape="rect">
               <area id='2005' target="view" href="productView.php?id=2005" title="washing-powder" coords="197,131,279,171" shape="rect">
               <area id='2006' target="view" href="productView.php?id=2006" title="laundry-bleach" coords="388,131,470,171" shape="rect">
            </map>

            <img id="pet-food" class="img-category" src="images/pet-food.png" usemap="#map-pet-food">
            <map id="map-pet-food" name="map-pet-food">
               <area id='5000' target="view" href="productView.php?id=5000" title="dog-food-5kg" coords="349,249,430,289" shape="rect">
               <area id='5001' target="view" href="productView.php?id=5001" title="dog-food-1kg" coords="256,249,336,289" shape="rect">
               <area id='5002' target="view" href="productView.php?id=5002" title="bird-food" coords="102,130,183,171" shape="rect">
               <area id='5003' target="view" href="productView.php?id=5003" title="cat-food" coords="197,131,279,172" shape="rect">
               <area id='5004' target="view" href="productView.php?id=5004" title="fish-food" coords="388,131,470,171" shape="rect">
            </map>
      </div>
   <script src="js/getSelectedProduct.js"></script>
   <script src="js/imageMap.js"></script>
   <script src="js/constant.js"></script>
   <script src="js/treeDisplay.js"></script>
   </body>
</html>
