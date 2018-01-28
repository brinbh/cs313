<?php
    // Start the session
    session_start();
?>
<?php include "../header-working.php"; ?>
        <div class="../main-content">

/*      Your browse page should contain a link to view the cart. On the view cart page, the user can see all the items
        that are in their cart. Provide a way to remove individual items from the cart.

        The view cart page should have a link to return to the browse page for more shopping and a link to continue to
        the checkout page.
*/

            <h1>My Shopping Cart</h1>
            <p>This is a list of what you are going to purchase.</p>
            <p>
            <?php
            $_SESSION['cart'] = array();
            $i = 0;
            foreach($_POST as $item){
                array_push($_SESSION['cart'], $item);
            }

            echo "<ul>";
            foreach($_SESSION as $listItem){
                echo $listItem;

            }
            echo "</ul>";
            var_dump($_SESSION['cart']);
            ?>
            </p>
        </div>
<?php include "../footer.php"; ?>