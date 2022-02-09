<?php
    $text = "Ronan is the best";
    $text = ucwords($text);
    $newText = "";
    for ($index= 0; $index<strlen($text); $index++) {
        if ($text[$index] != " "){
            $newText .= $text[$index];
        }
    }
    echo $newText;
?>