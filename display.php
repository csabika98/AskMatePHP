<?php
include_once 'Classes/Db.php';
include_once 'Classes/Questions.php';
include_once  'Classes/Answers.php';



?>


<?php
if (isset($_POST['submitform'])){   header("Location: index.php");   }
?>

<?php
if($_SERVER['REQUEST_METHOD']== "POST"){

    $delete = new Questions(); $delete->deleteQuestions($_GET['id']);

}
?>

<!DOCTYPE html>

<html>
<head>
    <title>Questions</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>





<div class="container">
    <div class="jumbotron">
        <div class="card">
        </div>
        <div class="card">
            <div class="card-body">
                <h1 style="text-align: center">Question</h1>
                <?php
                $display = new Questions();
                $display->displayQuestions($_GET['id']);
                ?>
                <form action="" method="post">
                    <button type="submit" style="background-color: black;" name="submitform" class="btn btn-primary">Delete</button>
                    <a href="index.php" button style="background-color: black;" class="btn btn-primary">Back</a>
                    <?php echo '<button style="background-color: black;" class="btn btn-primary">'.'<a href="edit_question.php?id='.$_GET['id'].'" style="color: white" </a>'.'Edit'.'</button>';?>
                    <?php echo '<button style="background-color: black;" class="btn btn-primary">' . '<a href="add_answer.php?id=' . $_GET['id'] . '" style="color: white" </a>' . 'Add answer to the question' . '</button>';?>
                </form>
            </div>
        </div>
    </div>
</div>
            <div class="container">
                <div class="jumbotron">
            <div class="card">
                <div class="card-body">
                    <h1 style="text-align:center; color: black">Answers</h1>
                    <?php
                    $answers = new Answers();
                    $answers->showAnswers($_GET['id']);
                    ?>
    </div>
            </div>
                </div>
            </div>

</div>


</body>
</html>
