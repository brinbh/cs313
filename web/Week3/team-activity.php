<!--

     Their email address, with a "mailto:" link for the email address

     Their major

     Their comments

     Again, this data need not be styled, but it should be labeled and separated from each other.

     Use the POST method for your form submission.

     Remember that PHP pages cannot be run by simply double clicking them. They must be run through a server (e.g., localhost). If necessary, please refer back to Running PHP on your Local Server from the Week 02 Preparation material for more information about running PHP files on your local computer.

     Add to your form a checkbox list for the continents the user has visited with the following options:

     North America

     South America

     Europe

     Asia

     Australia

     Africa

     Antarctica

     Then, modify your PHP page to read and display this list.

     STRETCH CHALLENGES

     After finishing the core requirements, ensure that everyone is at that point and understands the material. When everyone has completed the core requirements, you can move on to these stretch challenges.

     Change your HTML form to also be PHP script. For the majors, instead of hardcoding each of the options, instead, create a PHP array (or something similar...) that contains each of the desired majors and its abbreviation. Then, loop over this array to generate radio buttons for the different majors.

     For the places you have been, set the value to be some kind of id or code (e.g., "na" instead of "North America"). Then, in your PHP form handler (i.e., the results page), create a map/dictionary that you can use to convert from the id to the text you want to display. When looping through the values to display them, look them up in your map to get the display text.

     Deploy your pages to one of your servers and ensure that it works correctly there.

/-->
<?php include "../header-working.php"; ?>
        <div class="main-content">
            <form action="contact-form.php" method="post">
                 <p>Name: </p><input type="text" name="name"><br>
                 <p>Email: </p><input type="text" name="email"><br>
                 <p>Major: </p><br>
                    <input type="radio" name="major" value="computerScience">Computer Science<br>
                    <input type="radio" name="major" value="webDesignAndDevelopment">Web Design and Development<br>
                    <input type="radio" name="major" value="computerInformationTechnology">Computer information Technology<br>
                    <input type="radio" name="major" value="computerEngineering">Computer Engineering<br>
                 <p>Comments: </p><input type="text-area" name="comments"><br>
                 <input type="submit">
            </form>
            <div></div>
        </div>
<?php include "../footer.php"; ?>