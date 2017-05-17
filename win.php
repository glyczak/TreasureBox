<?php
/**
 * Created by PhpStorm.
 * User: glyczak
 * Date: 5/17/17
 * Time: 10:14 AM
 */

include_once 'galileo.php';
include_once 'trial.php';

session_start();

if(!isset($_SESSION['current_quest']) || !isset($_SESSION['current_trial']) || $_SESSION['current_quest'] != 4 || !Trial::quest_completed($_SESSION['current_quest'] - 1, $_SESSION['current_trial'])) {
    header('location: index.php');
}
unset($_SESSION['current_quest'], $_SESSION['current_trial']);
Galileo::win();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>You have won!</title>
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
                <p>The box is opened, and it's treasures are revealed unto you.  You ride home victorious having bested
                    your challenge against all odds.</p>
                <p><strong>Would you like to meet the developer of this game?</strong></p>
                <form action="https://gaba.space/">
                    <button class="btn btn-default" onclick="submit();">Sure!</button>
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