<!DOCTYPE html>
<html>
<?php
include_once "../Controllers/ViewUsersController.php";
?>
    <head>
        <title>Users</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../Css/style1.css" rel="stylesheet">
        <link href="../Pictures/visitor.png" type="image/png" rel="shortcut icon">
    </head>
    <body>
        <div class="quiz-window">
            <div class="quiz-window-header">
                <div class="quiz-window-title" style="color: #00386c; font-size: 30px; padding-top: 7px; font-style: oblique;"><b>All Users</b></div>
                <a  href="../index.html"><button class="quiz-window-close">&times;</button></a>
            </div>

        <div class="quiz-window-body">
            <div class="gui-window-awards">
                <table class="guiz-awards-row guiz-awards-header" id="table" style="width:100%">
                    <tr>
                      <th class="quiz-window-title2">ID</th>
                      <th class="quiz-window-title2">Username</th>
                      <th class="quiz-window-title2">E-mail</th>

                    </tr>
                    <?php
displayUsers();
?>

                </table>
            </div>
        </div>
        </div>

    </body>
</html>
