<?php
include('head.php');
include('../controller/FetchData.php');
$fetch=new FetchData();
echo'
<body>
    <div id="detail" class="contain">';
    $itemDetail=$fetch->fetchItemDetail(9);
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
                 if($i<$data['ranking']){
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


echo '       </div>
            </div>
            <div class="separator rev"></div>
            <div class="table">
                <h3>quantity</h3>
                <h3>+4</h3>
            </div>
            <div class="separator rev"></div>
            <div class="logins">

                <a href="cart.php" class="login_btn btn btn2">Add Cart</a>
                <a class="login_btn btn btn3">Add Wish List</a>
                <a class="login_btn btn btn1">Buy now</a>
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
        </div>
        <div class="write_review">
        <img src="3000.jpg" alt="">  
        <div class="login_div input_div">
        <input type="text" class="search__input review_input  here" placeholder="Write Your review">
        
        </div>   
    </div>
    </div>

';

    }
echo '</div>
</body>

</html>';
?>