<?php
include('../controller/AuthGoogleController.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="login.css" />
  <title>Login</title>
</head>

<body>
  <div id="demotext">
    <h1>Ethio<br />Gebiya</h1>
  </div>
  <div id="login" class="motivation">
    <h2 class="motivate">
      Unlock your potential as a buyer and seller, and discover the endless
      possibilities what you can achieve.
    </h2>
  </div>
  <div class="login_div">
    <div class="login_welcome">
      <svg class="login_icon">
        <use xlink:href="icons/sprite.svg#icon-login1"></use>
      </svg>
      <h1>Welcome!</h1>
      <h3>Sign in to your account</h3>
    </div>
    <form action="../controller/loginValidator.php" class="login_form" method="post" enctype="multipart/form-data">
      <div class="form_input">
        <input type="text" name="username" class="input username" placeholder="User name" />
      </div>
      <div class="form_input">
        <input type="password" name="password" id="password" class="input password" placeholder="Password" />
      </div>
      <div class="form_input">
        <button class="login">Login</button>
      </div>

      <div class="form_input">
        <div class="alternate">
          <h3>Or Sign Up Using</h3>
          <div class="social_div">
            <a href="#">
              <svg class="facebook social_media">
                <use xlink:href="icons/sprite.svg#icon-facebook-with-circle"></use>
              </svg>
            </a>
            <a href="#">
              <svg class="twitter social_media">
                <use xlink:href="icons/sprite.svg#icon-twitter-with-circle"></use>
              </svg>
            </a>
            <a href='<?php
                      echo $google_client->createAuthUrl();
                      ?>'>
              <svg class="google social_media">
                <use xlink:href="icons/sprite.svg#icon-google-with-circle"></use>
              </svg>
            </a>
          </div>
        </div>
        <div class="separator"></div>
        <a href="#popup" class="createNew">Create new account</a>
      </div>
    </form>
  </div>
  <div id="popup" class="popup">
    <form action="../controller/userController.php" id="sign_up" class="popup_content login_div" method="post" enctype="multipart/form-data">
      <a href="#login">
        <svg class="close social_media">
          <use xlink:href="icons/sprite.svg#icon-circle-with-cross"></use>
        </svg>
      </a>
      <h1 class="sing-up-p">Sign up</h1>
      <h3 class="sing-upp">its quick and easy</h3>

      <div class="separator"></div>
      <div class="form_input1">
        <input name="username" type="text" class="input" placeholder="User name" />
      </div>
      <div class="form_input1">
        <input type="password" class="input password" placeholder="New Password" />
      </div>
      <div class="form_input1">
        <input name="password" type="password" class="input password" placeholder="Confirm Password" />
      </div>
      <fieldset>
        <legend>
          <h3 class="sing-upp">Personal Info *Mandatory</h3>
        </legend>
        <div class="form_input1">
          <div class="form_input1">
            <div class="form_radio-group">
              <input type="radio" class="form_radio-input" value="Male" id="Male" name="gender" />
              <label for="Male" class="form_radio-label">
                <span class="form_radio-button"></span>
                <h3 style="display:inline-block">Male</h3>
              </label>
            </div>

            <div class="form_radio-group">
              <input type="radio" class="form_radio-input" id="Female" name="gender" />
              <label for="Female" class="form_radio-label">
                <span class="form_radio-button"></span>
                <h3 style="display:inline-block">Female</h3>
              </label>
            </div>
          </div>
          <div class="form_input1">
            <div class="form_input1">
              <input name="address" type="text" class="form__input" placeholder="Address" id="name" required />
              <label for="name" class="form_label">Address</label>
            </div>

            <div class="form_input">
              <input name="email" type="email" class="input form__input" placeholder="Email address" id="email" required />
              <label for="email" class="form_label">Email address</label>
            </div>
          </div>
          <div class="form_input1">
            <label for="image">
              <h3 style="text-align: left">Profile Picture</h3>
            </label>
            <input name="profilePicture" type="file" class="input" name="picture" id="picture" />
          </div>
        </div>
      </fieldset>
      <div class="separator"></div>
      <div class="form_input1">
        <button class="createNew signup">Sign Up</button>
      </div>
    </form>
  </div>
  <!-- <div class="user-nav__user">
    <img src="image.jpg" alt="User photo" class="user-nav__user-photo">
    <span class="user-nav__user-name">Amanu</span>
   </div> -->
  <img src="image.jpg" alt="Friend 1" class="recommend_photo recommended">
</body>

</html>