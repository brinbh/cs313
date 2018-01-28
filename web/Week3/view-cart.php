    <?php
    // Start the session
    session_start();
    $cart = array();
    ?>
<?php include "../header-working.php"; ?>
        <div class="../main-content">

/*      Your browse page should contain a link to view the cart. On the view cart page, the user can see all the items
        that are in their cart. Provide a way to remove individual items from the cart.

        The view cart page should have a link to return to the browse page for more shopping and a link to continue to
        the checkout page.
*/

            <h1>My Shopping Cart</h1>
            <p>Name of what I bought: </p>
            <p><?php
                echo $_POST['addToCart'];
            ?></p>
        </div>
<?php include "../footer.php"; ?>