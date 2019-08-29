<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To do list application with PHP</title>
    <link href='style.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
</head>
<body>
  
        <h1>TO DO LIST</h1>
        <form method="POST" id="form" action="index.php">
            <input type="text" name="task" class="task_inputs">
            <button type="submit" class="task_btn">Add Task</button>
        </form>

    <main>
        <section>
            <h2>TO DO</h2>
            <div class='task' id="task"></div>
        </section>
        <button type="button" id="btnhide" class="btnsave">Save</button>
        <section>
            <h2>DONE</h2>
            <div class='finish' id="finish"></div>
        </section>
    </main>

    <!-- Scirpt and Jquery -->
    <script src='script.js'></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>$( function() {
$( "#task" ).sortable();
$( "#task" ).disableSelection();
} );</script>
</body>
</html>