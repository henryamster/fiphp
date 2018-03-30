<!--?php require_once("../includes/functions.php");?-->
<!--?php include("../includes/functions.php");?-->
<html>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Fresh Inventory</title>
    <link href="https://fonts.googleapis.com/css?family=Acme|Questrial|The+Girl+Next+Door" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
    <nav class="mainNav">
        <ul id="mainNav">
            <li id="logo">Fresh&nbsp;Inventory</li>  
            <li>Home</li>
            <li>About</li>
            <li class="dropper color-secondary-1-2
                ">Items</li>
            <li class="dropDown">Add&nbsp;Item</li>
            <li class="dropDown">View&nbsp;Item</li>
            <li class="dropper color-secondary-1-2">Inventories</li>
            <li class="dropDown">Take&nbsp;Inventory</li>
            <li class="dropDown">View&nbsp;Inventory</li>
            <li>My&nbsp;Profile</li>
            <li class="dropper color-secondary-1-2">Team<li>
            <li class="dropDown">My&nbsp;Team</li>
            <li class="dropDown">Edit Permissions</li>

        </ul>
    </nav>
    </header>
 
   <ul>
    <?php
    
$user = 'root';
$password = 'root';
$db = 'djk';
$host = 'localhost';
$port = 3306;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link, 
   $host, 
   $user, 
   $password, 
   $db,
   $port
);
    echo $success;
    
    $query= "SELECT * FROM users";
    $result = mysqli_query($link, $query);
      if ($result){
   while ($row = $result->fetch_assoc()) {
       
       ?><li> <?php
    echo "<h1 class='handle'>" . $row['handle'] . "</h1> <p class='username'>" .
        $row['user'] . "</p>";
    ?> </li><?php
       
}
}

    else{
    die('died');} 
    ?>
    </ul>
    <!--?php include("../includes/functions.php");?>-->
</body>
</html>
</html>