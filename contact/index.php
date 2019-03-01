<html lang="en">
    <head>
        <?php
            $title = "Contact Us";
            require '../header.php';
        ?>
    </head>
    <body class="contact-page">
        <?php require '../navbar.php'; ?>

        <div class="canvas contact-page">
            <div class="contact-bg col-md-8 col-sm-12">
                <img src="../img/dolon.jpg" alt="" width="100%">
            </div>
            <div class="col-md-4 col-sm-12 contact-bar">
                <!--TODO replace map image with something better-->
                <img class="map-img" src="../img/map.jpg" alt="" width="100%">
                <h3 class="interest-text text-center"> Thanks for your Interest </h3>
                <div class="col-md-6 add-text">
                    <!--TODO add original address and contact number-->
                    44, Akhaliya Rd. Akhaliya
                    CA 94019. USA CO.
                    (561) 456-4567
                </div>
                <div class="col-md-6 add-text">
                    Summer Office Ours
                    (March-October)
                    Mon-Fri (am-6am PST)
                </div>
                <div class="col-sm-12 col-md-12">
                    <form method="post" action="contact.php">
                        <div class="controls controls-row">
                            <div class="">
                                <input id="name" name="name" type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="">
                                <input id="email" name="email" type="email" class="col-md-6 form-control" placeholder="Email address">
                            </div>
                        </div>
                        <div class="controls">
                            <textarea id="message" name="message" class="col-md-12" placeholder="Your Message" rows="5"></textarea>
                        </div>
                        <div class="controls btn-full">
                            <button id="contact-submit" name="submit" value="Submit" type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php require '../footer.php' ?>
    </body>
</html>