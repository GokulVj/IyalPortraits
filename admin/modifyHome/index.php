<html lang="en">
    <head>
        <?php
            $title = "Modify Home";
            require '../../header.php';
        ?>
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <link href="../../css/modify.css" rel="stylesheet">
    </head>
    <body>
        <?php require '../../navbar.php'; ?>

        <div class="canvas" >
            <div class="container page-container" style="padding-right:45px;">
                <form>
                    <?php
                        require '../../db.php';

                        $sql = "SELECT * FROM home_display where is_deleted=0";
                        $count = 1;

                        if($resultSet = $con->query($sql)) {
                            while($result = $resultSet->fetch_assoc()) {
                                if($count == 1) {
                                    echo '<fieldset id="' . $result["id"] .'" style="margin-top:75px!IMPORTANT;">';
                                }
                                else {
                                    echo '<fieldset id="' . $result["id"] .'">';
                                }
                                echo '<legend><span class="legend-span">Slide '.$count.'</span>  <a class="edit-button btn btn-default"><i class="fas fa-edit"></i> Edit</a> <a class="delete-button btn btn-danger"><i class="fas fa-trash"></i> Delete</a> <a class="reset-button btn btn-warning"><i class="fas fa-times"></i> Reset</a> <a class="submit-button btn btn-success"><i class="fas fa-check"></i> Submit</a></legend>';
                                echo '<div class="form-group">';
                                echo '<label for="">Image</label>';
                                echo '<input type="text" class="form-control image-value" id="" value="'.$result["image"].'" disabled>';
                                echo '</div>';
                                echo '<div class="form-group">';
                                echo '<label for="">Heading</label>';
                                echo '<input type="text" class="form-control heading-value" id="" value="'.$result["heading"].'" disabled>';
                                echo '</div>';
                                echo '<div class="form-group">';
                                echo '<label for="">Caption</label>';
                                echo '<input type="text" class="form-control caption-value" id="" value="'.$result["caption"].'" disabled>';
                                echo '</div></fieldset>';
                                $count++;
                            }
                        }
                        else {
                            die("Server Error: " . mysqli_error($con));
                        }
                    ?>
                </form>
            </div>
        </div>

        <?php require '../../footer.php' ?>

        <script>
            $(document).ready(function () {
                $('.edit-button').click(function () {
                    $fieldsetElement = $(this).parent().parent();
                    $fieldsetElement.find('.image-value').prop("disabled", false);
                    $fieldsetElement.find('.heading-value').prop("disabled", false);
                    $fieldsetElement.find('.caption-value').prop("disabled", false);
                    $fieldsetElement.find('.reset-button').css("display", "inline-block");
                    $fieldsetElement.find('.submit-button').css("display", "inline-block");
                });

                $('.delete-button').click(function () {
                    $fieldsetElement = $(this).parent().parent();
                    if (confirm("Are you sure?")) {
                        $.ajax({
                            url: "../../ajaxFunctions.php?function=deleteHomeContentsById",
                            method: 'post',
                            data: {"id": $fieldsetElement.attr('id')},
                            success(data) {
                                result = JSON.parse(data);
                                if (result.success) {
                                    location.reload();
                                }
                            }
                        });
                    }
                });

                $('.reset-button').click(function () {
                    $fieldsetElement = $(this).parent().parent();
                    $.ajax({
                        url: "../../ajaxFunctions.php?function=getHomeContentsById",
                        method: 'post',
                        data: {"id": $fieldsetElement.attr('id')},
                        success(data) {
                            result = JSON.parse(data);
                            if (result.success) {
                                $fieldsetElement.find('.image-value').val(result.image).prop("disabled", true);
                                $fieldsetElement.find('.heading-value').val(result.heading).prop("disabled", true);
                                $fieldsetElement.find('.caption-value').val(result.caption).prop("disabled", true);
                            }
                        }
                    });
                    $fieldsetElement.find('.reset-button').css("display", "none");
                    $fieldsetElement.find('.submit-button').css("display", "none");
                });

                $('.submit-button').click(function () {
                    $fieldsetElement = $(this).parent().parent();
                    $image = $fieldsetElement.find('.image-value').val().trim();
                    $heading = $fieldsetElement.find('.heading-value').val().trim();
                    $caption = $fieldsetElement.find('.caption-value').val().trim();

                    if ($image === "" || $heading === ""  || $caption === "") {
                        if ($image === "") {
                            $fieldsetElement.find('.image-value').css("border-color", "red");
                        }
                        if ($heading === "") {
                            $fieldsetElement.find('.heading-value').css("border-color", "red");
                        }
                        if ($caption === "") {
                            $fieldsetElement.find('.caption-value').css("border-color", "red");
                        }
                    }
                    else {
                        $.ajax({
                            url: "../../ajaxFunctions.php?function=setHomeContentsById",
                            method: 'post',
                            data: {
                                "id": $fieldsetElement.attr('id'),
                                "image": $image,
                                "heading": $heading,
                                "caption": $caption
                            },
                            success(data) {
                                result = JSON.parse(data);
                                if (result.success) {
                                    location.reload();
                                }
                            }
                        });
                    }
                });
            });
        </script>
    </body>
</html>
