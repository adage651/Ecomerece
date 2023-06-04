<?php include('head.php');
include('header.php');

require_once('../controller/Database.php');
$database=Database::getInstance();
$data=$database->getCartItem($_REQUEST['user_id']);
?>


<div class="containers">
		<h1>Shopping Cart</h1>
		<table>
			<thead>
				<tr>
				<th>Picture</th>
					<th>Product</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>Remove</th>
                    <th>Checkout Self</th>
				</tr>
			</thead>
			<tbody>
				<?php
				while($cartItem=$data->fetch_assoc()){
					$itemId=explode(',',$cartItem['item_id']);
					$itemName=explode(',',$cartItem['item_name']);
					$itemPicture=explode(',',$cartItem['item_picture']);
					$itemPrice=explode(',',$cartItem['item_price']);



				for($i=0;$i<count($itemName);$i++){
				echo '
				<tr>
				<td class="picture" style="background-image:url(../controller/'.$itemPicture[$i].')"></td>
					<td>'.$itemName[$i].'</td>
					
					<td>$'.$itemPrice[$i].'</td>
					<td><input type="number" value="1"></td>
					<td><button onclick="remove('.$itemId[$i]. ",".$_REQUEST['user_id'].')" class="remove">Remove</button></td>
                    <td><button onclick="checkout('.$itemId[$i]. ",".$_REQUEST['user_id'].')" class="checkout-all">Checkout self</button></td>
				</tr>';
			}
			}?>
			</tbody>
		</table>
		<div class="checkout">
           <span class="prices">$8000</span> 
			<button class="checkout-all">Checkout All</button>
		</div>
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
		<script src="cart.js"></script>
	</div>