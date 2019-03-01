<html lang="en">
    <head>
        <?php
            $title = "Home";
            require 'header.php';
        ?>
    </head>
    <body>
        <?php require 'navbar.php'; ?>
        <div id="myCarousel" class="canvas carousel slide" data-ride="carousel">
            <ol class="carousel-indicators xtra-border">
                <?php
                    require 'db.php';

                    $sql = "SELECT * FROM home_display";
                    $count = 0;

                    if($resultSet = $con->query($sql)) {
                        while($result = $resultSet->fetch_assoc()) {
                            echo '<li data-target="#myCarousel" data-slide-to="'.$count.'"';
                            if($count == 0) {
                                echo ' class="active"';
                            }
                            echo '></li>';
                            $count++;
                        }
                    }
                    else {
                        die("Server Error: " . mysqli_error($con));
                    }

                ?>
            </ol>
            <div class="carousel-inner" role="listbox">
                <?php
                    $count = 0;

                    if($resultSet = $con->query($sql)) {
                        while($result = $resultSet->fetch_assoc()) {
                            echo '<div class="item';
                            if($count == 0) {
                                echo ' active';
                            }
                            echo '">';
                            echo '<img src="img/'.$result["image"].'">';
                            echo '<div class="carousel-caption">';
                            echo '<h2 class="sub-title-home">'.$result["heading"].'</h2>';
                            echo '<h1 class="title-home">'.$result["caption"].'</h1>';
                            echo '</div></div>';
                            $count++;
                        }
                    }
                    else {
                        die("Server Error: " . mysqli_error($con));
                    }
                ?>
            </div>
        </div>

        <?php require 'footer.php' ?>
        <script>
            $('.carousel').carousel({
                interval: 5000 //changes the speed
            });
        </script>
    </body>
</html>