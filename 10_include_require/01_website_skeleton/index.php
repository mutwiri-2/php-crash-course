<?php include_once "partials/header.php" ?>
<h1>Welcome to my cool website</h1>
<?php include_once "partials/footer.php" ?>

<!-- difference between include and require -->
<!-- When the file is not found using require it basically stops
the execution of the file. You should use require when that
file is absolutely necesary for the page's functionality

When the file is not found using include the rest of the code still executes.
You should use include when that file is not absolutely necesary for the page's
functionality -->

<!-- include_once and require_once used to avoid errors caused if we try including
or requiring a file more than once. -->