<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <title>Home</title>
  </head>
  <body>
    <header class="header">
      <div class="header_main">
          <div class="brandsearch">
            <div class="header_brand">
               <img src="logo-white.png" alt="logo image"><h1>Ethio Gebiya</h1>
             </div>
             <form action="#" class="search">
               <input type="text" class="search__input" placeholder="Search Product here">
               <button class="search__button">
                   <svg class="search__icon">
                       <use xlink:href="icons/sprite.svg#icon-magnifying-glass"></use>
                   </svg>
               </button>
            </form>
          </div>  
            <div class="header_container">
               <div class="compare">
                  <svg class="favorate__icon">
                     <use xlink:href="icons/sprite.svg#icon-cycle"></use>
                  </svg><a href="#foverate" class="link favorate">Compare<br>Products</a>
               </div>
<div class="favorate">
   <svg class="favorate__icon">
      <use xlink:href="icons/sprite.svg#icon-heart-outlined"></use>
   </svg>
   <a href="#foverate" class="link favorate">Favorate<br>Wishlist</a>
</div>
<div class="login">
   
<?php 
session_start();
if (!isset($_GET['code'])) {
   if(!empty($_SESSION['profilePicture'])){
      echo '<img src="../controller/'.$_SESSION["profilePicture"].'" alt="Friend 1" class="recommend_photo recommended">';
   }else{
   echo '<svg class="user">
   <use xlink:href="icons/sprite.svg#icon-user1"></use>
</svg>';
}
}else{
 echo '<img src="AuthGoogleController.php" alt="Friend 1" class="recommend_photo recommended">';
}
?>

   <a href="login.php" class="link login">Login<br>MyAccount</a>
</div>
<div class="cart">
<svg class="cart-icon">
   <use xlink:href="icons/sprite.svg#icon-cart"></use>
</svg>
<div class="cartcash">
<span class="cartNum">0</span>
<span class="cash">$100.00</span>
</div>
</div>
            </div>
      </div>
      <div class="header_sub">
         <div class="catagory_select">
            <svg class="catagory__icon">
              <use xlink:href="icons/sprite.svg#icon-list"></use>
            </svg>
            <select name="shopCatagory" id="catagory" class="catagory">
              <option value="#">SHOP CATEGORIES</option>
              <option value="Car">Car</option>
              <option value="Closes">Closes</option>
              <option value="Electronics">Electronics</option>
              <option value="Homes">Homes</option>
              <option value="Furniture">Furnicher</option>
              <option value="Wifes">Wifes</option>
            </select>
          </div>
      <div class="header_sub_link">
      <h2><a href="#home" class="link">Home</a></h2>
   <h2><a href="#home" class="link">our store</a></h2>
<h2><a href="#home" class="link">blogs</a></h2>
<h2><a href="#home" class="link">contact</a></h2>
</div>
    </header>
    <div class="body">
      <div class="newadd">
        <div class="newadd_scroll"></div>
        <div class="newadd_about">
            <div class="item1"></div>
            <div class="item2"></div>
            <div class="item3"></div>
            <div class="item4"></div>
        </div>
      </div>
      <div class="about"></div>
      <div class="featured_products">
        <div class="backneed">
            <div class="backneed_item1">
                hello
             <div class="faces front">

             </div>
             <div class="faces back">

             </div>
            </div>
            <div class="backneed_item1">
                hello
             <div class="faces front">
                front
             </div>
             <div class="faces back">
                back
             </div>
            </div>
            <div class="backneed_item1">
                hello
             <div class="faces front">
                front
             </div>
             <div class="faces back">
                back
             </div>
            </div>
        </div>
        <div class="featured_items">
            <div class="featured_item1">
             <div class="imagepart">
                hello 
        
                <div class="iconpart">
hello
                </div>
             </div>
             
             <div class="brandname">
                hello
             </div>
             <div class="itemname">
                hello
    <br><br>
                hello
             </div>
             <div class="rating">
                hello
             </div>
             <div class="price">
                hello
             </div>
             <div class="howmanysold">
                hello
             </div>
            </div>
            <div class="featured_item1">
                <div class="imagepart">
                   hello 
           
                   <div class="iconpart">
   hello
                   </div>
                </div>
                
                <div class="brandname">
                   hello
                </div>
                <div class="itemname">
                   hello
       <br><br>
                   hello
                </div>
                <div class="rating">
                   hello
                </div>
                <div class="price">
                   hello
                </div>
                <div class="howmanysold">
                   hello
                </div>
               </div>
                <div class="featured_item1">
             <div class="imagepart">
                hello 
        
                <div class="iconpart">
hello
                </div>
             </div>
             
             <div class="brandname">
                hello
             </div>
             <div class="itemname">
                hello
    <br><br>
                hello
             </div>
             <div class="rating">
                hello
             </div>
             <div class="price">
                hello
             </div>
             <div class="howmanysold">
                hello
             </div>
            </div>
        </div>
      </div>
    </div>
    <footer class="footer">

    </footer>
    <script src="index.js"></script>
  </body>
</html>
