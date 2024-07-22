<?php
require_once '../config/connection.php';
require_once 'layouts/head.php';
$select = mysqli_query($conn,"SELECT * FROM intro WHERE status = 1");
$row = mysqli_fetch_assoc($select);
?>
<?php
require_once 'layouts/navbar.php';
?>
<?php
require_once 'layouts/pricingPlans.php';
?>
<?php
require_once 'layouts/acordion.php';
?>
<?php
require_once 'layouts/reviews.php';
?>
<?php
require_once 'layouts/getInTouch.php';
?>
<?php
require_once 'layouts/footer.php';
?>

<?php
include 'layouts/body.php';
?>