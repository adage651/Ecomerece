<?php
include('../controller/FetchData.php');
$fetch = new FetchData();
$data = $fetch->fetchItem();
$data1 = $fetch->fetchItem();
$data2 = $fetch->fetchItem();
$data3 = $fetch->fetchItem();
?>



<!DOCTYPE html>
<html lang="en">
<?php include('head.php') ?>

<body>
   <?php include('header.php'); ?>
   <div class="body">
      <div class="newadd">
         <div class="newadd_slider">
            <div class="slider">
               <div class="slider-wrapper">
                  <?php
                  while ($item = $data->fetch_assoc()) {
                     echo '
   <div class="itrator"><img src="../controller/' . $item['item_picture'] . '" alt="" class="img_slider"></div>
';
}
                  ?>
               </div>
               <div class="slider-btn slider-btn-prev">&lt;</div>
               <div class="slider-btn slider-btn-next">&gt;</div>

            </div>
         </div>
         <div class="newadd_about">
            <div class="item1"></div>
            <div class="item2"></div>
            <div class="item3"></div>
            <div class="item4"></div>
         </div>
      </div>
      <!-- <div class="about"></div> -->

      <div id="featured_items" class="featured_items">
         <?php
         while ($item = $data1->fetch_assoc()) {
            echo '<div class="featured_item1">
             <div class="imagepart" style="background-image:url(../controller/' . $item['item_picture'] . ');background-size:cover">
                
             <div class="iconpart">
<a href="#" >  
             <svg class="imageIcon">
               <use xlink:href="icons/sprite.svg#icon-heart-outlined"</use>
             </svg>
</a>
     <a href="review.php?id=' . $item['id'] . '">   
             <svg class="imageIcon">
               <use xlink:href="icons/sprite.svg#icon-eye"></use>
             </svg>
</a>
           <a class="send_cart" href="'.$item['id'].",".$_SESSION['id'].' " >   
             <svg style="fill:white" class="imageIcon">
               <use xlink:href="icons/sprite.svg#icon-cart"></use>
             </svg>
</a>
      </div>
         </div>

         
             <div class="separator"></div>
             <div class="itemname">
               <p>
             ' . $item['item_name'] . '
               </p>
             </div>
             <div class="separator"></div>
             <div class="description">
                 <p>' . $item['item_description'] . '
               </p>
             </div>
             <div class="separator"></div>
             <div class="rating">';
            for ($i = 0; $i < 5; $i++) {
               if ($i < $item['total_ranking']) {
                  echo '<p>
                        <svg class="starA" >
                        <use xlink:href="icons/sprite.svg#icon-star"></use>
                        </p>';
               } else {
                  echo '
                        <p>
                        <svg class="star" >
                        <use xlink:href="icons/sprite.svg#icon-star"></use>
                        </p>';
               }
            }
            $_SESSION['total_rankings'] = $item['total_ranking'];

            echo '</div>
<div class="separator"></div>
             <div class="price">
                <p>$' . $item['item_price'] . '
            </p> </div>
            <div class="separator"></div>
             <div class="howmanysold">
                hello
             </div>
            </div>
            ';
         }
      echo'</div><div class="featured_products">
      <div class="backneed">';
         while ($item = $data2->fetch_assoc()) {
            echo ' 
    


         
            <div class="backneed_item1">
  <div class="faces front featured_item1">
  <div class="imagepart" style="background-image:url(../controller/' . $item['item_picture'] . ');background-size:cover">
                
  <div class="iconpart">
<a href="#" >  
  <svg class="imageIcon">
    <use xlink:href="icons/sprite.svg#icon-heart-outlined"</use>
  </svg>
</a>
<a href="review.php?id=' . $item['id'] . '">   
  <svg class="imageIcon">
    <use xlink:href="icons/sprite.svg#icon-eye"></use>
  </svg>
</a>
<a  href="cart.php">   
  <svg style="fill:white" class="imageIcon">
    <use xlink:href="icons/sprite.svg#icon-cart"></use>
  </svg>
</a>
</div>
</div>
               </div>
               
               <div class="faces back">
               <div class="imagepart" style="background-image:url(../controller/' . $item['item_picture'] . ');background-size:cover">
                
               <div class="iconpart">
  <a href="#" >  
               <svg class="imageIcon">
                 <use xlink:href="icons/sprite.svg#icon-heart-outlined"</use>
               </svg>
  </a>
       <a href="review.php?id=' . $item['id'] . '">   
               <svg class="imageIcon">
                 <use xlink:href="icons/sprite.svg#icon-eye"></use>
               </svg>
  </a>
             <a  href="cart.php">   
               <svg style="fill:white" class="imageIcon">
                 <use xlink:href="icons/sprite.svg#icon-cart"></use>
               </svg>
  </a>
        </div>
           </div>
  
           
               <div class="separator"></div>
               <div class="itemname">
                 <p>
               ' . $item['item_name'] . '
                 </p>
               </div>
               <div class="separator"></div>
               <div class="description">
                   <p>' . $item['item_description'] . '
                 </p>
               </div>
               <div class="separator"></div>
               <div class="rating">';
              for ($i = 0; $i < 5; $i++) {
                 if ($i < $item['total_ranking']) {
                    echo '<p>
                          <svg class="starA" >
                          <use xlink:href="icons/sprite.svg#icon-star"></use>
                          </p>';
                 } else {
                    echo '
                          <p>
                          <svg class="star" >
                          <use xlink:href="icons/sprite.svg#icon-star"></use>
                          </p>';
                 }
              }
              $_SESSION['total_rankings'] = $item['total_ranking'];
  
              echo '</div>
  <div class="separator"></div>
               <div class="price">
                  <p>$' . $item['item_price'] . '
              </p> </div>
              <div class="separator"></div>
               <div class="howmanysold">
                  hello
               </div>
               </div>
               
            </div>';
         }
         echo '
      </div>
   </div>
   </div>'; ?>

         <?php
         //         echo "      <div id='popup'class='popup'>
         //  <div id='detail' class='contain'>";   
         //         $itemDetail=$fetch->fetchItemDetail($str);
         //         while($data=$itemDetail->fetch_assoc()){
         //  echo '<div class="photo">
         //             <img src="'.$data['item_picture'].'" alt="">
         //         </div>
         //         <div class="des">
         //             <h1>'.$data["item_name"].'</h1>
         //             <p style="width:60%">'.$data["item_description"].'</p>
         //             <div class="login_div adjust">
         //                 <div class="table">
         //                     <h3>price</h3>
         //                     <h3>'.$data["item_price"].'</h3>
         //                 </div>

         //                 <div class="separator rev"></div>
         //                 <div class="table">
         //                     <h3>status</h3>
         //                     <h3>Sold</h3>
         //                 </div>
         //                 <div class="separator rev"></div>
         //                 <div class="table">
         //                     <h3>reviews</h3>
         //                     <h3>';
         //                     for($i=0;$i<5;$i++){
         //                      if($i<$item['ranking']){
         //                       echo '<p>
         //                        <svg class="starA" >
         //                        <use xlink:href="icons/sprite.svg#icon-star"></use>
         //                        </p>';
         //                      } else {
         //                        echo '
         //                        <p>
         //                        <svg class="star" >
         //                        <use xlink:href="icons/sprite.svg#icon-star"></use>
         //                        </p>';
         //                      }
         //      }


         // echo '        </h3>
         //                 </div>
         //                 <div class="separator rev"></div>
         //                 <div class="table">
         //                     <h3>quantity</h3>
         //                     <h3>+4</h3>
         //                 </div>
         //                 <div class="separator rev"></div>
         //                 <div class="logins">

         //                     <button class="login_btn btn btn2">Add Cart</button>
         //                     <button class="login_btn btn btn3">Add Wish List</button>
         //                     <button class="login_btn btn btn1">Buy now</button>
         //                 </div>
         //             </div>
         //         </div>
         //         <div class="reviews">
         //             <div class="reviews_many">
         //             <div class="onereview">
         //         <img src="3000.jpg" alt=""> 
         //             <div class="login_div review">
         //             <h2>Amanaual</h2> 
         //             <h3>******</h3>  
         //             <h4>Lorem ipsum dolor sit amet consectetur,
         //                  adipisicing elit. 
         //             </h4>
         //             <h5>12/05/1990</h5>
         //             </div>
         //             </div>
         //             </div>
         //             <div class="write_review">
         //             <img src="3000.jpg" alt="">  
         //             <div class="login_div input_div">
         //             <input type="text" class="search__input review_input  here" placeholder="Write Your review">
         //             </div>   
         //         </div>
         //         </div>
         //         </div>
         //    ';
         // }
         //     ;
         ?>

      </div>
   </div>
   </div>
   <footer class="footer">

   </footer>
   <div class="alert">
  <div class="alert-content">
    <div class="alert-header">
      <h2 class="alert-title"></h2>
      <button class="alert-close" onclick="closeAlert()">×</button>
    </div>
    <div class="alert-body">
      <p class="alert-message"></p>
    </div>
  </div>
</div>
   <script src="second.js"></script>
</body>

</html>