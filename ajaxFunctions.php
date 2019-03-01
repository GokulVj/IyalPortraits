<?php
    require 'db.php';

    if (isset($_GET['function'])) {
        switch ($_GET['function']) {
            case 'getHomeContentsById':
                if (isset($_POST['id'])) {
                    $id = $_POST['id'];
                    $query = "select * from home_display where id=$id";
                    if ($result = mysqli_query($con, $query)) {
                        if (mysqli_num_rows($result) != 0) {
                            $assoc = mysqli_fetch_assoc($result);
                            $image = $assoc['image'];
                            $heading = $assoc['heading'];
                            $caption = $assoc['caption'];
                            echo '{"success": true, "image": "' . $image . '", "heading": "' . $heading . '", "caption": "' . $caption . '"}';
                        }
                        else {
                            echo '{"success":false}';
                        }
                    }
                    else {
                        echo '{"success":false}';
                    }
                }
            case 'setHomeContentsById':
                if (isset($_POST['id']) and isset($_POST['image']) and isset($_POST['heading']) and isset($_POST['caption'])) {
                    $id = $_POST['id'];
                    $image = $_POST['image'];
                    $heading = $_POST['heading'];
                    $caption = $_POST['caption'];
                    $query = "update home_display set image='$image',heading='$heading',caption='$caption' where id=$id";
                    if ($result = mysqli_query($con, $query)) {
                        echo '{"success":true}';
                    }
                    else {
                        echo '{"success":false}';
                    }
                }
        }
    }
?>