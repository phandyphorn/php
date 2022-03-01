<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
</head>
<body>
    <form action="" method="post">
        <label>User Name: </label>
        <input type="text" name="username">
        <input type="submit" name="sub" value="Send">
    </form>

    <?php
    // require_once('form.php');
    if (isset($_POST['username'])) {
        $name = $_POST['username'];
        echo "Your name is ". $name;
    }
    ?>
</body>
</html>