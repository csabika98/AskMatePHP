<?php

include_once 'Classes/Db.php';
include_once 'Classes/Questions.php';

?>


<?php

if($_SERVER['REQUEST_METHOD']== "POST"){
    $title = $_POST['title'];
    $message = $_POST['message'];

    $send = new Questions();
    $send->editQuestions($title, $message, $_GET['id']);

}


?>


<!DOCTYPE html>
<html>
<head>
    <title>Add new Question</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
<?php
if (isset($_POST['submitform'])){   header("Location: index.php");   }
?>
<div class="container">
    <div class="jumbotron">
        <div class="card">
            <h2 style="text-align: center">Edit your question!</h2>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="title">Question Title</label>
                        <input type="text" class="form-control" name="title" id="title" aria-describedby="title" placeholder="Enter your question title">
                        <small id="titleHelp" class="form-text text-muted">You can ask anything! really !</small>
                        <value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $title ?>">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <input type="text" class="form-control" name="message" id="message" placeholder="Message">
                        <small id="titleHelp" class="form-text text-muted">You can describe your problem here</small>
                        <value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $message ?>">
                    </div>
                    <button type="submit" name="submitform" class="btn btn-primary">Submit</button>
                </form>
                </button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
