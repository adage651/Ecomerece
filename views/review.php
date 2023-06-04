<?php
include('head.php');
include('header.php');
?>

<body>
    <!-- <div class="contain">
        
        <div class="photo">
            <img src="3000.jpg" alt="">
         
        </div>
        <div class="des">
            <h1>item Name</h1>
            <p style="width:60%">Lorem ipsum dolor sit amet consectetur,
                adipisicing elit. Est consectetur debitis cum non illo repellendus odio repellat ab, perferendis animi similique
                impedit aliquid. Distinctio, repellat ea vero architecto iusto atque.
            </p>
            <div class="login_div adjust">
                <div class="table">
                    <h3>price</h3>
                    <h3>$20000</h3>
                </div>

                <div class="separator rev"></div>
                <div class="table">
                    <h3>status</h3>
                    <h3>Sold</h3>
                </div>
                <div class="separator rev"></div>
                <div class="table">
                    <h3>reviews</h3>
                    <h3>*******</h3>
                </div>
                <div class="separator rev"></div>
                <div class="table">
                    <h3>quantity</h3>
                    <h3>+4</h3>
                </div>
                <div class="separator rev"></div>
                <div class="logins">

                    <button class="login_btn btn btn2">Add Cart</button>
                    <button class="login_btn btn btn3">Add Wish List</button>
                    <button class="login_btn btn btn1">Buy now</button>
                </div>
            </div>
        </div>
        <div class="reviews">
            <div class="reviews_many">
            <div class="onereview">
        <img src="3000.jpg" alt=""> 
            <div class="login_div review">
            <h2>Amanaual</h2> 
            <h3>******</h3>  
            <h4>Lorem ipsum dolor sit amet consectetur,
                 adipisicing elit. 
            </h4>
            <h5>12/05/1990</h5>
            </div>
            </div>
            </div> -->



            <?php

include('../controller/FetchData.php');
$fetch=new FetchData();
echo'
    <div id="detail" class="contain">';
    $itemDetail=$fetch->fetchItemDetail($_REQUEST['id']);
    while($data=$itemDetail->fetch_assoc()){
echo '<div class="photo">
        <img src="../controller/'.$data['item_picture'].'" alt="">
    </div>
    <div class="des">
        <h1>'.$data["item_name"].'</h1>
        <p style="width:60%">'.$data["item_description"].'</p>
        <div class="login_div adjust">
            <div class="table">
                <h3>price</h3>
                <h3>'.$data["item_price"].'</h3>
            </div>

            <div class="separator rev"></div>
            <div class="table">
                <h3>status</h3>
                <h3>Sold</h3>
            </div>
            <div class="separator rev"></div>
            <div class="table">
                <h3>reviews</h3>
                <div class="rating">';
                for($i=0;$i<5;$i++){
                         if($i<$_SESSION['total_rankings']){
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
               
   echo '</div>
            </div>
            <div class="separator rev"></div>
            <div class="table">
                <h3>quantity</h3>
                <h3>+4</h3>
            </div>
            <div class="separator rev"></div>
            <div class="logins">

                <button class="login_btn btn btn2">Add Cart</button>
                <button class="login_btn btn btn3">Add Wish List</button>
                <button class="login_btn btn btn1">Buy now</button>
            </div>
        </div>
    </div>


    ';

$profiles=explode(',',$data['profile_picture']);
$userNames=explode(',',$data['user_name']);
$reviews=explode(',',$data['review']);
$ranks=explode(',',$data['ranking']);
$review_date=explode(',',$data['review_date']);

//while($profile as $profiles){
    for ($i = 0; $i < count($profiles); $i++) {
    
   echo 
   ' <div class="reviews">
        <div class="reviews_many">
        <div class="onereview">
    <img src="../controller/'.$profiles[$i].'" alt=""> 
        <div class="login_div review">
        <h2>'.$userNames[$i].'</h2> 
        <h3>

  <div class="rating">';

             for($j=0;$j<5;$j++){
                      if($j<$ranks[$i]){
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
        
       echo  ' </div>
       </h3>  
        <h4>
        '.$reviews[$i].' 
        </h4>
        <h5>'.$review_date[$i].'</h5>
        </div>
        </div>
        </div>
    
        ';
    }
}
        ?>

















            <?php   
            echo '
            <div class="write_review">
            <img src=../controller/'.$_SESSION['profilePicture'].' alt="">  
            <div class="login_div input_div">
    
            <input type="text" class="search__input review_input  here" placeholder="Write Your review">
        </div>   
        <div class="user_ranking">
        <h1>Rate Also</h1>
        <div class="rating">
            <svg  class="star review_star" >
                        <use xlink:href="icons/sprite.svg#icon-star"></use>
            </svg>  
            <svg class="star review_star" >
                        <use xlink:href="icons/sprite.svg#icon-star"></use>
            </svg>  
            <svg class="star review_star" >
                        <use xlink:href="icons/sprite.svg#icon-star"></use>
            </svg>  
            <svg class="star review_star" >
                        <use xlink:href="icons/sprite.svg#icon-star"></use>
            </svg>  
            <svg class="star review_star" >
                        <use xlink:href="icons/sprite.svg#icon-star"></use>
            </svg>  
            </div>
            </div>
            <input type="hidden" value="'.$_SESSION['id'].'" class="id">
            <button class="login_btn review_btn">comment</button>
        </div>
        ';
        ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="index.js"></script>
</body>
</html>
