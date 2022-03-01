<?php
require_once('templates/header.php');

echo "<ul>";

// TODO
// - Your name is XXXXX
echo "<li> Your name is ". ($_GET['name']). "</li>";

// - Your hobbies areXXXXX
echo "<li> Your hobbies are ". $_GET['hobbies']. "</li>";
// - You are a boy/girl
echo "<li> You are a ". $_GET['sex']. "</li>";

echo "</ul>";


require_once('templates/footer.php');
