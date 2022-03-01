<?php require_once 'templates/header.php' ?>
<?php

$colors = ['primary', 'danger', 'info', 'warning', 'success', 'secondary', 'dark'];
// CODE HERE 
$numberOfColor = count($colors)-1;
// index get from 0

?>
    <div class="card">
        
        <div class="card-body">
            <?php
            // CODE HERE
            if (isset($_POST['subject'])){
                foreach($_POST['subject'] as $sub){
                    $number = rand(0,$numberOfColor);
                    $color = $colors[$number];
                ?>
                <button class="btn btn-<?php echo $color; ?>"><?php echo $sub ?></button>
                <?php
                }
            }
            ?>
        </div>
    </div>


<?php require_once 'templates/footer.php' ?>