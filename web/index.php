<!--Create an HTML page with a head element that provides a title for your page, and links to external CSS and JavaScript files.

On the HTML page, create 3 divs and a button labeled "Click Me".

Add classes and/or ids to your divs, then use the CSS to set their font-size and background color. Add function in your JavaScript file to alert the text "Clicked!", and have your button call this function when it is clicked.

Use CSS to make it so that hovering over any of the 3 divs causes the text to temporarily become bold.

Make it so that the user can specify custom colors for the first div. To accomplish this, add a text box and another button labeled "Change color". Write a JavaScript function that gets invoked by clicking this button that gets the text from the textbox and sets the color of the first div./-->

<!DOCTYPE html>
<html>
    <head>
        <title>CS 313 Assignments</title>
        <script href="functions.js"></script>
        <link href="main.css" type="text/css">
    </head>
    <body>
        <div class="text"><p>Here is some text.</p></div>
        <div class="text">Here is some text.</div>
        <div class="text">Here is some text.</div>
        <button>Click Me!</button>
    </body>
</html>