<?php
    require "db/database.php";
    $db = get_db();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta title="Brittany's Portfolio">
        <link rel="stylesheet" type="text/css" href="css/main-style.css">
        <link rel="stylesheet" type="text/css" href="css/skills.css">
    </head>
    <body>
        <header>
            <!--Logo /-->
            <!--Navigation? /-->
            <h1>Hi, my name is Brittany</h1>
        </header>
        <!--Body /-->
        <div class="content">
            <div class="row">
                <div class="skills">
                    <div>
                        <p>HTML 5</p>
                        <div class="level seventy-five"></div>
                    </div>
                    <div>
                        <p>CSS 3</p>
                        <div class="level one-hundred"></div>
                    </div>
                    <div>
                        <p>Javascript</p>
                        <div class="level fifty"></div>
                    </div>
                    <div>
                        <p>Polymer 2</p>
                        <div class="level twenty-five"></div>
                    </div>
                    <div>
                        <p>Angular JS</p>
                        <div class="level twenty-five"></div>
                    </div>
                    <div>
                        <p>Illustrator</p>
                        <div class="level seventy-five"></div>
                    </div>
                    <div>
                        <p>InDesign</p>
                        <div class="level seventy-five"></div>
                    </div>
                    <div>
                        <p>Photoshop</p>
                        <div class="level fifty"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Projects /-->
                <a class="project" href="projects/conference-2016.html">2016 International Conference Website</a>

                <?php
                $statement = $db->prepare("SELECT * FROM project;");
                $statement->execute();
                // Go through each result
                while ($row = $statement->fetch(PDO::FETCH_ASSOC))
                {
                	// The variable "row" now holds the complete record for that
                	// row, and we can access the different values based on their
                	// name
                	echo '<p>';
                	echo '<p>' . $row['project_title'] . '</p>';
                }
                ?>
            </div>
        </div>
        <footer>
            <!--Contact Info /-->
            <!--Navigation? /-->
            <!--Link to Print Resume/-->
        </footer>
    </body>

</html>