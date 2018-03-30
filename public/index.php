 <?php

                
             

                $query = "SELECT * FROM users";
                $result = mysqli_query($link, $query);
                if ($result) {
                    while ($row = $result->fetch_assoc()) {
                        ?><li> <?php
                            echo "<h1 class='handle'>" . $row['handle'] . "</h1> <p class='username'>" .
                            $row['user'] . "</p>";
                            ?> </li><?php
                    }
                } else {
                    die('died');
                }
                ?>
                
<?php require_once("../includes/functions.php");?>
<?php include("../includes/header.php");?>



            <?php include("../includes/footer.php");?>
    