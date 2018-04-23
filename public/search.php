
<?php
echo":";
if (isset($_q)){
$searchTerm = $_q['search'];
     echo $searchTerm;
     $query = "SELECT * FROM 'item' WHERE 'itemName' LIKE '" . $search . "'";
     $item_set = mysqli_query($link, $query);
//     confirm_query($item_set);
    while($row = mysqli_fetch_array($item_set)){
     echo "okay";   
    }

}
?>


