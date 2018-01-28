<?php include "../header-working.php"; ?>
    <?php
    // Start the session
    session_start();
    ?>
    <div class="../main-content">
        <div>
        <h1>Taco Cat Stickers</h1>
        <a href="view-cart.php">View Cart</a>
        <div class="shopping-list">
            <?php
            $cart = array();
            $items = array(
                array("Cat with Sombrero", "cat-sombrero.jpg", "$1.00 per sticker"),
                array("Happy Taco", "happy-taco.png", "$.50 per sticker"),
                array("Mexican Taco Cat", "mexican-taco-cat.jpg", "$1.00 per sticker"),
                array("Taco Cat #1", "taco-cat.jpg", "$.50 per sticker"),
                array("Taco Cat #2", "taco-cat-02.jpg", "$.50 per sticker"),
                array("Taco Cat #3", "taco-cat-03.jpg", "$.50 per sticker"),
                array("Taco Cat #4", "taco-cat-04.png", "$.50 per sticker"),
                array("Taco Cat with Beard", "taco-cat-with-beard.jpg", "$1.50 per sticker")
            );
            foreach($items as $item){
                echo "<div class='shopping-item'><form method='post' action='browse.php' method='post'>"
                ."<div class='image-box'><img src='"
                ."../img/".$item[1]
                ."'/></div>"
                ."<p class='price'>".$item[2]
                ."</p>"
                ."<input type='submit' name='add' value='Add ".$item[0]." to Cart' class='add-to-cart' />"
                ."</form></div>";
            }

//            if ($_POST['add']){
//                $_SESSION['myCart'] = $_POST['add']
//            }
//            if(!$_SESSION['cart']) $_SESSION['cart'] = array();
//
//            //save post as an array
//            if (!_SESSION['$key']) $_SESSION['$key'] = 0;
//            $_SESSION['cart'][$_SESSION['$key']] = $POST['addToCart'];
//            $_SESSION['$key']++;
//            echo "Key: ".$_SESSION['$key'];
//
//            //test
//            var_dump($_SESSION['myCart']);
//            ?>
        </div>

<?php include "../footer.php"; ?>
//session_start();
//
//if(!$_SESSION['POST']) $_SESSION['POST'] = array();
//
//foreach ($_POST as $key => $value) {
//    $_SESSION['POST'][$key] = $value;
//}
//
//var_dump($_SESSION['POST']);
//
//$reply = array('thread_id', 'reply_content');
//
//    $_POST['thread_id'] = 2; # test it
//
//    $_SESSION['reply'] = array();
//    foreach ($reply as $key)
//    {
//        if (isset($_POST[$key]))
//        {
//            $_SESSION['reply'][$key] = $_POST[$key];
//        }
//    }