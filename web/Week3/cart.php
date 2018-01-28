<?php
    // Start the session
    session_start();
    if (!$key) $key = 0;
    $cart[$key] = $POST['addToCart'];
    $key++;
    var_dump($cart);

?>

<?php include "browse.php" ?>
