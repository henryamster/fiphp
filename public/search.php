
<?php
include('../includes/functions.php');
include('../includes/db-connection.php');
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
     echo  $row['itemName'];   
    }

}
?>


