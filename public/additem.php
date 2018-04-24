<?php include("../includes/header.php");
      require_once("../includes/db-connection.php");
      ?>
      <div role="main" class="container">
      <div class="panel" id="itemSubmission">
      <h1>Add Item</h1>
      <p id="alert"></p>
      <form action="/public/submitItem.php" method="post" onsubmit="return checkForm()">
          <label for="itemName">Item Name:</label><input type="text" name="itemName" id="itemName"></input>
          <label for="itemDescription">Item Description:</label><textarea  name="itemDescription" id="itemDescription"></textarea>
          <label for="upc">upc:</label><input type="text" name="upc" id="upc">
          <label for="cPrice">Current Price:</label><input type="text" name="cPrice" id="cPrice">
          <label for="adPrice">Ad Price:</label><input type="text" name="adPrice" id="adPrice">
          <label for="bulk">Bulk?:</label>
          <input id="bulk" name="bulk" type="checkbox" name="bulk"></input>
          <input type="submit" id="submit"></input>
    
          
      </form>
      </div>
      </div>
      </div>
      <script src="js/addItem.js"></script>
      <?php include("../includes/footer.php");
