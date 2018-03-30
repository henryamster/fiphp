<!--?php require_once("../includes/functions.php");?-->
<?php include("../includes/header.php");?>


            <ul>
                <?php
                $user = 'root';
                $password = 'root';
                $db = 'djk';
                $host = 'localhost';
                $port = 3306;

                $link = mysqli_init();
                $success = mysqli_real_connect(
                        $link, $host, $user, $password, $db, $port
                );
                echo $success;

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
            </ul>

            <?php include("../includes/footer.php");?>
        </body>
    </html>
</html>