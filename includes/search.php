<?php
include('functions.php');
$q = $_GET['q'];
if (isset($q)){
                $query = "SELECT * FROM item WHERE itemName LIKE '%" . $q . "%'";
                $user = 'root';
                $password = 'root';
                $db = 'djk';
                $host = 'localhost';
                $port = 3306;
                $link = mysqli_init();
                $success = mysqli_real_connect(
                        $link, $host, $user, $password, $db, $port
                );
   
     $result = mysqli_query($link, $query);
// echo $result;
 confirm_query($result);
    while($row = mysqli_fetch_array($result)){
    
        echo '<div class="item">';
        echo "<h4>" . $row['itemName'] ." </h4>";
        echo "<h5>" . $row['upc'] . "</h5>";
        echo "<ul><li>";
        echo "Current Price: " . $row['cPrice'];
        echo "</li><li>";
        echo "Ad Price: " . $row['adPrice'];
        echo "</li><li>";
        echo "Bulk: " . ($row['bulk'] ? 'yes' : 'no'); 
        echo "</li><p>";
        echo $row['itemDescription'];
        echo "</p></ul></div>";
    }

}
?>


