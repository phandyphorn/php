<?php require_once "templates/header.php" ?>
<?php
    // YOUR CODE HERE 
    if (isset($_POST['col'])){
        $color = $_POST['col'];
    }
    if (isset($_POST['ran'])){
        $range = $_POST['ran'];
    }
    if (isset($_POST['dat'])){
        $date = $_POST['dat'];
    };
?>
    <div class="alert alert-secondary">
        <strong>Color: </strong> <span><?php echo $color; ?></span>
    </div>
    <div class="alert alert-info">
        <strong>Range: </strong> <span><?php echo $range; ?></span>
    </div>
    <div class="alert alert-danger">
        <strong>Date: </strong> <span><?php echo $date; ?></span>
    </div>

<?php require_once "templates/footer.php" ?>