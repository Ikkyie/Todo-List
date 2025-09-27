<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (isset($_POST["tasktext"])) {
        $tasktext = htmlspecialchars($_POST["tasktext"]);

        if (!isset($_SESSION["tasks"])) {
            $_SESSION["tasks"] = [];
        }

        $_SESSION["tasks"][] = $tasktext;
    }

    if (isset($_POST["clean_all"])) {
        unset($_SESSION["tasks"]);
    }

    if (isset($_POST["delete_selected"]) && isset($_POST["selected"])) {
        foreach ($_POST["selected"] as $index) {
            unset($_SESSION["tasks"][$index]); 
        }
        
        $_SESSION["tasks"] = array_values($_SESSION["tasks"]);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <header>
      <h1>Todo List<h1>
    </header>
    <p>Put your task in the box and confirm, to delete click in the checkbox that you want and click in "Delete" button<p>
    <div class="actions">
       <form action="" method="post">
         <input type="text" name="tasktext" placeholder="Enter a new task">
         <button type="submit" id="addTaskBtn">Add Task</button>
       </form>
    </div>
  </div>
  <div class="tasklist">
    <br>
    <h2>Tasks:</h2>
    <?php
    if (isset($_SESSION["tasks"]) && count($_SESSION["tasks"]) > 0) {
        echo '<form action="" method="post">';
        echo "<ul>";
        foreach ($_SESSION["tasks"] as $index => $item) {
            echo "<li><label><input type='checkbox' name='selected[]' value='$index'> $item</label></li>";
        }
        echo "</ul>";
        echo '<button type="submit" name="delete_selected">Delete Selected</button>';
        echo '</form>';

        
        echo '<form action="" method="post" style="margin-top: 10px;">
                <button type="submit" name="clean_all">Clean all</button>
              </form>';
    } else {
        echo "<p>No items on the list.</p>";
    }
    ?>
  </div>
  
</body>
</html>
