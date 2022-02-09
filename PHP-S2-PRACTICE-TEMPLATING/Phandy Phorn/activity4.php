<!-- The first way======== -->
<?php
// A for loop to display a text without 'echo'
for ($i = 0; $i < 3; $i++) {
?>
    hello world
<?php
}
?>
<!-- ==================== -->

<!-- The second way====== -->
<?php
// Other syntax to do the same
for ($i = 0; $i < 3; $i++) :
?>
    hello world
<?php
endfor
?>

<!-- =================== -->

<!-- First again======== -->
<?php
// Instructions: Do the same to display 5 times your name
    for ($i = 0; $i < 5; $i++){
?>
    Phandy Phorn
<?php
}
?>
<!-- ================== -->

<!-- Second Again====== -->
<?php
// Other syntax to do the same
for ($i = 0; $i < 5; $i++) :
?>
    Phandy Phorn
<?php
endfor
?>
<!-- ================== -->

