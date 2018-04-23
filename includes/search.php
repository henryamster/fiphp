<?php
include('functions.php');
$q = $_GET['q'];
if (isset($q)){
                $query = "SELECT * FROM item WHERE itemName LIKE '%" . $q . "%'";
               include('db-connection.php');
   
     $result = mysqli_query($link, $query);
// echo $result;

searchRows($result);
}


?>