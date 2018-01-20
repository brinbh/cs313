<?php include "../header.php"; ?>
        <div class="../main-content">

            <h3>Hi, <?php echo $_GET["name"]; ?></h3><br>
            <p><strong>Contact Info:</strong><br>
                <?php echo $_POST["email"]; ?></p>

        </div>
<?php include "../footer.php"; ?>