<?php include("../includes/header.php");?>
<?php require_once('../includes/db-connection.php');?>
<?php include('../includes/functions.php');?>


<?php 

    $itemName=  mysqli_escape_string($link, $_POST['itemName']);
    $itemDescription=  mysqli_escape_string($link, $_POST['itemDescription']);
    $upc=  mysqli_escape_string($link, $_POST['upc']);
    $cPrice=  mysqli_escape_string($link, $_POST['cPrice']);
    $adPrice=  mysqli_escape_string($link, $_POST['adPrice']);
$bulkbool = (isset($_POST['bulk']))? '1': '0';
    $bulk=  mysqli_escape_string($link, $bulkbool);
   
    $query = "INSERT INTO item (itemName, itemDescription, upc, cPrice, adPrice, bulk)
    VALUES('" . $itemName . "','" . $itemDescription . "','" . $upc . "','" . $cPrice . "','" . $adPrice . "','" . $bulk.  "')";

if (mysqli_query($link, $query)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
?>



<div role="main" class="container">
              
              
              <div class="panel landing">
                  Your item has been submitted.
               </div> 
               
               <div class="panel" id="itemResults">
                    <div class="item">
    <h4><?= $_POST['itemName'] ?></h4>
                   <h5><?= $_POST['upc'] ?></h5>
                   <p><?= $_POST['itemDescription'] ?></p>
                   <ul>
                       <li>Current Price: <?= $_POST['cPrice'] ?></li>
                        <li>Ad Price: <?= $_POST['adPrice'] ?></li>
                         <li>Bulk: <?= isset($_POST['bulk'])? 'bulk' : 'not bulk' ?></li>
                   </ul>
                    </div>
               </div>
           </div>



   <?php include("../includes/footer.php");?>