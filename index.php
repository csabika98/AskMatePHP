<?php

include_once 'Classes/Db.php';

?>

<!DOCTYPE html>

<html>
<head>
    <title>AskMate Alpha Version</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<?php
$dbtest = new Db();
$dbtest->connect();
?>

<div class="container">
    <div class="jumbotron">
        <div class="card">
            <h2 style="text-align: center">AskMate Alpha Version</h2>
        </div>
    <div class="card">
        <div class="card-body">
            <a href="add_question.php" button class="btn btn-primary">Add new Question</a>
            <a href="login.php" button class="btn btn-primary">Login</a>
            <a href="register.php" button class="btn btn-primary">Register</a>
        </div>
    </div>
        <div class="card">
            <div class="card-body">
                <?php
                $sql = "SELECT * FROM question";
                $stmt = $dbtest->connect()->query($sql);
                ?>
                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">Question Id (debug)</th>
                        <th scope="col">Question Title</th>
                        <th scope="col">Question Submission Time</th>
                    </tr>
                    </thead>
                    <?php
                    foreach ($stmt as $row){
                    ?>
                    <tbody>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <?php
                        echo '<td>'.'<a href="display.php?id='.$row['id'].'"</a>'.$row['title'].'</td>';
                        ?>

                        <td><?php
                            echo $row['submission_time'];
                        ?></td>
                    </tr>
                    </tbody>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>





















</html>



