<?php require_once "templates/header.php" ?>
<ul class="list-group">
<?php
   // YOUR CODE HERE
    if (isset($_POST['name'])){
       $name = $_POST['name'];
    }
    if (isset($_POST['num'])){
    $number = $_POST['num'];
    }
    if (isset($_POST['email'])){
        $email = $_POST['email'];
    }
    if (isset($_POST['pass'])){
        $password = $_POST['pass'];
    }
    if (isset($_POST['mess'])){
        $message = $_POST['mess'];
    }
?>


    <li class="list-group-item"><?php echo $name;?></li>
    <li class="list-group-item"><?php echo $number; ?></li>
    <li class="list-group-item"><?php echo $email; ?></li>
    <li class="list-group-item"><?php echo $password; ?></li>
    <li class="list-group-item"><?php echo $message; ?></li>

</ul>
<?php require_once "templates/footer.php" ?>