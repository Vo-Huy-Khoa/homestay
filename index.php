<?php
include_once('model/helper.php');
$db = new Database();


$view = filter_input(INPUT_GET, 'v');
$action = filter_input(INPUT_GET, 'a');


if (empty($view) || empty($action)) {
    $view = 'common';
    $action = 'home';
}

$path = 'view/' . $view . '/' . $action . '.php';

if (file_exists($path)) {
    include_once($path);
} else {
    header('Location:404.php');
}

?>

<base href="<?php echo Helper::get_url(''); ?>">

<!-- css -->

<style>
    .page-header-inner {
        height: 160px;
    }
</style>
<link href="public/user/img/favicon.html" rel="icon">

<!-- <link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin> -->
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&amp;family=Montserrat:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

<link href="public/user/css/all.min.css" rel="stylesheet">
<link href="public/user/css/bootstrap.min.css" rel="stylesheet">
<link href="public/user/css/style.css" rel="stylesheet">
<link href="public/user/lib/animate/animate.min.css" rel="stylesheet">
<link href="public/user/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="public/user/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />


<!-- script -->
<script data-cfasync="false" src="public/user/js/email-decode.min.js"></script>
<script src="public/user/js/jquery-3.4.1.min.js" type="b4b14cc37593fabf24627a93-text/javascript"></script>
<script src="public/user/js/bootstrap.bundle.min.js" type="b4b14cc37593fabf24627a93-text/javascript"></script>
<script src="public/user/lib/wow/wow.min.js" type="b4b14cc37593fabf24627a93-text/javascript"></script>
<script src="public/user/lib/rating/rating.js" type="b4b14cc37593fabf24627a93-text/javascript"></script>
<script src="public/user/lib/easing/easing.min.js" type="b4b14cc37593fabf24627a93-text/javascript"></script>
<script src="public/user/lib/waypoints/waypoints.min.js" type="b4b14cc37593fabf24627a93-text/javascript"></script>
<script src="public/user/lib/counterup/counterup.min.js" type="b4b14cc37593fabf24627a93-text/javascript"></script>
<script src="public/user/lib/owlcarousel/owl.carousel.min.js" type="b4b14cc37593fabf24627a93-text/javascript"></script>
<script src="public/user/lib/tempusdominus/js/moment.min.js" type="b4b14cc37593fabf24627a93-text/javascript"></script>
<script src="public/user/lib/tempusdominus/js/moment-timezone.min.js" type="b4b14cc37593fabf24627a93-text/javascript"></script>
<script src="public/user/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js" type="b4b14cc37593fabf24627a93-text/javascript"></script>
<script src="public/user/js/main.js" type="b4b14cc37593fabf24627a93-text/javascript"></script>
<script src="public/user/js/rocket-loader.min.js" data-cf-settings="b4b14cc37593fabf24627a93-|49" defer=""></script>