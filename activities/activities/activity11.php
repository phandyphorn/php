<?php

    $fruit = ['name' => 'mango', 'quantity' => 15, 'price' => 10, 'country' => "Cambodia"];
	
	// The money you have
    $money = 5;
	
    // Display 
	// "Error: Your money cannot be negative" if money is negative,
    // or "You have enough money to buy this fruit"
    // or "You need more money to buy this fruit"

    if ($money < 0) {
        echo "Error: your money cannot be negative";
    }elseif($money = 5){
        echo "You have enough money to buy this fruit";
    }else {
        echo "You need more money to buy this fruit";
    }
    
?>