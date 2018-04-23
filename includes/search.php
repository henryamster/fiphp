<?php
include('functions.php');
$q = $_GET['q'];
if (isset($q)){
               
               include('db-connection.php');
       $query = "SELECT * FROM item WHERE itemName LIKE '%" . mysqli_real_escape_string($link, $q) . "%'";

     $result = mysqli_query($link, $query);
// echo $result;

searchRows($result);
}


?>