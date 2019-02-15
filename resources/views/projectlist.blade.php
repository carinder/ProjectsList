<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/app.css"/>

        <title>Projects</title>
    <body> 

        <div id="app" class=".container-fluid">
            <div class="row">
                    <h1 class="col">Projects:</h1>
                    <add-project class="col"></add-project> <!-- Adds button and modal for adding a new task -->
            </div>
            <project-list></project-list> <!-- Tabs for sorting projects: All, Upcoming, Completed, Urgent, Important, Ignored, Optional -->   
        </div>

        <script src="js/app.js"></script>
    </body>
</html>
