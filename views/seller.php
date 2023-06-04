<?php
include('head.php');
include('header.php'); ?>

<body>
    <div class="container">
        <div class="sellerpanel">
            <div class="options-panel">
                <ul class="options-list">
                    <li><a href="#">Create Products</a></li>
                    <li><a href="#">Create Catagory</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Orders</a></li>
                    <li><a href="#">Option 5</a></li>
                </ul>
                <button class="toggle-button" onclick="togglePanel()">User Pannel</button>
            </div>
        </div>
        <div class="createnew">
            <div class="form_input">
                <h1>Create Products</h1>
            </div>
            <form action="../controller/ItemController.php" enctype="multipart/form-data" method='post' class="login_div form">
                <div class="form_input">
                    <input class="inputs" type="text" placeholder="Select Catagory" name="catagoryName">
                </div>
                <div class="form_input">
                    <input class="inputs" type="text" placeholder="Product Name" name="itemName">
                </div>
                <div class="form_input">
                    <textarea name="itemDiscription" id="discription" cols="1" rows="1" placeholder="Write Discription"></textarea>
                </div>
                <div class="form_input">
                    <input type="number" placeholder="item price" name="itemPrice" class="inputs">
                </div>
                <div class="form_input">
                    <div class="custom-file">
                        <input type="file" name="itemPicture" class="custom-file-input" id="customFile" data-content="Choose file">
                        <label class="custom-file-label" for="customFile">Upload Picture</label>
                    </div>
                </div>
                <div class="form_input">
                    <button class="create_pro">Create Product</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="index.js"></script>
</body>

</html>