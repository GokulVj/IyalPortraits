<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Iyal Portraits | <?php echo $title ?></title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="http://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<?php
    if($_SERVER['HTTP_HOST'] == "localhost") {
        $iyal = "/iyal/";
    }
    else {
        $iyal = "/";
    }
    $host = "http://".$_SERVER['HTTP_HOST'].$iyal;
    echo '<link rel="icon" href="'.$host.'img/favicon.png">';
    echo '<link href="'.$host.'css/jasny-bootstrap.min.css" rel="stylesheet">';
    echo '<link href="'.$host.'css/navmenu-reveal.css" rel="stylesheet">';
    echo '<link href="'.$host.'css/style.css" rel="stylesheet">';
?>