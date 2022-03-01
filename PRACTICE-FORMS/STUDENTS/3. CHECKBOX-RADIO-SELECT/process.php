<?php require_once "templates/header.php" ?>
<?php
// YOUR CODE HERE
    if (isset($_POST['opt'])){
        $province = $_POST['opt'];
    }
    if (isset($_POST['gen'])){
        $gender = $_POST['gen'];
    }
?>
    <div class="card mb-3">
        <div class="card-header">Province</div>
        <div class="card-body">
            <h2 class="display-3"><?php echo $province; ?></h2>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">Gender</div>
        <div class="card-body">
            <!-- YOUR CODE HERE [gender] -->
            <?php
                if ($gender == "Female") {
                    echo "<img src='images/female.png' >"; 
                }else{
                    echo "<img src='images/male.png' >";
                }
            ?>
        </div>
    </div>
    <div class="card">
        <div class="card-header">Subject</div>
        <div class="card-body">
            <?php
                // YOUR CODE HERE [subject]
                if (isset($_POST)){
                    $subjects = $_POST['sub'];
                    foreach ($subjects as $key => $subject){
                    ?>
                    <button class="btn btn-primary"><?php echo $subject ?></button>
                    <?php
                    }
                }
            ?>
        </div>
    </div>
<?php require_once "templates/footer.php"?>