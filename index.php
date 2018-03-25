<html>
    <!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Acme|Questrial|The+Girl+Next+Door" rel="stylesheet">
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
    
  <style>
      ul{
          list-style: none;
          display: flex;
          flex-direction: row;
      }
      li{
          padding:12px;
      }
      .handle{
       color:rgb(81, 152, 57);   
       font-family: 'The Girl Next Door', cursive;
      }
      .username{
          color: antiquewhite;
          font-family: 'Acme', sans-serif;
      }
    </style>
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
</body>
</html>
</html>