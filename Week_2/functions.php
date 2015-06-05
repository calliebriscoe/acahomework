<form action="functions.php" method="post">
  First Name: <input type="text" name="firstName"/>
    <input type="submit"/>
</form>

<?php

$enteredName = isset($_POST['firstName']) ? $_POST['firstName'] : null;

$enteredName = $_POST['firstName'];

echo '$enteredName='. $enteredName;

$functionOutput = sayHello($enteredName);

echo '<h3>'. $functionOutput . '<h3>';

Function sayHello($name) {
  return 'Hello'. $name;

};


?>
