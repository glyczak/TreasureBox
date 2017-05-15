<?php
/**
 * Created by PhpStorm.
 * User: glyczak
 * Date: 5/15/17
 * Time: 9:29 AM
 */

session_start();
session_destroy();

function session_in_progress() {
    if (!is_readable(session_save_path())) return NULL;
    while (false !== ($entry = readdir(opendir(session_save_path())))) {
        if ($entry != "." && $entry != "..") {
            return false;
        }
    }
    return true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Welcome to TreasureBox!</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
</head>
<body>
<div class="vertical-center text-center">
    <div class="container panel-container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Welcome to TreasureBox!</h3>
            </div>
            <div class="panel-body">
                <p>To open the box, you must complete are series of trials divided among three quests.  With each
                    successive completion, a new level will be unlocked.  Once all levels are complete the box will unlock,
                    and it's treasure will be yours!</p>
                <p><strong>Do you choose to accept your quest?</strong></p>
                <form action="play.php">
                    <button class="btn btn-default" onclick="submit();">Let's Go!</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>