<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js" integrity="sha256-oTyWrNiP6Qftu4vs2g0RPCKr3g1a6QTlITNgoebxRc4=" crossorigin="anonymous"></script>
<?php
    if($_SERVER['HTTP_HOST'] == "localhost") {
        $iyal = "/iyal/";
    }
    else {
        $iyal = "/";
    }
    $host = "http://".$_SERVER['HTTP_HOST'].$iyal;
    echo '<script src="'.$host.'js/jasny-bootstrap.min.js"></script>';
?>
