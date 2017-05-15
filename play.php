<?php
/**
 * Created by PhpStorm.
 * User: glyczak
 * Date: 5/15/17
 * Time: 2:28 PM
 */

include 'trial.php';

session_start(); //start or continue the session

if(!isset($_SESSION['current_quest'])) { //if user has no progress, start new session
    $_SESSION['current_quest'] = 1;
    $_SESSION['current_trial'] = 1;
} else { //if user has progress, check if they are submitting an answer & verify it
    if($_SERVER['request_method'] == 'GET' && isset($_GET['answer']) && isset($_SESSION['correct_answer'])) {
        if($_GET['answer'] == $_SESSION['correct_answer']) {
            $_SESSION['current_trial'] += 1;
            unset($_SESSION['correct_answer']);
        }
    }
}

if(Trial::quest_completed($_SESSION['current_quest'], $_SESSION['current_trial'])) { //advance quest when user is done
    if($_SERVER['request_method'] == 'GET') {
        $_SESSION['current_trial'] = 1;
        $_SESSION['current_quest'] += 1;
    }
} else { //if they're not done, get the current trial data and set the temporary answers
    $trial = new Trial($_SESSION['current_quest'], $_SESSION['current_trial']);
    $_SESSION['correct_answer'] = rand(10, 99);
    do {
        $wrong_answer = rand(10, 99);
    } while($wrong_answer = $_SESSION['correct_answer']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Quest <?php echo $_SESSION['current_quest'] ?>, Trial <?php $_SESSION['current_trial'] ?> - TreasureBox</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
</head>
<body>
<div class="vertical-center text-center">
    <div class="container panel-container">
        <div class="panel panel-default">
            <?php if(isset($trial)): ?>
            <div class="panel-heading">
                <h3 class="panel-title">Welcome to TreasureBox!</h3>
            </div>
            <div class="panel-body">
                <p><?php echo $trial->body ?></p>
                <p><strong>Do you choose to accept your quest?</strong></p>
                <form action="" method="get">
                    <?php if(rand(0, 1)): ?>
                    <button class="btn btn-default" name="answer" value="<?php echo $_SESSION['correct_answer'] ?>" onclick="submit();">
                        <?php echo $trial->correct_answer ?>
                    </button>
                    <button class="btn btn-default" name="answer" value="<?php echo $wrong_answer ?>" onclick="submit();">
                        <?php echo $trial->wrong_answer ?>
                    </button>
                    <?php else: ?>
                        <button class="btn btn-default" name="answer" value="<?php echo $wrong_answer ?>" onclick="submit();">
                            <?php echo $trial->wrong_answer ?>
                        </button>
                        <button class="btn btn-default" name="answer" value="<?php echo $_SESSION['correct_answer'] ?>" onclick="submit();">
                            <?php echo $trial->correct_answer ?>
                        </button>
                    <?php endif; ?>
                </form>
            </div>
            <?php else: ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Victory!</h3>
                    </div>
                    <div class="panel-body">
                        <p>Surpassing your challengers with surprising ease, you have successfully conquered the
                            <?php Trial::nth_quest($_SESSION['current_quest']) ?> quest!  You pause for a moment and
                            contemplate your victory.</p>
                        <p><strong>Shall you proceed?</strong></p>
                        <form action="">
                            <button class="btn btn-default" name="answer" value="onward" onclick="submit();">Onward!</button>
                        </form>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>