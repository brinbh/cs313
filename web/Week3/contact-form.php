<?php include "../header-working.php"; ?>
        <div class="../main-content">
            <div>
            <h3>Hi, <?php echo $_POST["name"]; ?></h3><br>
            <p><strong>Contact Info:</strong><br>
                <a href="mailto:<?php echo $_POST["email"]; ?>"><?php echo $_POST["email"]; ?></a></p>
            <p>Major: <?php echo $_POST["major"]; ?></p>
            <p>Comments: <?php echo $_POST["major"]; ?></p>
            <p>Countries Visited: </p>
            <ul><?php echo $_POST["country"]; var_dump("country"); ?></ul>
            </div>

        </div>
<?php include "../footer.php"; ?>