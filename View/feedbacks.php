<!DOCTYPE html>
<html>
<?php
include_once "../Controllers/FeedbacksController.php";
?>
    <head>
        <title>Feedback</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../Css/style1.css" rel="stylesheet">
        <link href="../Pictures/feedback.png" type="image/png" rel="shortcut icon">
    </head>
    <body>
        <div class="quiz-window">
            <div class="quiz-window-header">
                <div class="quiz-window-title" style="color: #00386c; font-size: 30px; padding-top: 7px; font-style: oblique;"><b>All Feedbacks</b></div>
            </div>
            
        <div class="quiz-window-body">
            <div class="gui-window-awards">
            <form action="" method="POST">
                <table class="guiz-awards-row guiz-awards-header" id="table" style="width:100%">
                    <tr>
                      <th class="quiz-window-title2">User</th>
                      <th class="quiz-window-title2">Feedback</th>
                      <th class="quiz-window-title2">&nbsp;</th>
                    </tr>
                    <?php
                    displayUsersFeedbacks();
                    ?>
                </table>
            </div>
        </div>
        </div>
        </form>
    </body>
</html>
