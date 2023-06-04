
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
         <a href="seller.php" class="link favorate">
         <svg class="favorate__icon icon icon-store_mall_directory">
            <use xlink:href="icons/sprite.svg#icon-shop"></use>
         </svg>
         </a>
         </div>
<div class="favorate">
<a href="#foverate" class="link favorate">
<svg class="favorate__icon">
<use xlink:href="icons/sprite.svg#icon-heart-outlined"></use>
</svg>
</a>
</div>
<div class="cart">
  <a href="cart.php?user_id=<?php session_start();
  echo $_SESSION['id'] ?>">
<svg class="cart-icon">
<use xlink:href="icons/sprite.svg#icon-cart"></use>
</svg>
</a>
<div class="cartcash">
<span class="cartNum"><?php
require_once('../controller/Database.php');
$database=Database::getInstance();
$dataItem=$database->howManyInCart($_SESSION['id']);
$value=$dataItem->fetch_assoc();
echo $value['COUNT(*)'];
?></span>
<span class="cash">$100.00</span>
</div>
</div>
<div class="login">

<?php

if (!isset($_GET['code'])) {
if(!empty($_SESSION['profilePicture'])){
echo '<img src="../controller/'.$_SESSION["profilePicture"].'" alt="Friend 1" class="recommend_photo profilePicture recommended">';
}else{
echo '<svg class="user">
<use xlink:href="icons/sprite.svg#icon-user1"></use>
</svg>';
}
}else{
echo '<img src="'.$_SESSION['profilePicture'].'" alt="Friend 1" class="recommend_photo recommended">';
} ?>

<a href="login.php" class="link login">Login<br>MyAccount</a>
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
<h2><a href="index.php" class="link">Home</a></h2>
<h2><a href="#featured_items" class="link">our store</a></h2>
<h2><a href="#home" class="link">blogs</a></h2>
<h2><a href="#home" class="link">contact</a></h2>
</div>
</header>